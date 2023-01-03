<x-module.admin>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <x-template.button.back-button url="admin/pegawai" />
                <br>
                <div class="card">
                    <div class="card-body">
                        <div class="met-profile">
                            <div class="row">
                                @csrf
                                <div class="col-lg-6 align-self-center mb-3 mb-lg-0">
                                    <div class="met-profile-main">
                                        <div class="met-profile-main-pic">
                                            <img src="{{ url("public/$pegawai->foto") }}" style="width:100%"
                                                height="130" class="rounded-circle">
                                            <span class="met-profile_main-pic-change">
                                                <i class="fas fa-camera"></i>
                                            </span>
                                        </div>
                                        <div class="met-profile_user-detail">
                                            <h5 class="met-user-name">
                                                {{ $pegawai->nama }}
                                            </h5>
                                            <p class="mb-0 met-user-name-post">
                                                {{ $pegawai->nup }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!--end col-->

                                <div class="col-lg-4 ms-auto align-self-center">
                                    <ul class="list-unstyled personal-detail mb-0">
                                        <li class="">
                                            <i class="las la-calendar mr-2 text-secondary font-22 align-middle"></i> 
                                            <b> TTL </b> : {{ $pegawai->tempat_lahir }}, {{date("d-m-Y", strtotime($pegawai->tanggal_lahir ))}}</li>
                                        <li class="mt-2"><i
                                                class="las la-envelope text-secondary font-22 align-middle mr-2"></i>
                                            <b> Email </b> : {{ $pegawai->email }}</li>
                                        <li class="mt-2"><i
                                                class="las la-globe text-secondary font-22 align-middle mr-2"></i> <b>
                                                Alamat </b> : {{ $pegawai->alamat }}</a>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-module.admin>
