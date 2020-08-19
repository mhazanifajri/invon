<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    protected $table = 'in_guest';
    protected $primaryKey = 'id'; //? kita bsa menentukan primary_key pada table selain id
    protected $fillable = ['name', 'phone', 'email', 'status', 'group_id', 's_group_id']; //? properti fillable apa sja yg diboleh kan untuk mass_assigment request->all();
    protected $guards = ['created_at']; //? properti fillable apa sja yg diboleh kan untuk mass_assigment request->all();
}
