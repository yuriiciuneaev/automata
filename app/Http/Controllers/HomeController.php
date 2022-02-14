<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ItemsModel;
use App\Models\ContactModel;
use App\Models\SlidersModel;
use App\Models\MetaTagsModel;


class HomeController extends Controller
{
    public function getProducts()
    {
        //     $this->contacts = ContactModel::select('facebook', 'twitter', 'instagram')
        //         ->orderBy('created_at', 'asc')
        //         ->first();

        //     $this->products = ItemsModel::select('id', 'name', 'description', 'image')
        //         ->orderBy('created_at', 'asc')
        //         ->get();
        //     $this->sliders = SlidersModel::select('id', 'title', 'description', 'image', 'button_text', 'button_link')
        //         ->orderBy('created_at', 'asc')
        //         ->get();
        //     $this->meta_tags = $this->getMetaTags(1);

        //     $this->data = array(
        //         'products' => $this->products,
        //         'contacts' => $this->contacts,
        //         'sliders' => $this->sliders,
        //         'meta_tags' => $this->meta_tags
        //     );
        //     // echo "<pre>"; print_r($this->data); exit;
        //     return view('guest.pages.index', ['data' => $this->data]);
        // }
        return view('guest.pages.index');
    }
}