<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'hotel'; // Ganti dengan nama tabel yang sesuai

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_hotel', 'nama_hotel', 'lokasi', 'harga', // Sesuaikan dengan kolom-kolom yang ada di tabel
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // Tambahkan atribut yang ingin disembunyikan saat diubah menjadi array
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // Tambahkan konversi tipe atribut yang diperlukan
    ];

    // Jika diperlukan, Anda dapat menambahkan metode, relasi, atau aturan lain di sini
}
