<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Registration;

class Profile extends Component
{
    public Registration $registration;
    protected array $rules = [
        'registration.nama_lengkap' => ['required', 'max:100'],
        'registration.gelar_depan' => ['required'],
        'registration.gelar_belakang' => ['required'],
        'registration.tempat_lahir' => ['required'],
        'registration.tanggal_lahir' => ['required'],
        'registration.alamat_domisili' => ['required'],
        'registration.kabupaten_domisili' => ['required'],
        'registration.provinsi_domisili' => ['required'],
        'registration.pekerjaan' => ['required'],
        'registration.wa_number' => ['required'],
        'registration.is_lama' => ['required'],
    ];
    
    public function render()
    {
        return view('livewire.profile');
    }

    public function mount(Registration $registration)
    {
        $this->registration = $registration;
    }

    public function storeRegistration()
    {

        $this->validate();

        $this->registration->save();

        return redirect()->route('dashboard.user.registrations.edit', $this->registration->id);
    }
}
