@extends('layouts.app')
@section('content')
    <h1>Edit</h1>
    {!! Form::model($pegawai,['method' => 'PATCH','route'=>['pegawai.update',$pegawai->id]]) !!}
    <div class="form-group">
        {!! Form::label('nip', 'nip:') !!}
        {!! Form::text('nip',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('jabatan id', 'jabatan id:') !!}
        {!! Form::text('jabatan_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('user id', 'user id:') !!}
        {!! Form::text('user_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('jabatan id', 'jabatan id:') !!}
        {!! Form::text('jabatan_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('golongan_id', 'golongan_id:') !!}
        {!! Form::text('golongan_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('photo', 'photo:') !!}
        {!! Form::text('photo',null,['class'=>'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop