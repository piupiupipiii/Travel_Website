<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_maskapai
 * @property string $nama_maskapai
 * @property string $kode_maskapai
 */
class Maskapai extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'maskapai'; // Change 'maskapais' to the actual table name if different

    protected $primaryKey = 'id_maskapai';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_maskapai', 'nama_maskapai', 'kode_maskapai', // Add other attributes as needed
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        // Add any attributes that should be hidden when converted to an array
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        // Add any attribute casting as needed
    ];
}
