<x-module.admin>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <x-template.button.back-button url="admin/pegawai" />
                <div class="card">
                    <div class="card-header text-center">
                        <div class="col-md-12">
                            <h2 class="card-title">Edit Data Pegawai</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <form action="{{ url('admin/pegawai', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">NUP
                                            Pegawai</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="nup" value="{{ $pegawai->nup }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Nama
                                            Pegawai</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="nama"
                                                value="{{ $pegawai->nama }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Tempat,
                                            Tanggal Lahir</label>
                                        <div class="col-sm-4">
                                            <input class="form-control" type="text" name="tempat_lahir"
                                            value="{{ $pegawai->tempat_lahir }}">
                                        </div>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="date" name="tanggal_lahir" value="{{ $pegawai->tanggal_lahir }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Email
                                            Pegawai</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="email" name="email"
                                            value="{{ $pegawai->email }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-input"
                                            class="col-sm-3 col-form-label text-star">Username</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="username"
                                            value="{{ $pegawai->username }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-input"
                                            class="col-sm-3 col-form-label text-star">Password</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="password" name="password">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input"
                                            class="col-sm-3 col-form-label text-star">Alamat</label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="alamat"
                                            value="{{ $pegawai->alamat }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-star">Foto
                                            Pegawai</label>
                                            <div class="col-md-4">
                                                <img src="{{ url("public/$pegawai->foto") }}" class="img-fluid" style="object-fit: cover; position: static; width: 70%; height: 500px;">
                                            </div>
                                        <div class="col-sm-5">
                                            <input class="form-control" type="file" name="foto" value="{{ $pegawai->foto }}"
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
