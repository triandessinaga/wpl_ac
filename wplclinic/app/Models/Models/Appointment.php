<?php

namespace App\Models\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Appointment extends Model
// {
//     use HasFactory;
// }


// namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'tanggal_janji_temu',
        'waktu_janji_temu',
        'jenis_perawatan',
        'catatan'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
