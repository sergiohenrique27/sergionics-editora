@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo Livro</h3>

            {!! Form::open(['route' => 'books.store', 'class' => 'form']) !!}

            @include('books._form')

            <div class="form-group">
                {!! Form::submit('Criar Livro', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection