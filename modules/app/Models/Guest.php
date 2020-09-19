<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'in_guest';
    protected $primaryKey = 'id_guest'; //? kita bsa menentukan primary_key pada table selain id
    protected $fillable = ['name', 'email', 'phone', 'address', 'id_group', 'id_sub_group']; //? properti fillable apa sja yg diboleh kan untuk mass_assigment request->all();
    protected $guards = ['created_at']; //? properti fillable apa sja yg diboleh kan untuk mass_assigment request->all();
}
