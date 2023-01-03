<x-module.admin>
    <div class="container-fluid">
        <x-template.button.back-button url="admin/module" />
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">
                        <div class="col-md-12">
                            <h2 class="card-title">Edit Module</h2>
                        </div>
                    </div>

                    <div class="card-body">
                        <form action="{{ url('admin/module', $module->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="row">
                                <div class="col-lg-6">

                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            App
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="app" value="{{ $module->app }}">
                                        </div>
                                    </div>

                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Title
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="title" value="{{ $module->title }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            URL
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="url" value="{{ $module->url }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Tag
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="tag" value="{{ $module->tag }}">
                                        </div>
                                    </div>
                                    
                                    

                                </div>
                                <div class="col-lg-6">

                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Name
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="name" value="{{ $module->name }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Subtitle
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="subtitle" value="{{ $module->subtitle }}">
                                        </div>
                                    </div>
                                    
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Color
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="color" value="{{ $module->color }}">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="example-input" class="col-sm-3 col-form-label text-end">
                                            Menu
                                        </label>
                                        <div class="col-sm-9">
                                            <input class="form-control" type="text" name="menu" value="{{ $module->menu }}">
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
