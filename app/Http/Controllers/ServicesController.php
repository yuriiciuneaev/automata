<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ServicesModel;
use App\Models\ContactModel;
use App\Models\MetaTagsModel;

class ServicesController extends Controller
{
    public function getServices()
    {
        $this->contacts = ContactModel::select('facebook', 'twitter', 'instagram')
            ->orderBy('created_at', 'asc')
            ->first();

        $this->services = ServicesModel::select('id', 'name', 'description', 'image')
            ->orderBy('created_at', 'asc')
            ->get();

        $this->meta_tags = $this->getMetaTags(3);

        $this->data = array(
            'services' => $this->services,
            'contacts' => $this->contacts,
            'meta_tags' => $this->meta_tags
        );
        // echo "<pre>"; print_r($this->data); exit;    
        return view('guest.pages.services', ['data' => $this->data]);
    }
}
