@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profil AGENT:') }}{{ Auth::user()->name }} {{ Auth::user()->surname }}</div>

                <div class="card-body">

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="{{$user->surname}}" name="surname" value="{{ old('surname') }}" autocomplete="surname" required>

                                @error('surname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{$user->name}}" value="{{$user->name}}" autocomplete="name" required>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Departement') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="departement" type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" placeholder="{{$user->departement}}" value="{{ old('departement') }}" autocomplete="departement" required>

                                @error('departement')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fonction') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="function" type="text" class="form-control @error('function') is-invalid @enderror" name="function" placeholder="{{$user->function}}" value="{{ old('function') }}" autocomplete="function" required>

                                @error('function')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('CNI / Passport') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" placeholder="{{$user->id_number}}" value="{{ old('id_number') }}" autocomplete="id_number" required>

                                @error('id_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="{{$user->phone}}" value="{{ old('phone') }}" autocomplete="phone" required>

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" placeholder="{{$user->gender}}" value="{{ old('gender') }}" autocomplete="gender" required> 

                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{$user->email}}" value="{{$user->email}}" autocomplete="email" required>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{$user->password}}" value="{{$user->password}}" autocomplete="new-password" required>

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('home')}}"> Retour section Agent</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
