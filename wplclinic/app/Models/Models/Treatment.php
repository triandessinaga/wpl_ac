<?php

namespace App\Models\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Treatment extends Model
// {
//     use HasFactory;
// }


// namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis_perawatan',
        'harga',
        'deskripsi',
        'foto_sebelum',
        'foto_sesudah'
    ];
}
