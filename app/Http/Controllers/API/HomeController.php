<?php

namespace App\Http\Controllers\API;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HomeController extends BaseController
{
    public function greeting():JsonResponse{
        $home = Home::findOrFail(1);

        return $this->sendResponse( $home, 'Retrieved  successfully.');
    }

    public function updateGreeting(Request $request){
        $validator = Validator::make($request->all(), [
            'greeting' => 'required',
        ]);


        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $greeting = Home::findOrFail(1);

        $greeting->update([
             'greeting'=> $request->greeting
        ]);

        return $this->sendResponse($greeting, 'updated successfully');
    }


}
