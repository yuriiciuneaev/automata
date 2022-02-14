<?php

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactModel;

class ManageContactController extends Controller
{
    public function getContacts()
    {
        $this->contact = ContactModel::select('id', 'address', 'contact', 'facebook', 'twitter', 'instagram')
            ->orderBy('created_at', 'asc')
            ->first();

            // $this->data = array(
            //     'contacts' => $this->contact,
            // );
        // echo "<pre>"; print_r($this->contact); exit;
        return view('admin.pages.manageContacts', ['contacts' => $this->contact]);
    }
    

    public function updateContacts(Request $request){

        $contact = ContactModel::findOrFail(1);

        $contact->address = $request->address;
        $contact->contact = $request->contact;
        $contact->facebook = $request->facebook;
        $contact->twitter = $request->twitter;
        $contact->instagram = $request->instagram;

        if($contact->save()){
            return view('admin.pages.manageContacts', ['message' => 'Updated Succesfully', 'status' => '1']);
        }
        else{
            return view('admin.pages.manageContacts', ['message' => 'Ooops, something went wrong', 'status' => '0']);
        }
    }
}
