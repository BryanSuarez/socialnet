@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @include('layouts.alerts.success')
            <div class="panel panel-default">
                <div class="panel-heading">Editar perfil</div>

                <div class="panel-body">
                    <form action="{{ route('profile.update') }}" method="post" ENCTYPE="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="avatar">Imagen de perfil:</label>
                            <input type="file" name="avatar" class="form-control" accept="image/*">
                        </div>

                        <div class="form-group">
                            <label for="location">Vivo en:</label>
                            <input type="text" name="location" class="form-control" value="{{ $info->location }}" required>
                        </div>

                        <div class="form-group">
                            <label for="about">Sobre mí:</label>
                            <textarea name="about"  cols="30" rows="10" class="form-control" required>{{ $info->about }}</textarea>
                        </div>

                        <div class="form-group">
                            <p class="text-center">
                                <button type="submit" class="btn btn-primary">Actualizar</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
