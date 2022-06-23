@extends('layout/app')

@section('content')





    <div class="mt-5 details">
        


        <div class="card mb-3 bg-dark text-light">
            <div class="card-header">
                <h2>Informacje notatki</h2>
              </div>
            <div class="row g-0">
              <div class="col-md-4">
                <div class="card-body border-right border-secondary bg-dark">
                    <h5 class="card-title">{{ $Note->Title }}</h5>
                    <h6 class="card-subtitle mb-2">{{ $Note->Author }}</h6>
                    <ul class="list-group bg-dark ">
                        <li class="list-group-item bg-dark"><b>Data utworzenia: </b><br>{{ $Note->created_at }}</li>
                        <li class="list-group-item bg-dark"><b>Edytowane:</b>
                            @if($Note->updated_at != $Note->created_at)
                            Tak <br>{{ $Note->updated_at }}
                            @else
                                Nie
                            @endif
                        </li>
                        <li class="list-group-item bg-dark"><b>Dlugość: </b>{{ strlen($Note->Content) }}</li>
                        <li class="list-group-item bg-dark"><b>Ilość wyrazów: </b>{{ count(explode(' ', $Note->Content)) }}</li>
                    </ul>
                </div>
              </div>
              <div class="col-md-8">
                <div class="card-body" style="text-align: left;">
                    <h5 class="card-title">Treść</h5>
                    <p class="card-text">{{$Note->Content}}</p>
                  </div>
              </div>
            </div>
          </div>
          <a href="{{ route('notes') }}"><div class="btn btn-info"><i class="fas fa-clipboard"></i> Lista</div></a>
          <a href="{{ route('notes.edit', $Note->id) }}"><div class="btn btn-success"><i class="fas fa-edit"></i> Edytuj</div></a>
          <a href="{{ route('notes.post.delete', $Note->id) }}"><div class="btn btn-danger"><i class="fas fa-times"></i> Usuń</div></a>

@endsection

@section('style')
<style>
    

    .info{
        margin: 10px 0 10px 0;
    }
    .note{
        background: rgb(0, 0, 0, 0.3);
        padding: 10px;
        border-radius: 5px;
        margin-bottom: 10px;
        color: white;
    }
    .content{
        border: 1px solid black;
        border-radius: 2px;
        color: white;
        resize: none;
        height: auto;
        min-height: 100px;
        padding: 10px;
        margin: 5px 0 10px 0;
    }
</style>
@endsection