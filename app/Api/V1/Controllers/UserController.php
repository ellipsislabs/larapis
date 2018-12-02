<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends ApiBaseController {

    public function details(Request $request) {
        dd($request->oauth_client_id); die();
        return $this->responseGenerator->getServiceResponse();
    }

    public function login(Request $request) {
        dd($request->oauth_client_id); die();
        return $this->responseGenerator->getServiceResponse();
    }
}
