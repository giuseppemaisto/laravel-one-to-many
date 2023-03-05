@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 d-flex justify-content-between my-2">
            <div>
                <h1>modifica: {{$type->name}}</h1>

            </div>
            <div>
                    <a href="{{route('admin.types.index')}}" class="btn btn-primary my-2">torna alle categorie</a>
                </div>
        </div>
        <div class="col-12">
            
            <form action="{{ route('admin.types.update', $type->slug)}} " method="POST">
                @csrf
                @method('PUT')
                <div class="form-group my-3">
                    <label class="control-label">
                        nome categoria
                    </label>
                    <input type="text" class="form-control" placeholder="inserisci nuova categoria" id="name" name="name" value="{{old('name') ?? $type->name}}">
                </div>

                <div class="form-group my-3">
                  <button type="submit" class="btn btn-success">SALVA</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
