<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    protected $fillable =[
        'name',
        'slogan',
        'description',
        'city',
        'street_name',
        'house_number',
        'zip_code'
    ];
}
