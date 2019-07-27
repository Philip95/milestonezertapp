<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonenRolle extends Model {
    protected $fillable = [
        'u_id', 'privatperson', 'geschaeftsperson', 'uid', 'admin'
    ];
}
