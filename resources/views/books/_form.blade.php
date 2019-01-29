@if($errors->any())
    <ul class="alert alert-danger list-inline">
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
@endif


{!! Html::openFormGroup('name', $errors) !!}
    {!! Form::label('title', 'Título', ['class' => 'control-label']) !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
    {!! Form::error('title', $errors) !!}
{!! Html::closeFormGroup() !!}

{!! Html::openFormGroup('name', $errors) !!}
    {!! Form::label('subtitle', 'Sub-Título', ['class' => 'control-label']) !!}
    {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
    {!! Form::error('subtitle', $errors) !!}
{!! Html::closeFormGroup() !!}


{!! Html::openFormGroup('name', $errors) !!}
    {!! Form::label('price', 'Preço', ['class' => 'control-label']) !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
    {!! Form::error('price', $errors) !!}
{!! Html::closeFormGroup() !!}

