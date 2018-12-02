<?php

namespace App\Api\V1\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Api\V1\Response\Response;


class ApiBaseController extends Controller
{
    protected $responseGenerator;

    public function __construct(Request $request) {
        $this->responseGenerator = new Response($request);
    }

    /**
     * Common Method to set Developer Message & Debug Trace in API
     *
     * @param string $debugTrace Error trace in Detail
     *
     */
    public function handleAPIErrorMessages($debugTrace) {
        $aDeveloperMessage = explode("|", $debugTrace);
        $this->responseGenerator->setDeveloperMessage($aDeveloperMessage[0]);
        $this->responseGenerator->setDebugTraceMessage($debugTrace);
    }
}
