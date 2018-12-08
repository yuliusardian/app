<?php
/**
 * Created by PhpStorm.
 * User: yuliusardian
 * Date: 12/8/18
 * Time: 12:11 PM
 */

namespace App\Http\Controllers;

require_once env('PIMCORE_PATH');

use Carbon\Carbon;

class Controller extends DefaultController
{

    public $code, $message, $data, $transaction_token;

    public function setCode($code = null)
    {
        $this->code = $code;
    }

    public function setMessage($message = null)
    {
        $this->message = $message;
    }

    public function setData($data = null)
    {
        $this->data = $data;
    }

    protected function setTransactionToken()
    {
        $this->transaction_token = Carbon::now()->timestamp;
    }

    public function getReturn()
    {
        $response['code']               = $this->code;
        $response['message']            = $this->message;
        $response['data']               = $this->data;

        return $response;
    }
}
