<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karya extends Model
{
    use HasFactory;
    protected $table = 'karyas';
    protected $primaryKey = 'id_karya';
    public $incrementing = true;
    protected $fillable = ['nama_karya', 'harga', 'seniman', 'gambar'];
    public $timestamps = false;

}
