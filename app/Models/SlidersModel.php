<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlidersModel extends Model
{
    use HasFactory;
    protected $table = 'sliders';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'title',
        'description',
        'image',
        'button_text',
        'button_link'
    ];
}
