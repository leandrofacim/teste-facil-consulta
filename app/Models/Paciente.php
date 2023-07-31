<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    use HasFactory;

    protected $table = 'pacientes';

    protected $fillable = [
        'nome',
        'cpf',
        'celular',
        'user_id'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function medicos()
    {
        return $this->belongsToMany(
            Medico::class,
            'medico_paciente',
            'paciente_id',
            'medico_id'
        );
    }
}
