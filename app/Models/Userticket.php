<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'description',
        'attachmenfile'
    ];
}
