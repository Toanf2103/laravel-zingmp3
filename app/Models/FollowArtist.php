<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowArtist extends Model
{
    use HasFactory;

    protected $table = 'follow_artists';
    protected $fillable = ['id_user', 'id_artist'];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'id_user');
    }

    public function artist()
    {
        return $this->hasOne(User::class, 'id', 'id_artist');
    }
    
}
