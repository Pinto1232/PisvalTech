<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class ContactModel extends Model
{
    // creating a fillable

    protected $table = 'contacts';
    protected $primaryKey = 'id';
    public $timestamp = true;

    protected $fillable =[
        'nome',
        'email',
        'númeroTel',
        'nomeProjecto',
        'objectivoProjecto'
    ];
}
