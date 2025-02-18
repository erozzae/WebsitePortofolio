<?php

namespace App\Http\Controllers\API;
use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;

class HomeController extends BaseController
{
    public function home():JsonResponse{
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

        return $this->sendResponse($greeting, 'Updated Successfully');
    }

    public function updateAboutMe(Request $request){
        $validator = Validator::make($request->all(), [
            'about_me' => 'required',
        ]);


        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }

        $about_me = Home::findOrFail(1);

        $about_me->update([
             'about_me'=> $request->about_me
        ]);

        return $this->sendResponse($about_me, 'Updated Successfully');
    }



}
