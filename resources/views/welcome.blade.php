@extends('layout/app')

@section('content')
    <div class="c-center">
        <h1 class="mt-5">Notatki</h1>
        <h3>Strona do zarządzania notatkami</h3>
        <a href="{{ route('notes') }}"><div class="btn btn-info"><i class="fas fa-clipboard"></i> Lista notatek</div></a>
        <a href="{{ route('notes.create') }}"><div class="btn btn-success"><i class="fas fa-plus"></i> Dodaj nową</div></a>
        <div>
            <b class="text-white">Obecna ilosc notatek: {{ $count; }}</b>
        </div>
    </div>
@endsection