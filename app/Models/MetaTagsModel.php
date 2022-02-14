<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MetaTagsModel extends Model
{
    use HasFactory;
    protected $table = 'meta_tags';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'keywords',
        'description',
        'page'
    ];
}
