<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\Post;
use Auth;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Registration $registration)
    {
        if (auth()->user()->id != $registration->user_id) {
            return 404;
        }
        return view('user.registration.edit', compact('registration'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Registration $registration)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'alamat_domisili' => 'required',
            'kabupaten_domisili' => 'required',
            'provinsi_domisili' => 'required',
            'pekerjaan' => 'required',
            'wa_number' => 'required',
            'is_lama' => 'required',
        ]);

        $registration->update($request->all());

        return redirect()->route('dashboard.user.registrations.edit', $registration->id)->with('success', 'Data berhasil disimpan');
    }

    public function storepic(Request $request)
    {
        $request->validate([
            'profile' => 'required | image' 
        ]);
        Auth::user()->clearMediaCollection('profile_pic');
        Auth::user()->addMediaFromRequest('profile')->toMediaCollection('profile_pic');
        return redirect()->route('dashboard.user.registrations.edit', Auth::user()->registration->id)->with('success', 'Data berhasil disimpan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Registration $registration)
    {
        //
    }
}
