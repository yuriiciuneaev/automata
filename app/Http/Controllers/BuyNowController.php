<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ResellersModel;
use App\Models\ContactModel;
use App\Models\MetaTagsModel;

class BuyNowController extends Controller
{
    public function getResellers()
    {
        $this->contacts = ContactModel::select('facebook', 'twitter', 'instagram')
            ->orderBy('created_at', 'asc')
            ->first();

        $this->services = ResellersModel::select('id', 'image', 'link')
            ->orderBy('created_at', 'asc')
            ->get();

        $this->meta_tags = $this->getMetaTags(5);

        $this->data = array(
            'resellers' => $this->services,
            'contacts' => $this->contacts,
            // 'sliders' => $this->sliders,
            'meta_tags' => $this->meta_tags
        );
        // echo "<pre>"; print_r($this->data); exit;    
        return view('guest.pages.buy-now', ['data' => $this->data]);
    }
}
