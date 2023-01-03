<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Model;
use App\Models\Role;

class Module extends Model
{
    protected $table = "admin_module";

    public function Role()
    {
        return $this->hasMany(Role::class, 'id_module');
    }
}