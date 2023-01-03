<x-module.admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <x-template.button.back-button url="admin/pegawai" />
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <dl>
                                    <dt>App</dt>
                                    <dd>{{ $module->app }}</dd>
                                    <dt>Nama</dt>
                                    <dd>{{ $module->name }}</dd>
                                    <dt>Tag</dt>
                                    <dd>{{ $module->tag }}</dd>
                                </dl>
                            </div>
                            <div class="col-md-6">
                                <x-template.module-box url="{{ $module->url }}" color="{{ $module->color }}"
                                    title="{{ $module->title }}" subtitle="{{ $module->subtitle }}" />

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <form action="{{ url('admin/module/add-role') }}" method="POST">
                                @csrf
                                <input type="text" name="id_module" class="form-control" value="{{ $module->id }}"
                                    hidden>
                                <div class="col-lg-12">
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-2 col-form-label text-star">
                                            Nama Pegawai
                                        </label>
                                        <div class="col-sm-10">
                                            <select name="id_pegawai" class="form-control">
                                                @foreach ($list_pegawai as $pegawai)
                                                    <option value="{{ $pegawai->id }}"> {{ $pegawai->nama }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-for-label text-end">
                                        <div class="btn-group">
                                            <button class="btn btn-primary"><span class="fa fa-save"></span>
                                                Simpan</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <br>
                        <hr>
                        <div class="table-responsive dash-social">

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">NIP</th>
                                        <th class="text-center">Nama</th>
                                    </tr>
                                </thead>
                                @php
                                    $no = 1;
                                @endphp
                                <tbody>
                                    @foreach ($module->role as $role)
                                        <tr>
                                            <td class="text-center">{{ $no++ }}</td>
                                            <td class="text-center">
                                                <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="{{ url('admin/module/role', $role->id) }}" class="btn btn-danger">
                                                    <span class="fa fa-trash"></span> Hapus
                                                </a>
                                            </td>
                                            <td class="text-center">{{ $role->pegawai->nup }}</td>
                                            <td class="text-left">{{ $role->pegawai->nama }}</td>
                                            
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-module.admin>
