<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfilePic extends Component
{
    use WithFileUploads;

    public $image;
    public $user;

    protected array $rules = [
        'image' => ['required', 'image']
    ];

    public function mount()
    {
        $user = Auth::User();
        $this->user = $user;

        if ($this->user->hasMedia('profile_pic')) {
            $this->image = $this->user->getFirstMediaUrl('profile_pic');
        }
    }

    public function render()
    {
        return view('livewire.profile-pic');
    }

    public function storePic()
    {
        $this->validate();

        $this->user->clearMediaCollection('profile_pic');
        $this->user->addMedia($this->image->getRealPath())->toMediaCollection('profile_pic');

        return redirect()->route('dashboard.user.registrations.edit', Auth::User()->registration->id);
    }
}
