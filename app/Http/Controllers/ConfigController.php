<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Config;
use Exception;

class ConfigController extends Controller
{
    public function add_config_route(Request $request){
        if(is_null($request->key) ||  
        is_null($request->label) ||    
        is_null($request->value)){
            return $this->get_empty_fields_response();
        }
     
        try{
            $config = new Config();
            $config->key = $request->key;
            $config->value = $request->value;
            $config->label = $request->label;
            $config->save();
            return response()->json(['message' => "Operation successfull", 'success' => true, 'status' => "Request successfull", 'id' => $config->key], 200);
        }
        catch(Exception $e){
            return $this->get_db_error_response($e->getMessage());
        }
    }
}
