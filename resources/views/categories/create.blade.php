@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Nova Categoria</h3>

            <!--
            @if($errors->any())
               <ul class="alert alert-danger list-inline">
                   @foreach($errors->all() as $error)
                       <li>{{$error}}</li>
                   @endforeach
               </ul>
            @endif
            -->

            {!! Form::open(['route' => 'categories.store', 'class' => 'form']) !!}

            {!! Html::openFormGroup('name', $errors) !!}
                {!! Form::label('name', 'Nome', ['class' => 'control-label']) !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
                {!! Form::error('name', $errors) !!}
                <!--   #$errors->first('name')  -->
            {!! Html::closeFormGroup() !!}

            <div class="form-group">
                {!! Form::submit('Criar categoria', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection