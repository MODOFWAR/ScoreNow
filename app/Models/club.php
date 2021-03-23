<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class club extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'club';
    protected $fillable = ['nama_club', 'akronim'];
}
