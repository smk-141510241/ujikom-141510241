@extends('layouts.app')
@section('content')
    <h1>Edit</h1>
    {!! Form::model($kategori,['method' => 'PATCH','route'=>['kategori.update',$kategori->id]]) !!}
    <div class="form-group">
        {!! Form::label('kode lembur', 'kode lembur:') !!}
        {!! Form::text('kode_lembur',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('jabatan id', 'jabatan id:') !!}
        {!! Form::text('jabatan_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('golongan id', 'golongan id:') !!}
        {!! Form::text('golongan_id',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('besaran uang', 'besaran uang:') !!}
        {!! Form::text('besaran_uang',null,['class'=>'form-control']) !!}
    </div>
   
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop