@extends('layout/app')

@if(count($notes) > 0)
@section('content')
    <div class="container mt-5">
        <h3>Lista notatek</h3>
        <table class="table table-dark table-bordered table-hover table-striped ">
            <thead>
              <tr>
                <th scope="col">Lp.</th>
                <th scope="col">Autor</th>
                <th scope="col">Tytuł</th>
                <th scope="col">Data utworzenia</th>
                <th scope="col">Data edycji</th>
                <th scope="col">Operacje</th>
              </tr>
            </thead>
            <tbody>
                @php ($lp = 1)
                @foreach($notes as $note)
                    <tr>
                        <td>{{ $lp }}</td>
                        <td>{{ $note->Author }}</td>
                        <td>{{ $note->Title }}</td>
                        <td>{{ $note->created_at }}
                        <td>
                            @if($note->updated_at == $note->created_at)
                                Brak
                            @else
                                {{ $note->updated_at }}
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('notes.details', $note->id) }}"><div class="btn btn-success"><i class="far fa-eye"></i></div></a>
                            <a href="{{ route('notes.edit', $note->id) }}"><div class="btn btn-primary"><i class="far fa-edit"></i></div></a>
                            <a href="{{ route('notes.post.delete', $note->id) }}"><div class="btn btn-danger"><i class="far fa-times"></i></div></a>
                        </td>
                    </tr>
                    @php ($lp += 1)
                @endforeach
            </tbody>
          </table>
          <a href="{{ route('notes.create') }}"><div class="btn btn-success"><i class="fas fa-plus"></i> Dodaj notatke</div></a>
    </div>
</div>
@endsection

@else

@section('content')
    <div class="container mt-5">
      <h1>Brak notatek do wyswietlenia</h1>
      <a href="{{ route('notes.create') }}"><div class="btn btn-success"><i class="fas fa-plus"></i> Dodaj notatke</div></a>
    </div>
@endsection

@endif
