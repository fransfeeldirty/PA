<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    public $table = "gallery";

    protected $fillable = [
        'penjahit_id', 'judul', 'gambar'
    ];

    public function penjahit()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
