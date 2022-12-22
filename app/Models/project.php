<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $primaryKey ='studentID';
    protected $keyType = 'string';

    public $timestamps=false;
}
