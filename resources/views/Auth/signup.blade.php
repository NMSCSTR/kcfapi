@extends('layouts.front')

@section('content')
<section class="bg-gray-50 dark:bg-gray-900">
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <div class="w-full bg-white rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800">
            <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
                    Create an account
                </h1>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class="space-y-4 md:space-y-6" action="{{ route('register.store') }}" method="POST">
                    @csrf
                    <div>
                        <label for="firstname">First Name</label>
                        <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required>
                    </div>
                    <div>
                        <label for="lastname">Last Name</label>
                        <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required>
                    </div>
                    <div>
                        <label for="kcfapicode">KCFAPI Code</label>
                        <input type="text" name="kcfapicode" id="kcfapicode" value="{{ old('kcfapicode') }}" required>
                    </div>
                    <div>
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" value="{{ old('email') }}" required>
                    </div>
                    <div>
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" id="phone_number" value="{{ old('phone_number') }}" required>
                    </div>
                    <div>
                        <label for="role">Role</label>
                        <select id="role" name="role" required>
                            <option value="admin">Admin</option>
                            <option value="unit-manager">Unit Manager</option>
                            <option value="fraternal-counselor">Fraternal Counselor</option>
                            <option value="family-member">Family Member</option>
                        </select>
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div>
                        <label for="password_confirmation">Confirm Password</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" required>
                    </div>
                    <button type="submit">Create Account</button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
