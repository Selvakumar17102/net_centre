<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTickets extends Model
{
    use HasFactory;
    protected $fillable = [
        'admin_id',
        'ticket_id',
        'company',
        'subject',
        'description',
        'attachmentattachmentattachment',
        'ticket_status',
        'updated_by',
        'updated_date',
    ];
}
