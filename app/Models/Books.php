<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'books';

    /**
     * The attributes that are mass assignable
     * 
     * @var array<string>
     */
    protected $fillable = [
        'nama_buku',
        'penerbit',
        'description',
        'tahun_penerbit',
        'jumlah_halaman',
    ];

    /**
     * The attributes that should be cast
     * 
     * @var array<string, string>
     */
    protected $casts = [
        'tahun_penerbit' => 'integer',
        'jumlah_halaman' => 'integer',
    ];
}
