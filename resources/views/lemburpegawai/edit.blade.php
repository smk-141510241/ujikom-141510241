@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update</div>

                <div class="panel-body">
                    {!! Form::model($lemburpegawai,['method' => 'PATCH','route'=>['lemburpegawai.update',$lemburpegawai->id]]) !!}
                <div class="form-group">
                    {!! Form::label('kode lembur id', 'Kode lembur id ') !!}
                    {!! Form::text('kode_lembur_id',null,['class'=>'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('pegawai id', 'pegawai id') !!}
                    {!! Form::text('pegawai_id',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('jumlah jam', 'jumlah jam') !!}
                    {!! Form::text('jumlah_jam',null,['class'=>'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::submit('SAVE', ['class' => 'btn btn-primary']) !!}
                </div>
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection