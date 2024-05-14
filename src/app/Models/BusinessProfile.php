<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessProfile extends Model
{
    use HasFactory;

    protected $table="settingsbusinessprofile";

    protected $fillable= ['profile','PhoneNumber','About','BusinessAddress','BusinessDescription','Email','BusinessIndustry','BusinessWebsite1','BusinessWebsite2'];
}
