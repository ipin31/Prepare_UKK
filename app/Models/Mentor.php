<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mentor extends Model
{
    protected $table = 'guru';

    protected $fillable = [
        'nama',
        'nip',
        'gender',
        'alamat',
        'kontak',
        'email',
    ];

}
