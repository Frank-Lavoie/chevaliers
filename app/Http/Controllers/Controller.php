<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    protected function get_bad_id_response(){
        return response()->json(['message' => "The specified id doesn't exist or does not belong to the current user.", 'success' => false, 'status' => "Request failed"], 400);
    }

    protected function get_empty_fields_response(){
        return response()->json(['message' => "One of the fields is missing", 'success' => false, 'status' => "Request failed"], 400);
    }

    protected function get_db_error_response($error_message){
        return response()->json(['message' => "Database error : " . $error_message, 'success' => false, 'status' => "Request failed"], 400);
    }

    protected function get_retrieving_error_response($model){
        return response()->json(['message' => "Error while retrieving " . $model . "(s)", 'success' => false, 'status' => "Request failed"], 500);
    }

    protected function get_creating_error_response($model, $error_message){
        return response()->json(['message' => "Error while creating " . $model . "(s)\n $error_message", 'success' => false, 'status' => "Request failed"], 500);
    }

    protected function get_logged_in_user(){
        return auth('sanctum')->user();
    }
}
