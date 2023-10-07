{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
                autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required
                autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}
@extends('frontend.layouts.default')

@section('content')

    <section class="registration-page">
        <!-- Login and Sign up page -->
        <div class=" registration-details ">
            <div class=" row mx-lg-5 p-2 p-lg-5">
                <div class="col-12 col-lg-6 px-3 px-lg-2 pb-5 p-lg-5 d-none d-lg-block">
                    <img class="w-100 h-100"
                        src="https://images.unsplash.com/photo-1667453466805-75bbf36e8707?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTV8fGF1dGhlbnRpY2F0aW9ufGVufDB8fDB8fHww&auto=format&fit=crop&w=800&q=60"
                        alt="">
                </div>
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <div class="col-12 col-lg-6 px-5">
                    <h2>CREATE AN ACCOUNT</h2>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <input type="hidden" name="role" value="user">
                        <div class="fw-bold mt-5">
                            <div class="mb-3">
                                <label for="first-name" class="d-block text-uppercase mb-2">First Name <span
                                    class="text-danger font-bold">*</span></label>
                                <input class="w-100 w-lg-75 px-2 py-3 rounded" type="text" name="first_name"
                                    id="" placeholder="First Name" required>
                                    @error('first_name')
                                    <p class="text-danger">{{ $message }}</p>
                                   @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last-name" class="d-block text-uppercase mb-2">Last Name <span
                                    class="text-danger font-bold">*</span></label>
                                <input class="w-100 w-lg-75 px-2 py-3 rounded" type="text" name="last_name"
                                    id="" placeholder="Last Name" required>
                                    @error('last_name')
                                    <p class="text-danger">{{ $message }}</p>
                                   @enderror
                            </div>
                            <div class="mb-3">
                                <label for="last-name" class="d-block text-uppercase mb-2">Mobile Number <span
                                    class="text-danger font-bold">*</span></label>
                                <input class="w-100 w-lg-75 px-2 py-3 rounded" type="text" name="mobile_number"
                                    id="" placeholder="Mobile Number" required>
                                    @error('mobile_number')
                                    <p class="text-danger">{{ $message }}</p>
                                   @enderror
                            </div>
                            <div class="mb-3">
                                <label for="first-name" class="d-block text-uppercase mb-2">Division <span
                                    class="text-danger font-bold">*</span></label>
                                <select name="division_id" id="division"
                                    class="form-select w-100 w-lg-75 px-2 py-3 rounded border border-black border-2"
                                    aria-label="Default select example">
                                    <option selected>Select Division</option>
                                    @foreach ($divisons as $division)
                                        <option value="{{ $division->id }}">{{ $division->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('division_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="first-name" class="d-block text-uppercase mb-2">District <span
                                    class="text-danger font-bold">*</span></label>
                                <select name="district_id" id="district"
                                    class="form-select w-100 w-lg-75 px-2 py-3 rounded border border-black border-2"
                                    aria-label="Default select example">
                                    <option value="">Select District</option>
                                    @if ($districts)
                                        @foreach ($districts as $district)
                                            <option value="{{ $district->id }}">
                                                {{ $district->name }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                @error('district_id')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="email" class="d-block text-uppercase mb-2">Password <span
                                    class="text-danger font-bold">*</span></label>
                                <input class="w-100 w-lg-75 px-2 py-3 rounded" type="password" name="password"
                                    id="" placeholder="Password" required>
                                    @error('password')
                                    <p class="text-danger">{{ $message }}</p>
                                   @enderror
                            </div>
                            <div class="mb-3">
                                <label for="email" class="d-block text-uppercase mb-2">Confirm Password <span
                                    class="text-danger font-bold">*</span></label>
                                <input class="w-100 w-lg-75 px-2 py-3 rounded" type="password" name="confirm_password" id=""
                                    placeholder="Confirm Password" required>
                                    @error('confirm_password')
                                    <p class="text-danger">{{ $message }}</p>
                                   @enderror
                            </div>
                            <div class="w-100 w-lg-75 border text-center px-2 py-3 bg-black">
                                <a href="index.html" class="text-decoration-none ">
                                    <button class="btn btn-outline text-white text-uppercase">
                                        Sign in
                                    </button>
                                </a>
                            </div>
                    </form>
                </div>

            </div>
        </div>
        </div>
    </section>
@endsection

{{-- @section('content-js')
    <script>
        $(document).ready(() => {
            $('#image').change(function() {
                const file = this.files[0];
                console.log(file);
                if (file) {
                    let reader = new FileReader();
                    reader.onload = function(event) {
                        console.log(event.target.result);
                        $('#imgPreview').attr('src', event.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endsection --}}
