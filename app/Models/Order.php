<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    public $table = "order";

    protected $guarded = [];

    public function penjahit()
    {
        return $this->belongsTo(User::class, 'penjahit_id');
    }
    public function pemesan()
    {
        return $this->belongsTo(User::class, 'pemesan_id');
    }
}


