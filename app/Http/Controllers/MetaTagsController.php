<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\VariablesModel;
use App\Models\MetaTagsModel;


class MetaTagsController extends Controller
{
    public function getMeta()
    {

        $this->meta_tags = MetaTagsModel::select('id', 'keywords', 'description', 'page')
            ->get();

        $this->data = array(
            // 'variables' => $this->variables,
            'meta_tags' => $this->meta_tags
        );
        // echo "<pre>"; print_r($this->data); exit;
        return view('admin.pages.settings', ['data' => $this->data]);
    }


    public function updateMetaTags(Request $request)
    {
        $data = [
            'message' => 'Oops, Something went wrong',
            'status' => '0'
        ];

        $meta_tags = MetaTagsModel::findOrFail($request->id);
        $meta_tags->page = $request->page;
        $meta_tags->keywords = $request->meta_keywords;
        $meta_tags->description = $request->meta_description;

        if ($meta_tags->save()) {
            $data = [
                'message' => 'Updated Succesfully',
                'status' => '1'
            ];
        }


        return $data;
    }
}
