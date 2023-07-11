@extends('user.layouts.main')
@section('container')
    @if (session()->has('success'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            {{ session('success') }} <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            </button>
        </div>
    @endif
    <header class="page-header page-header-compact page-header-light border-bottom mb-4 bg-white">
        <div class="container-xl px-4">
            <div class="page-header-content">
                <div class="row align-items-center justify-content-between pt-3">
                    <div class="col-auto mb-3">
                        <h1 class="page-header-title">
                            <div class="page-header-icon">
                                <i data-feather="user"></i>
                            </div>
                            Account Settings - Profile
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main page content-->
    <div class="container-xl mt-4 px-4">
        <div class="row justify-content-center">
        </div>
        <hr class="mb-4 mt-0" />
        <div class="row">
            <div class="col-xl-4">
                <div class="card mb-4 mb-xl-2">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body text-center">
                        <form action="{{ Route('dashboard.user.storepic') }}" enctype="multipart/form-data" method="post">
                            @csrf
                            @method('post')
                            @if (auth()->user()->getFirstMediaUrl('profile_pic'))
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ auth()->user()->getFirstMediaUrl('profile_pic') }}" alt="" />
                            @endif

                            <!-- Profile picture help block-->
                            <div class="small font-italic text-muted mb-4">
                                JPG or PNG no larger than 1 MB
                            </div>
                            <input type="file" class="form-control-file" name="profile">
                            @error('profile')
                                <span class="text-danger d-block">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <!-- Profile picture upload button-->
                            <button class="btn btn-primary mt-4" type="submit">Simpan</button>
                        </form>
                    </div>
                </div>
                <div class="card mb-4 mb-xl-2">
                    <img class="card-img" src="/img/card.jpg" alt="...">
                    <div class="card-img-overlay">
                        <h5 class="card-title py-5 px-3">{{ auth()->user()->name }}</h5>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Account Details</div>
                    <div class="card-body">
                        <form action="{{ Route('dashboard.user.registrations.update', $registration->id) }}" method="POST">
                            @method('put')
                            @csrf
                            <div class="mb-3">
                                <label class="small mb-1" for="namaLengkap">Nama Lengkap</label>
                                <input class="form-control" id="namaLengkap" type="text" placeholder="Nama Lengkap"
                                    name="nama_lengkap" value="{{ old('nama_lengkap', $registration->nama_lengkap) }}" />
                                @error('nama_lengkap')
                                    <span class="text-danger d-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="gelarDepan">Gelar Depan</label>
                                    <input class="form-control" id="gelarDepan" type="text"
                                        placeholder="Input gelar depan" name="gelar_depan"
                                        value="{{ old('gelar_depan', $registration->gelar_depan) }}" />
                                    @error('gelar_depan')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="gelarBelakang">Gelar Belakang</label>
                                    <input class="form-control" id="gelarBelakang" type="text"
                                        placeholder="Input gelar belakang" name="gelar_belakang"
                                        value="{{ old('gelar_belakang', $registration->gelar_belakang) }}" />
                                    @error('gelar_belakang')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (organization name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tempatLahir">Tempat Lahir</label>
                                    <input class="form-control" id="tempatLahir" type="text"
                                        placeholder="Input tempat lahir" name="tempat_lahir"
                                        value="{{ old('tempat_lahir', $registration->tempat_lahir) }}" />
                                    @error('tempat_lahir')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Form Group (location)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="tanggalLahir">Tanggal Lahir</label>
                                    <input class="form-control" id="tanggalLahir" type="date"
                                        placeholder="Input tanggal lahir" name="tanggal_lahir"
                                        value="{{ old('tanggal_lahir', $registration->tanggal_lahir) }}" />
                                    @error('tanggal_lahir')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="alamatDomisili">Alamat Domisili</label>
                                <textarea class="form-control" id="alamatDomisili" placeholder="Input domisili" rows="5"
                                    name="alamat_domisili"> {{ old('alamat_domisili', $registration->alamat_domisili) }} </textarea>
                                @error('alamat_domisili')
                                    <span class="text-danger d-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Form Row        -->
                            <div class="row gx-3 mb-3">
                                <div class="col-md-6">
                                    <label class="small mb-1" for="kabupatenDomisili">Kabupaten</label>
                                    <input class="form-control" id="kabupatenDomisili" type="text"
                                        placeholder="Input tempat lahir" name="kabupaten_domisili"
                                        value="{{ old('kabupaten_domisili', $registration->kabupaten_domisili) }}" />
                                    @error('kabupaten_domisili')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="small mb-1" for="provinsiDomisili">Provinsi</label>
                                    <input class="form-control" id="provinsiDomisili" type="text"
                                        placeholder="Input tanggal lahir" name="provinsi_domisili"
                                        value="{{ old('provinsi_domisili', $registration->provinsi_domisili) }}" />
                                    @error('provinsi_domisili')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
                                <input class="form-control" id="pekerjaan" type="text" placeholder="Input pekerjaan"
                                    name="pekerjaan" value="{{ old('pekerjaan', $registration->pekerjaan) }}" />
                                @error('pekerjaan')
                                    <span class="text-danger d-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Form Row-->
                            <div class="mb-3">
                                <label class="small mb-1" for="waNumber">Nomor WhatsApp</label>
                                <input class="form-control" id="waNumber" type="tel"
                                    placeholder="Input Nomor WhatsApp" name="wa_number"
                                    value="{{ old('wa_number', $registration->wa_number) }}" />
                                @error('wa_number')
                                    <span class="text-danger d-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="isLama">Apakah saudara sebelumnya telah terdaftar
                                    sebagai anggota Ispikani?</label>
                                <select class="form-control" id="isLama" name="is_lama">
                                    @if (old('is_lama', $registration->is_lama) == 1)
                                        <option value="1" selected>Anggota Lama</option>
                                        <option value="0">Anggota Baru</option>
                                    @else
                                        <option value="1">Anggota Lama</option>
                                        <option value="0" selected>Anggota Baru</option>
                                    @endif
                                </select>
                                @error('is_lama')
                                    <span class="text-danger d-block">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">
                                Save changes
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
