@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-lg-4">
            <div class="panel panel-default">
                <div class="panel-heading text-center">
                    Perfil de: <strong>{{ $user->name }}</strong>
                </div>
                <div class="panel-body text-center">
                    <img src="{{ Storage::url($user->avatar) }}" width="150px" height="150px" style="border-radius: 50%;" alt="">
                    <hr>
                    <p class="text-center">
                        <strong>{{ Auth::user()->profile->location }}</strong>
                    </p>
                    <hr>
                    <p class="text-center">
                        @if(Auth::id() == $user->id)
                            <a href="{{ route('profile.edit') }}" class="btn btn-lg btn-info">Actualizar perfil</a>
                        @endif
                    </p>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-body">
                    <friend :profile_user_id="{{ $user->id }}"></friend>
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading text-center">
                   <strong>Sobre mí vamos por el cap18</strong>
                </div>
                <div class="panel-body text-center">
                    <p class="text-center">
                        {{ Auth::user()->profile->about }}
                    </p>
                </div>
            </div>

        </div>
    </div>
@stop
