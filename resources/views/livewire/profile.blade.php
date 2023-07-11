<div>
    <form wire:submit.prevent="storeRegistration">
        <div class="mb-3">
            <label class="small mb-1" for="namaLengkap">Nama Lengkap</label>
            <input class="form-control" id="namaLengkap" type="text" placeholder="Nama Lengkap"
                wire:model="registration.nama_lengkap" />
            @error('registration.nama_lengkap')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- Form Row-->
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="gelarDepan">Gelar Depan</label>
                <input class="form-control" id="gelarDepan" type="text" placeholder="Input gelar depan"
                    wire:model="registration.gelar_depan" />
                @error('registration.gelar_depan')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="small mb-1" for="gelarBelakang">Gelar Belakang</label>
                <input class="form-control" id="gelarBelakang" type="text" placeholder="Input gelar belakang"
                    wire:model="registration.gelar_belakang" />
                @error('registration.gelar_belakang')
                    <span class="invalid-feedback" role="alert">
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
                <input class="form-control" id="tempatLahir" type="text" placeholder="Input tempat lahir"
                    wire:model="registration.tempat_lahir" />
                @error('registration.tempat_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <!-- Form Group (location)-->
            <div class="col-md-6">
                <label class="small mb-1" for="tanggalLahir">Tanggal Lahir</label>
                <input class="form-control" id="tanggalLahir" type="date" placeholder="Input tanggal lahir"
                    wire:model="registration.tanggal_lahir" />
                @error('registration.tanggal_lahir')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="alamatDomisili">Alamat Domisili</label>
            <textarea class="form-control" id="alamatDomisili" placeholder="Input domisili"
                wire:model="registration.alamat_domisili" rows="5"> </textarea>
            @error('registration.alamat_domisili')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- Form Row        -->
        <div class="row gx-3 mb-3">
            <div class="col-md-6">
                <label class="small mb-1" for="kabupatenDomisili">Kabupaten</label>
                <input class="form-control" id="kabupatenDomisili" type="text" placeholder="Input tempat lahir"
                    wire:model="registration.kabupaten_domisili" />
                @error('registration.kabupaten_domisili')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="col-md-6">
                <label class="small mb-1" for="provinsiDomisili">Provinsi</label>
                <input class="form-control" id="provinsiDomisili" type="text" placeholder="Input tanggal lahir"
                    wire:model="registration.provinsi_domisili" />
                @error('registration.provinsi_domisili')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="pekerjaan">Pekerjaan</label>
            <input class="form-control" id="pekerjaan" type="text" placeholder="Input pekerjaan"
                wire:model="registration.pekerjaan" />
            @error('registration.pekerjaan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <!-- Form Row-->
        <div class="mb-3">
            <label class="small mb-1" for="waNumber">Nomor WhatsApp</label>
            <input class="form-control" id="waNumber" type="tel" placeholder="Input Nomor WhatsApp"
                wire:model="registration.wa_number" />
            @error('registration.wa_number')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="mb-3">
            <label class="small mb-1" for="isLama">Apakah saudara sebelumnya telah terdaftar
                sebagai anggota Ispikani?</label>
            <select class="form-control" id="isLama" wire:model="registration.is_lama">
                <option value="{{ $registration->is_lama }}" selected></option>
                <option value="1">Anggota Lama</option>
                <option value="0">Anggota Baru</option>
            </select>
            @error('registration.is_lama')
                <span class="invalid-feedback" role="alert">
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
