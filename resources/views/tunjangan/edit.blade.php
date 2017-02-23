@extends('layouts.app')
@section('content')
    <h1>Edit</h1>
    {!! Form::model($tunjangan,['method' => 'PATCH','route'=>['tunjangan.update',$tunjangan->id]]) !!}
    <div class="form-group">
        {!! Form::label('kode tunjangan', 'kode tunjangan:') !!}
        {!! Form::text('kode_tunjangan',null,['class'=>'form-control']) !!}
    </div>
     <div class="control-group">
                        <label class="control-label">Id Jabatan</label>
                        <div class="controls">
                            <select class="form-control" name="id_jabatan">
                                @foreach ($jabatan as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_jabatan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
      <div class="control-group">
                        <label class="control-label">Id Golongan</label>
                        <div class="controls">
                            <select class="form-control" name="id_golongan">
                                @foreach ($golongan as $data)
                                <option value="{{ $data->id }}">{{ $data->nama_golongan }}</option>
                                @endforeach
                            </select>
                        </div>
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