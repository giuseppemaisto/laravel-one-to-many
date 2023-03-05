@extends('layouts.admin')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex justify-content-between my-2">
                <div>
                    <h2>dettaglio: {{ $type->name }}</h2>
                </div>
                <div>
                    <a href="{{route('admin.types.index')}}" class="btn btn-primary">torna alle categorie</a>
                </div>
               
            </div>

            <div class="col-12">
               <p><strong>slug</strong>: {{$type->slug}}</p>
            </div>
            <div class="col-12">
                <h2>progetti appartenenti a questa categoria </h2>
                {{count($type->posts)}}
            </div>
        </div>
    </div>
@endsection