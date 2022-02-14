<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\MetaTagsModel;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getMetaTags($id)
    {
        $this->meta_tags = MetaTagsModel::select('id', 'keywords', 'description', 'page')
            ->where('id', '=', $id)
            ->get();
        return $this->meta_tags;
    }
}
