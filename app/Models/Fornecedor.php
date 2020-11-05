<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedor';
    protected $primarykey = "idfornecedor";

    public $timestamps = false;
    protected$fillable = ['nome', 'endereco', 'telefone'];

    protected $guarded[];

}
