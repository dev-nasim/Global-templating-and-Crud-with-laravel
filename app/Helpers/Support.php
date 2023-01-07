<?php
if (!function_exists('returnData')){
    function returnData($status = 2000,$result = false, $message = false){
        $response = [];
        if ($status){
            $response['status'] = $status;
        }
        if ($message){
            $response['message'] = $message;
        }
        if ($result){
            $response['result'] = $result;
        }
        return response()->json($response);
    }
}
