<?php

namespace App\Models\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class ReferralDoctor extends Model
// {
//     use HasFactory;
// }

// namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReferralDoctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'nama_dokter_rujukan',
        'nomor_telepon_dokter_rujukan'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
