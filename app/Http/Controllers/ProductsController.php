<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\ContactModel;
use App\Models\MetaTagsModel;

class ProductsController extends Controller
{
    public function index(){
        $this->contacts = ContactModel::select('facebook', 'twitter', 'instagram')
        ->orderBy('created_at', 'asc')
        ->first();

        $this->meta_tags = $this->getMetaTags(2);

        $this->data = array(
            'contacts' => $this->contacts,
            'meta_tags' => $this->meta_tags
        );
        // echo "<pre>"; print_r($this->data); exit;    
        return view('guest.pages.products', ['data' => $this->data]);
    }
    public function getProducts()
    {
        // $this->contacts = ContactModel::select('facebook', 'twitter', 'instagram')
        // ->orderBy('created_at', 'asc')
        // ->first();

        $this->products = ProductsModel::select('id', 'name', 'description', 'image')
            ->orderBy('created_at', 'asc')
            ->paginate(10);

        // $this->meta_tags = $this->getMetaTags(2);

        $this->data = array(
            'products' => $this->products,
            // 'contacts' => $this->contacts,
            // 'meta_tags' => $this->meta_tags
        );
        // return view('guest.pages.products', ['data' => $this->data]);
        return $this->products;
    }
}
