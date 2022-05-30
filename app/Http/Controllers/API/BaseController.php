<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller as Controller;


class BaseController extends Controller
{
        //send succes answer if it true
    public function sendResponse($result,$message){
        $response=[
            'success'=>true,
            'data'=>$result,
            'message'=>$message
        ];
        //response() is function already exist in php & 200 is the http protocol for procces succes
        return response()->json($response,200);

    }
    public function sendError($erorr,$erorrMessage=[],$code=404){
        $response=[
            'sucess'=>false,
            'data'=>$erorr
        ];
        if(!empty($erorrMessage)){
            $response['data']=$erorrMessage;
        }

        return response()->json($response,$code);
    }
}
