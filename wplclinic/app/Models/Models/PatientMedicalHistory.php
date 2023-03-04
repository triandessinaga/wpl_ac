<?php

namespace App\Models\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class PatientMedicalHistory extends Model
// {
//     use HasFactory;
// }


// namespace App\Models;

// namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PatientMedicalHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'riwayat_penyakit',
        'riwayat_alergi',
        'obat_yang_dikonsumsi'
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
