<x-app>
    <div class="container-fluid">


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col-md-8">
                                <h4 class="card-title">Transaction History</h4>
                            </div>
                            <!--end col-->
                            <div class="col-md-4">
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-sm" placeholder="Search"
                                        aria-describedby="wallet_search">
                                    <button class="btn btn-outline-light btn-sm" type="button" id="wallet_search">
                                        <i class="las la-search text-secondary"></i>
                                    </button>
                                    <a href="" class="btn btn-primary"><span class="fa fa-plus"></span> Tambah
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
                                        <th class="text-center">Nama</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Alamat</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($list_pegawai as $pegawai)
                                        
                                    <tr>
                                        <td class="text-center">{{ $loop->iteration }}</td>
                                        <td class="text-center">
                                            <div class="btn-group">
                                                <a href="" class="btn btn-info"><span class="fa fa-info"></span> Lihat</a>
                                                <a href="" class="btn btn-warning"><span class="fa fa-info"></span> Edit</a>
                                                <a href="" class="btn btn-danger"><span class="fa fa-info"></span> Hapus</a>
                                            </div>
                                        </td>
                                        <td class="text-center">{{ $pegawai->nama }}</td>
                                        <td class="text-center">{{ $pegawai->email }}</td>
                                        <td class="text-justify">{{ $pegawai->alamat }}</td>
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
</x-app>
