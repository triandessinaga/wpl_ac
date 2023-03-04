<?php

namespace App\Models\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Patient extends Model
// {
//     use HasFactory;
// }
// namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'nomor_telepon',
        'nomor_identitas'
    ];

    public function medicalHistories()
    {
        return $this->hasMany(PatientMedicalHistory::class);
    }

    public function emergencyContact()
    {
        return $this->hasOne(ContactEmergency::class);
    }

    public function referralDoctor()
    {
        return $this->hasOne(ReferralDoctor::class);
    }

    public function appointments()
    {
        return $this->hasMany(Appointment::class);
    }

    public function medicalRecords()
    {
        return $this->hasMany(MedicalRecord::class);
    }
}
