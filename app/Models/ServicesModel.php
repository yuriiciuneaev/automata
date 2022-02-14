<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServicesModel extends Model
{
    use HasFactory;
    protected $table = 'services';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'name',
        'description',
        'image'
    ];
}
