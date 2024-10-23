<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GroupMember extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'group_members';
    protected $fillable = [
        'ref_group_id',
        'ref_user_id',
        'role',
        'is_pinned',
        'is_archived',
        'notification_status',
    ];

    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
