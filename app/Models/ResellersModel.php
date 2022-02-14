<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ResellersModel extends Model
{
    use HasFactory;
    protected $table = 'resellers';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'name',
        'image',
        'link',
    ];
}
