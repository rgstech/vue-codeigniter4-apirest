<?php

namespace App\Models;

use CodeIgniter\Model;



class UsuarioModel extends Model
{

    protected $table      = 'usuarios';
    protected $primaryKey = 'id';

    protected $allowedFields = [ //segurança: define quais campos podem ser alterados
        'nome',
        'email'
    ];
}
