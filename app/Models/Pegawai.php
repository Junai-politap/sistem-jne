<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;
use App\Models\Model;
use App\Models\Role;
use App\Models\ModelAuthenticate;

class Pegawai extends ModelAuthenticate
{
    protected $table = "admin_pegawai";

    public function Role()
    {
        return $this->hasMany(Role::class, 'id_pegawai');
    }

    function handleUploadFoto()
    {
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "pegawai";
            $randomStr = Str::random(5);
            $filename = time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->storeAs($destination, $filename);
            $this->foto = "app/" . $url;
            $this->save();

        }
    }

    function handleDelete()
    {
        $foto = $this->foto;
        if($foto){
            $path = public_path($foto);
            if(file_exists($path)){
                unlink($path);
            }
            return true;
        }
    }
}
