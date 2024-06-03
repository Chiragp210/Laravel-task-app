<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $table = "person";
    protected $primarykey = "id";
    
    protected $fillable = [
        "fname",
        "lname",
        "phone",
        "email",
        "photo",
    ] ;
}
