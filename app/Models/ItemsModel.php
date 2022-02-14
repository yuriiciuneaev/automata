<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsModel extends Model
{
    use HasFactory;
    protected $table = 'items';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'name',
        'description',
        'image'
    ];
}
