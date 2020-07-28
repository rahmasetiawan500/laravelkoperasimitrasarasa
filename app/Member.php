<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Member extends Model
{
    use SoftDeletes;
    
    protected $fillable = ['nama', 'email', 'jeniskelamin', 'tempat', 'lahir', 'pekerjaan', 'notelp', 'alamat'];

}
