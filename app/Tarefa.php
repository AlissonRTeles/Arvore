<?php

namespace Arvore;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $fillable = ['tarefa_titulo','tarefa_descricao'];
    protected $guarded = ['id'];
    protected $table = 'tarefa';
}
