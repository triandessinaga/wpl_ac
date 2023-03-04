<?php

namespace App\Models\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class ContactEmergency extends Model
// {
//     use HasFactory;
// }


// namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactEmergency extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'nama_kontak_darurat',
        'nomor_telepon_kontak_darurat'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
