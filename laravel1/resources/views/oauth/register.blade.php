@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register Individual') }}</div>

                <div class="card-body">
                    <form id="myForm">
                        @csrf
 
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                <span class="invalid-feedback" role="alert">
                                    <strong id="name-error"></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" autocomplete="lastname" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="lastname-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" autocomplete="address" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="address-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" autocomplete="username" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="username-error"></strong>
                                    </span>
                                
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phoneNumber" class="col-md-4 col-form-label text-md-end">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phoneNumber" type="number" class="form-control" name="phoneNumber" value="{{ old('phoneNumber') }}" autocomplete="phoneNumber" autofocus>

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="phoneNumber-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" autocomplete="new-password">

                                
                                    <span class="invalid-feedback" role="alert">
                                        <strong id="password-error"></strong>
                                    </span>
                                
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                            <div class="col-md-6">
                                <input id="password_confirm" type="password" class="form-control" name="password_confirm" autocomplete="new-password">
                                <span class="invalid-feedback" role="alert">
                                    <strong id="password_confirm-error"></strong>
                                </span>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="submitButton" type="button" class="btn btn-primary" >{{ __('Register') }}</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="/js/oauth/register.js"></script>
@endpush