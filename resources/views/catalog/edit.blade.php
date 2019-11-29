@extends('layouts.master')

@section('content')

    <div class="row" style="margin-top:40px">
        <div class="offset-md-3 col-md-6">
            <div class="card">
                <div class="card-header text-center">
                    Modificar película
                </div>
                <div class="card-body" style="padding:30px">

                    <form action="{{ url('') }}" method="PUT">

                        {{method_field('PUT')}}

                        @csrf

                        <div class="form-group">
                            <label for="title">Título</label>
                            <input value="$pelicula->title" type="text" name="title" id="title" class="form-control" value="{{ $pelicula->title }}">
                        </div>

                        <div class="form-group">
                            <input value="$pelicula->year" type="number" min="1900" max="2030" name="year" placeholder="A&ntilde;o" value="{{ $pelicula->year }}">
                        </div>

                        <div class="form-group">
                            <input value="$pelicula->director" type="text" name="director" placeholder="Director" value="{{ $pelicula->director }}">
                        </div>

                        <div class="form-group">
                            <input value="$pelicula->poster" type="url" name="poster" placeholder="url del poster" value="{{ $pelicula->poster }}">
                        </div>

                        <div class="form-group">
                            <label for="synopsis">Resumen</label>
                            <textarea name="synopsis" id="synopsis" class="form-control" rows="3"> value="{{ $pelicula->synopsis }}"</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary" style="padding:8px 100px;margin-top:25px;">
                                Modificar película
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop
