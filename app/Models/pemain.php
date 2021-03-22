<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemain extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pemain';
    protected $fillable = ['nama_pemain', 'no_punggung', 'gol', 'assist'];
}
