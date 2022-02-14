<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\ContactsModel;
use App\Models\ContactModel;
use App\Mail\InquiryEmail;
use Illuminate\Support\Facades\Validator;
use Throwable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function reloadCaptcha()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function getContacts()
    {
        $this->contacts = ContactModel::select('address', 'contact', 'facebook', 'twitter', 'instagram')
            ->orderBy('created_at', 'asc')
            ->first();

        $this->meta_tags = $this->getMetaTags(4);
        $this->map_address = rawurlencode($this->contacts['address']);

        $this->data = array(
            'contacts' => $this->contacts,
            'meta_tags' => $this->meta_tags,
            'map_address' => $this->map_address
        );  
        return view('guest.pages.contact', ['data' => $this->data]);
    }

    public function sendEmail(Request $request)
    {

        $details = [
            'name' => $request->name,
            'email' =>  $request->email,
            'message' =>  $request->message,
            'captcha' =>  $request->captcha,
        ];

        

        $messages = [
            'captcha.captcha' => 'Captcha mismatched',
        ];

        $rules = [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
            'captcha' => 'required|captcha'
        ];
        
        $validator = Validator::make($details, $rules, $messages);

        if ($validator->fails()) {
            return ['message' => 'Captcha mismatched'];
        }

        Mail::to("ultistik@filamentone.com")->send(new InquiryEmail($details));

        return ['message' => 'message sent'];
        // return back();
    }
}
