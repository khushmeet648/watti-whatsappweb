<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Broadcast extends Model
{
    use HasFactory;

    protected $table= "broadcast";
 
   
    protected $fillable = ['Name','TemplateMessage','Date'];
}
