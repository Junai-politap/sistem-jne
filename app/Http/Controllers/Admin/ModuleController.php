<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Module;
use App\Models\Pegawai;
use App\Models\Role;


class ModuleController extends Controller
{
  
    public function index()
    {
        $data['list_module'] = Module::all();

        return view('admin.module.index', $data);
    }

    
    public function create()
    {
        return view('admin.module.create');
    }

   
    public function store()
    {
        $module = New Module;
        $module->app = request('app');
        $module->name = request('name');
        $module->tag = request('tag');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->save();

        return redirect('admin/module')->with('success', 'Data Berhasil di Tambahkan');
    }

    
    public function show(Module $module)
    {
        $data['module'] = $module;
        $data['list_pegawai'] = Pegawai::all();        
        return view('admin.module.show', $data);
    }

   
    public function edit(Module $module)
    {
        $data['module'] = $module;

        return view('admin.module.edit', $data);
    }

    
    public function update(Request $request, $id)
    {
        $module->app = request('app');
        $module->tag = request('tag');
        $module->name = request('name');
        $module->title = request('title');
        $module->subtitle = request('subtitle');
        $module->url = request('url');
        $module->color = request('color');
        $module->menu = request('menu');
        $module->save();

        return redirect('admin/module')->with('warning', 'Data Berhasil di Edit');
    }

    public function destroy($module)
    {
        Module::destroy($module);

        return back()->with('danger', 'Data Berhasil di Hapus');
    }

    public function addRole()
    {
        $role = New Role;
        $role->id_module = request('id_module');
        $role->id_pegawai = request('id_pegawai');
        $role->save();

        return back()->with('success', 'Role Berhasil di Tambahkan');
    }

    public function destroyRole($role)
    {
        Role::destroy($role);

        return back()->with('danger', 'Data Role Berhasil di Hapus');
    }
}
