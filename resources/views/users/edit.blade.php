@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Modifier profil') }}</div>

                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data" action="{{ route('users.update', [$user->id]) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="surname" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input type="hidden" name="_method" value="put">
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" placeholder="{{$user->surname}}" name="surname" value="{{ old('surname') }}" required autocomplete="surname" autofocus>

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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="{{$user->name}}" value="{{$user->name}}" autocomplete="name" autofocus>

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
                                <input id="departement" type="text" class="form-control @error('departement') is-invalid @enderror" name="departement" placeholder="{{$user->departement}}" value="{{ old('departement') }}" required autocomplete="departement" autofocus>

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
                                <input id="function" type="text" class="form-control @error('function') is-invalid @enderror" name="function" placeholder="{{$user->function}}" value="{{ old('function') }}" required autocomplete="function" autofocus>

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
                                <input id="id_number" type="text" class="form-control @error('id_number') is-invalid @enderror" name="id_number" placeholder="{{$user->id_number}}" value="{{ old('id_number') }}" required autocomplete="id_number" autofocus>

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
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" placeholder="{{$user->phone}}" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

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
                                <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" placeholder="{{$user->gender}}" value="{{ old('gender') }}" required autocomplete="gender" autofocus>

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
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="{{$user->email}}" value="{{$user->email}}" autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="{{$user->password}}" value="{{$user->password}}" autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enregistrer') }}
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
