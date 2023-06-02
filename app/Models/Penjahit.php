<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Penjahit extends Model
{
    use HasFactory;

    public $table = "penjahit";
    protected $fillable = [
        'user_id',
        'jenis_kelamin',
        'no_hp',
        'alamat',
        'link_iframe',
        'tanggal_lahir',
        'kategori',
        'jenis_layanan',
        'deskripsi',
        'kecamatan',
        'jam_buka',
        'jam_tutup',
        'thumbnail'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function gallery()
    {
        return $this->hasMany(Gallery::class);
    }
}
