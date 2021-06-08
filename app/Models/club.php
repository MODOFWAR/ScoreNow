<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#Model untuk club
class club extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'club';
    protected $fillable = ['nama_club', 'akronim'];
    protected $primaryKey = 'id_club';
}
