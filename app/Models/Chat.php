<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Chat extends Model
{
    use HasFactory,SoftDeletes;

    protected $table = 'chats';
    protected $fillable = [
        'sender_user_id',
        'receiver_user_id',
        'ref_group_id',
        'message',
        'filename',
        'file_type',
        'type',
        'is_forward',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
