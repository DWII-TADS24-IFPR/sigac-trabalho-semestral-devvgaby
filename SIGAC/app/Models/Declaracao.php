<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Aluno;
use App\Models\Comprovante;

class Declaracao extends Model
{
    use SoftDeletes;

    protected $table = "declaracoes";

    protected $fillable = ['hash', 'data', 'aluno_id', 'comprovante_id'];

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function comprovante()
    {
        return $this->belongsTo(Comprovante::class);
    }
}
