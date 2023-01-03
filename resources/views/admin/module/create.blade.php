<x-module.admin>
    <div class="container-fluid">
        <x-template.button.back-button url="admin/module" />
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="col-md-12">
                            <h2 class="card-title">Tambah Data Pegawai</h2>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/module') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            App
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="app">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Title
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="title">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            URL
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="url">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Tag
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="tag">
                                        </div>
                                    </div>
                                    
                                    

                                </div>
                                <div class="col-lg-6">

                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Subtitle
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="subtitle">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Color
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="color">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Menu
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="menu">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-for-label text-end">
                                    <div class="btn-group">
                                        <button class="btn btn-secondary" type="reset"><span
                                                class="fa fa-times"></span>
                                            Batal</button>

                                        <button class="btn btn-primary"><span class="fa fa-save"></span>
                                            Simpan</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>

</x-module.admin>
