<?php

namespace App\Models\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class MedicalRecord extends Model
// {
//     use HasFactory;
// }


<?php

// namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'diagnosis_dokter',
        'resep_obat',
        'hasil_tes_laboratorium',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }
}
