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
                            Account Settings - Security
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

            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Update Account</div>
                    <div class="card-body">
                        <section>
                            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                                @csrf
                            </form>

                            <form method="post" action="{{ route('dashboard.user.profile.update') }}"
                                class="mt-6 space-y-6">
                                @csrf
                                @method('patch')

                                <div class="mb-3">
                                    <label class="small mb-1" for="name">Username (how your name will appear to other
                                        users on the site)</label>
                                    <input class="form-control" id="name" type="text" placeholder="Username"
                                        name="name" value="{{ old('name', auth()->user()->name) }}" />
                                    @error('name')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1" for="inputEmailAddress">Email address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email"
                                        placeholder="Enter your email address" name="email"
                                        value="{{ old('email', auth()->user()->email) }}" />
                                    @error('email')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div>
                                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && !$user->hasVerifiedEmail())
                                        <div>
                                            <p class="text-sm mt-2 text-gray-800">
                                                {{ __('Your email address is unverified.') }}

                                                <button form="send-verification"
                                                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                    {{ __('Click here to re-send the verification email.') }}
                                                </button>
                                            </p>

                                            @if (session('status') === 'verification-link-sent')
                                                <p class="mt-2 font-medium text-sm text-green-600">
                                                    {{ __('A new verification link has been sent to your email address.') }}
                                                </p>
                                            @endif
                                        </div>
                                    @endif
                                </div>

                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save changes</button>

                                @if (session('status') === 'profile-updated')
                                    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
                                        class="text-sm text-gray-600">{{ __('Saved.') }}</p>
                                @endif
                            </form>
                        </section>

                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Update Password</div>
                    <div class="card-body">
                        <section>
                            <form method="post" action="{{ route('password.update') }}" class="mt-6">
                                @csrf
                                @method('put')

                                <div class="mb-3">
                                    <label class="small mb-1" for="current_password">Current Password</label>
                                    <input class="form-control" id="current_password" type="password"
                                        name="current_password" />
                                    @error('current_password')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1" for="password">New Password</label>
                                    <input class="form-control" id="password" type="password" name="password" />
                                    @error('password')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="small mb-1" for="password_confirmation">Confirm New Password</label>
                                    <input class="form-control" id="password_confirmation" type="password"
                                        name="password_confirmation" />
                                    @error('password_confirmation')
                                        <span class="text-danger d-block">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <!-- Save changes button-->
                                <button class="btn btn-primary" type="submit">Save changes</button>
                            </form>
                        </section>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
