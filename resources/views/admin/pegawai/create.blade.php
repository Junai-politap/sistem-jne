<x-module.admin>
    <div class="container-fluid">
        <x-template.button.back-button url="admin/pegawai" />
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="col-md-12">
                            <h2 class="card-title">Tambah Data Pegawai</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ url('admin/pegawai') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">NUP
                                            Pegawai</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="nup"
                                                placeholder="Nomor Urut Pegawai">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Nama
                                            Pegawai</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="nama"
                                                placeholder="Nama Pegawai">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Tempat,
                                            Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="tempat_lahir"
                                                placeholder="Tempat Lahir">
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="date" name="tanggal_lahir">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Email
                                            Pegawai</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="email" name="email"
                                                placeholder="Email Pegawai">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-input"
                                            class="col-sm-3 col-form-label text-star">Username</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="username"
                                                placeholder="Username Pegawai">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-input"
                                            class="col-sm-3 col-form-label text-star">Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" name="password"
                                                placeholder="*****************">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input"
                                            class="col-sm-3 col-form-label text-star">Alamat</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="alamat"
                                                placeholder="Alamat Pegawai">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Foto
                                            Pegawai</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="file" name="foto"
                                                accept=".jpg, .png, .jpeg">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <div class="col-md-3"></div>
                                        <div class="col-sm-9">
                                            <button class="btn btn-secondary" type="reset"><span class="fa fa-times"></span> Batal</button>
                                        
                                            <button class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
