<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TemplateMessage extends Model
{
    use HasFactory;

    protected $table= "templatemessage";
 
   
    protected $fillable = ['Name','Category','Language','BroadcastTitle','Body','Footer','Buttons'];

}
