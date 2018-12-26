<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Pimcore\Model\DataObject\User as UserPimcore;
use Pimcore\Model\DataObject\UserLevel;
use Validator;
use Hash;
use AppBundle\Tool\Folder;
use Carbon\Carbon;

class RegisterCustomController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'      => 'required',
            'email'     => 'required|unique:object_1,email',
            'password'  => 'required'
        ]);
        if ($validator->fails()) {
            return back()->withErrors($validator->errors());
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

            return back()->with([
                'success' => 'Yoho, Register successfully ! Now you can login.'
            ]);

        } catch (\Exception $e) {

            return back()->with([
                'failed' => 'OMG ! Something went wrong happened. Please contact your webadmin.'
            ]);

        }
    }

}
