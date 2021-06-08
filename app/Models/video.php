<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'highlight_video';
    protected $fillable = ['nama_video', 'link_video'];
}
