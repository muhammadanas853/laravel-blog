<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $fillable = [
        'site_title', 'contact_email', 'footer_text', 'phone_number', 'address',
        'facebook_link', 'twitter_link', 'instagram_link', 'pinterest_link',
        'youtube_link', 'light_logo', 'dark_logo'
    ];
}
