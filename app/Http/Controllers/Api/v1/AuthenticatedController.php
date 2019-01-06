<?php

namespace App\Http\Controllers\Api\v1;

use App\User;
use AppBundle\Tool\Folder;
use Carbon\Carbon;
use Pimcore\Model\DataObject\User as UserPimcore;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Pimcore\Model\DataObject\UserLevel;
use Validator;
use JWTAuth;
use App\Http\Controllers\Controller;

class AuthenticatedController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|email|unique:object_1,email',
            'password'  => 'required'
        ]);
        if ($validator->fails()) {
            $this->setCode('register.validation.failed');
            $this->setMessage('register.validation.failed');
            $this->setData($validator->errors());

            return $this->getReturn();
        }

        $name       = ucwords($request->name);
        $email      = $request->email;
        $level      = UserLevel::getByCode('free', 1);
        $password   = Hash::make($request->password);

        try {

            $folderUsers    = Folder::checkAndCreate('Users');
            $folderYear     = Folder::checkAndCreate(date('Y'), $folderUsers);
            $folderMonth    = Folder::checkAndCreate(date('m'), $folderYear);
            $folderDay      = Folder::checkAndCreate(date('d'), $folderMonth);

            $userPimcore = new UserPimcore();
            $userPimcore->setKey(\Pimcore\File::getValidFilename(Carbon::now()));
            $userPimcore->setParentId($folderDay->getId());
            $userPimcore->setName($name);
            $userPimcore->setEmail($email);
            $userPimcore->setLevel($level);
            $userPimcore->setPassword($password);
            $userPimcore->setPublished(true);
            $userPimcore->save();

            $this->setCode('register.success');
            $this->setMessage('register.success');

            return $this->getReturn();
        } catch (\Exception $e) {
            $this->setCode('register.exception');
            $this->setMessage('register.exception');

            return $this->getReturn();
        }
    }

    public function login(Request $request)
    {
        $validator  = Validator::make($request->all(), [
            'email'     => 'required|email',
            'password'  => 'required'
        ]);
        if ($validator->fails()) {
            $this->setCode('login.validation.failed');
            $this->setMessage('login.validation.failed');
            $this->setData($validator->errors());

            return $this->getReturn();
        }
        $credentials = $request->only('email', 'password');
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                $this->setCode('login.attempt.jwt.failed');
                $this->setMessage('login.attempt.jwt.failed');

                return $this->getReturn();
            }
        } catch (JWTException $e) {
            $this->setCode('login.jwtexception');
            $this->setMessage('login.jwtexception');

            return $this->getReturn();
        }

        return $this->responseWithToken($token);
    }

    public function logout(Request $request)
    {
        $this->validate($request, ['token' => 'required']);

        try {
            JWTAuth::invalidate($request->input('token'));
            return response()->json(['ok' => true, 'message' => "You have okfully logged out."]);
        } catch (JWTException $e) {
            // something went wrong whilst attempting to encode the token
            return response()->json(['ok' => false, 'error' => 'Failed to logout, please try again.'], 500);
        }
    }

    private function responseWithToken($token)
    {
        $datas['access_token']  = $token;
        $datas['token_type']    = 'bearer';

        $this->setCode('authenticated.success');
        $this->setMessage('authenticated.success');
        $this->setData($datas);

        return $this->getReturn();
    }

}
