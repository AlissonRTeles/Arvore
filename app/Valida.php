<?php

namespace Arvore;

use Illuminate\Database\Eloquent\Model;

class Valida extends Model
{
    //
    protected $fillable = ['grupo_nome','grupo_membros','grupo_ok'];
    protected $guarded = ['id'];
    protected $table = 'grupo_models';
}
