@extends('layouts.app')

@section('content')
<div class="container">

    <div class="col-md-12 ">
        <h1>Lista de artículos</h1>
        @foreach($posts as $post)
        <div class="card card-default">
            <div class="card-heading"> {{ $post->name }} </div>

            <div class="card-body">
                @if($post->file)
                    <img src="{{ $post->file }}" class="img-fluid" >
                @endif
                {{ $post->excerpt }}
                <a href="#" class="pull-right">Leer mas</a>
            </div>
        </div>
        <br/>
        @endforeach
        {{ $posts->render() }}
    </div>

</div>
@endsection