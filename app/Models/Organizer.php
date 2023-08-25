<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Organizer extends Model
{
    use HasApiTokens, HasFactory, Notifiable; 

    protected $fillable = [
        'name',
        'email',
        'password',
        'city',
        'state',
        'zip_code',
        'bio',
        'image_path',
    ];

    protected $hidden = [
        'password',
    ];

    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}