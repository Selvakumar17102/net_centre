<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'account_number',
        'company_name',
        'address-line_1',
        'address-line_2',
        'address-line_3',
        'address-line_4',
        'post_code',
        'state',
        'city',
        'salutation',
        'phone_number',
        'profile_image',
        'whatsapp_number',
        'position',
        'password',
    ];
    public function customername(){
        return $this->hasMany(Admin::class,'id','adminid');
    }
}

