@extends('layouts.app')

@section('content')
<div class="flex flex-col h-screen bg-gray-50">
    <div class="grid place-items-right mx-2 my-10 sm:my-50">
        <div class="w-11/12 p-12 sm:w-8/12 md:w-6/12 lg:w-5/12 2xl:w-4/12 
            px-6 py-10 sm:px-10 sm:py-6 
            bg-white rounded-lg shadow-md lg:shadow-lg">
            <div>
                <div class="text-center font-semibold text-3xl lg:text-4xl text-gray-800">{{ __('Register') }}</div>

                <div>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div>
                            <label for="name" class="block-center text-s font-semibold text-gray-600 uppercase">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="block w-full py-3 px-1 mt-2 mb-4 form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nume" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="block-center text-s font-semibold text-gray-600 uppercase">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="block w-full py-3 px-1 mt-2 mb-4 form-control @error('email') is-invalid @enderror" name="email" placeholder="e-mail" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="block-center text-s font-semibold text-gray-600 uppercase">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="block w-full py-3 px-1 mt-2 mb-4 form-control @error('password') is-invalid @enderror" name="password" placeholder="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="block-center text-s font-semibold text-gray-600 uppercase">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="block w-full py-3 px-1 mt-2 mb-4 form-control" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
                            </div>
                        </div>

                        <div>
                            <div>
                                <button type="submit" class="w-full py-3 mt-10 bg-black-800 rounded-sm font-medium text-black uppercase focus:outline-none hover:bg-gray-700 hover:shadow-none">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
