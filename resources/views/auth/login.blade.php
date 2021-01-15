@extends('layouts.app')

@section('content')
<div class="flex flex-col h-screen bg-gray-50">
    <div class="grid place-items-right mx-2 my-10 sm:my-50">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white rounded-lg shadow-md lg:shadow-lg">
            <div >
                <div class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">{{ __('Login') }}</div>

                <div >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div >
                            <label for="email" class="block-center text-s font-semibold text-gray-600 uppercase">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="block w-full py-3 px-1 mt-2 mb-4 form-control @error('email') is-invalid @enderror border-b-2 border-gray-100" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="e-mail address" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="block mt-6 text-s font-semibold text-gray-600 uppercase">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="block w-full py-3 px-1 mt-2 mb-4 form-control @error('password') is-invalid @enderror border-b-2 border-gray-100" name="password" placeholder="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div >
                            <div >
                                <button type="submit" class="w-full py-3 mt-10 bg-black-800 rounded-sm font-medium text-black uppercase focus:outline-none hover:bg-gray-700 hover:shadow-none">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
