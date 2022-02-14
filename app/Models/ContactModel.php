<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactModel extends Model
{
    use HasFactory;
    protected $table = 'contacts';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'address',
        'contact',
        'facebook',
        'twitter',
        'instagram',
    ];
}
