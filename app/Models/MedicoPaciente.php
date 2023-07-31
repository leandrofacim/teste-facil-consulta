<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicoPaciente extends Model
{
    use HasFactory;

    protected $table = 'medico_paciente';

    protected $fillable = [
        'medico_id',
        'paciente_id',
    ];

    protected $with = [
        'medico',
        'paciente',
    ];

    public function medico()
    {
        return $this->belongsTo(Medico::class, 'medico_id');
    }

    public function paciente()
    {
        return $this->belongsTo(Paciente::class, 'paciente_id');
    }
}
