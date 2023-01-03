<x-module.admin>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title">Data Module</h4>
                            </div>
                            <!--end col-->
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search"
                                        aria-describedby="wallet_search">
                                    <button class="btn btn-outline-light btn-sm" type="button" id="wallet_search">
                                        <i class="las la-search text-secondary"></i>
                                    </button>
                                    <a href="{{ url('admin/module/create') }}" class="btn btn-primary"><span
                                            class="fa fa-plus"></span> Tambah
                                        Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive dash-social">

                            <table id="datatable" class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Aksi</th>
                                        <th class="text-center">Nama Module</th>
                                        <th class="text-center">Tag</th>
                                        <th class="text-center">Jumlah Pegawai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_module as $module)
                                        <tr>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <x-template.button.info-button url="admin/module"
                                                        id="{{ $module->id }}" />

                                                    <x-template.button.edit-button url="admin/module"
                                                        id="{{ $module->id }}" />

                                                    <x-template.button.delete-button url="admin/module"
                                                        id="{{ $module->id }}" />

                                                </div>
                                            </td>
                                            <td class="text-center">{{ $module->name }}</td>
                                            <td class="text-center">{{ $module->tag }}</td>
                                            <td class="text-justify">{{ $module->alamat }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>
</x-module.admin>
