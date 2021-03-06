@extends('layouts.app')

@section('content')

<div class="box">

    <div class="box-header">
        <h3 class="box-title">Perfil #{{$profiles->id}}</h3>
    </div>

    <div class="box-body">

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::label('Nome') !!}
                        {!! Form::text('name', $profiles->name, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input text">
                {!! Form::Label('admin', 'O usuário com este perfil tem acesso de administrador neste sistema?') !!}
                {!! Form::select('administrator', [ 0 => 'Não', 1 => 'Sim' ], $profiles->administrator, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <div class="input text">
                        {!! Form::Label('master', 'O usuário com este perfil pode ver registros de outros usuários?') !!}
                        {!! Form::select('moderator', [ 0 => 'Não', 1 => 'Sim' ], $profiles->moderator, ['class' => 'form-control', 'disabled' => true]) !!}
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group text-left">
            <a href="{{ URL::previous() }}" class="btn btn-default">Voltar</a>
            <a href="javascript::void(0);" onclick="print();" class="btn btn-primary">Imprimir</a>
        </div>

    </div>

</div>

@endsection