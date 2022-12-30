<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\ModelAuthenticate;

class Pegawai extends ModelAuthenticate
{
    protected $table = "admin_pegawai";
}
