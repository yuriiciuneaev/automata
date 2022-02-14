<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VariablesModel extends Model
{
    use HasFactory;
    protected $table = 'variables';
    protected $primaryKey = 'id';
    public $timestamps = 'false';
    protected $fillable = [
        'key_name',
        'value',
    ];

}
