<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class site_contato extends Model
{
    protected $fillable = ['nome', 'site', 'email', 'telefone', 'motivo_contato', 'mensagem'];
}
