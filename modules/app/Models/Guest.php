<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; /// panggil class softdelete

class Guest extends Model
{
    use SoftDeletes; //? use method softdelete in class from delcare class

    protected $table = 'in_guest';
    protected $primaryKey = 'id_guest'; //? kita bsa menentukan primary_key pada table selain id
    protected $fillable = ['name', 'email', 'phone', 'address', 'id_group', 'id_sub_group']; //? properti fillable apa sja yg diboleh kan untuk mass_assigment request->all();
    protected $guards = ['created_at']; //? properti fillable apa sja yg diboleh kan untuk mass_assigment request->all();
    protected $dates = ['deleted_at']; //? declare coloumn deleted_at
}
