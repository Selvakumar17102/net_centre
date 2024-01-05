<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customeruser extends Model
{
    use HasFactory;
    protected $fillable = [
        'email',
        'name',
        'phone_number'
    ];
}
