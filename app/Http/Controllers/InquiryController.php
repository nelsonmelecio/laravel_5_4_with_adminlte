<?php

namespace App\Http\Controllers;

use App\Models\Inquiry;
use App\Mail\InquiryMailForm;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class InquiryController extends Controller
{
    public function Inquiry(Request $request)
    {
    	$inquiry = new Inquiry();

        $inquiry->name = $request->input('name');
        $inquiry->email  = $request->input('email');
        $inquiry->message  = $request->input('message');

		$inquiry->save();

        Mail::to($inquiry->email)
        	->send(new InquiryMailForm($inquiry));

        return redirect()->to('/');
    }
}
