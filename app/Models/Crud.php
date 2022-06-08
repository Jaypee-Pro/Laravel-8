<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// eloquent model
class Crud extends Model
{
    use HasFactory;
    protected $table = 'crud';
    protected $fillable = ['name','username','password','status'];
}
