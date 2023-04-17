@extends('layout\app')

@section('content')
    <div class="container">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
            <div class="alert alert-danger">
                <p>{{ $error }}</p>
            </div>
            @endforeach
        @endif
        <form action="{{ route('notes.post.edit', $Note->id) }}" method="post" class="needs-validation" novalidate>
          @method("PUT")
            {{ csrf_field() }}
            <div class="card mb-3 bg-dark text-light mt-5">
                <div class="card-header">
                    <h2>Edytowanie notatki</h2>
                </div>
                <div class="row g-0">
                    <div class="col-md-4">
                        <div class="card-body border-right border-secondary bg-dark">
                            <ul class="list-group bg-dark ">
                                <li class="list-group-item bg-dark text-">
                                    <label for="Title">Tytul</label>
                                    <input type="text" class="form-control" id="Title" placeholder="Tytuł" name="Title" required maxlength="30" value="{{ $Note->Title }}">
                                    <div class="invalid-feedback">Podaj tytuł</div>
                                </li>
                                <li class="list-group-item bg-dark">
                                    <label for="Author">Autor</label>
                                    <input type="text" class="form-control" id="Author" placeholder="Autor" name="Author" required maxlength="30" value="{{ $Note->Author }}">
                                    <div class="invalid-feedback">Podaj autora</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body" style="text-align: left;">
                            <label for="Content">Treść</label>
                            <textarea class="form-control" id="Content" rows="3" placeholder="Treść" name="Content" required maxlength="1000">{{ $Note->Content }}</textarea>
                            <div class="invalid-feedback">Podaj treść</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-dark">
                    <a href="{{ route('notes') }}"><div class="btn btn-info"><i class="fas fa-clipboard"></i> Lista</div></a>
                    <a href="{{ route('notes.details', $Note->id) }}"><div class="btn btn-danger"><i class="far fa-eye"></i> Anuluj</div></a>
                    <button type="submit" class="btn btn-success"><i class="fas fa-save"></i> Zapisz</button>
                </div>
            </div>
        </form>
    </div>    
@endsection

@section('style')
<style>
    #Content{
        resize: none;
        height: 150px;   
    }
</style>
@endsection

@section('script')
<script>
    (function () {
        'use strict'

        var forms = document.querySelectorAll('.needs-validation')

        Array.prototype.slice.call(forms)
            .forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                event.preventDefault()
                event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
            })
        })()
</script>
@endsection