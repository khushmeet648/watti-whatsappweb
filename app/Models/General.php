<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class General extends Model
{
    use HasFactory;

    protected $table= 'settingsgeneral';

    protected $fillable= ['timezone','language','button','direction'];
}
