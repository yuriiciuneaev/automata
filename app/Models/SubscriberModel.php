<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscriberModel extends Model
{
    use HasFactory;
    protected $table = 'subscriber';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'email',
    ];
}
