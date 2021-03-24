<?php

namespace App\Models;

use CodeIgniter\Model;


class ProdutoModel extends Model
{

    protected $table      = 'produto';
    protected $primaryKey = 'id';


    protected $allowedFields = [ //segurança: define quais campos podem ser alterados
        'titulo',
        'usuario_fk'
    ];
    
}
