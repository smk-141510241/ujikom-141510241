@extends('layouts.app')
@section('content')
    <h1>Edit</h1>
    {!! Form::model($tunjangan,['method' => 'PATCH','route'=>['tunjangan.update',$tunjangan->id]]) !!}
    <div class="form-group">
        {!! Form::label('kode tunjangan', 'kode tunjangan:') !!}
        {!! Form::text('kode_tunjangan',null,['class'=>'form-control']) !!}
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
        {!! Form::label('status', 'status:') !!}
        {!! Form::text('status',null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('jumlah anak', 'jumlah anak:') !!}
        {!! Form::text('jumlah anak',null,['class'=>'form-control']) !!}
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