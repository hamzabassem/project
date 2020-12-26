@extends('dashboard.layout.master')
@section('content')
    <div class="container" id="addu">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Upload book') }}</div>

                    <div class="card-body">

                            <form method="POST" action="{{route('storebook')}}">
                                @csrf
                                <div class="form-group row">
                                    <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Choose Image') }}</label>

                                    <div class="col-md-6">
                                        <input id="customFile" type="file" class="form-control" name="image" value="" required autocomplete="img" autofocus>

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text" class="form-control" name="name" value="" required autocomplete="name">

                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="dis" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        <input id="dis" type="text" class="form-control" name="description">

                                    </div>
                                </div>
<!--
                                <div class="form-group row">
                                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
-->
                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Upload') }}
                                        </button>
                                    </div>
                                </div>
                            </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        #addu{
            margin-top: 90px;
        }
    </style>
@endsection
