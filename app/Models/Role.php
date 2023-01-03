<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Pegawai;
use App\Models\Module;

class Role extends Model
{
    protected $table = "admin_role";

    public function Pegawai()
    {
        return $this->belongsTo(Pegawai::class, 'id_pegawai');
    }


    public function Module()
    {
        return $this->belongsTo(Module::class, 'id_module');
    }
}
