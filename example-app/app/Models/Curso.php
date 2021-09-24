<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    protected $primaryKey = 'id_curso';

    protected $fillable = [
        'id_curso','nome_do_curso','linguagem_do_curso','nivel_do_curso','cad_data','desc_curso',
    ];

    public $timestamps = false;

}
