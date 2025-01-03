<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BroadcastMember extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'broadcast_members';
    protected $fillable = [
        'ref_broadcast_id',
        'ref_user_id',
    ];
    protected $hidden = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];
}
