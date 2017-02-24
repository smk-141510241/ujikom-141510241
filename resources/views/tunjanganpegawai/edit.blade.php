@extends('layouts.app')
@section('content')
    <h1>Edit</h1>
    {!! Form::model($pegawai,['method' => 'PATCH','route'=>['tunjanganpegawai.update',$tunjanganpegawai->id]]) !!}
  
                    <div class="control-group">
                        <label class="control-label">Tunjangan</label>
                        <div class="controls">
                            <select class="form-control" name="kode_tunjangan_id">
                                @foreach ($tunjangan as $data)
                                <option value="{{ $data->id }}">{{ $data->kode_tunjangan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label">Id Pegawai</label>
                        <div class="controls">
                            <select class="span11" name="id_pegawai">
                                @foreach ($pegawai as $data)
                                <option value="{{ $data->id }}">{{ $data->User->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                <div class="form-group">
                    <label>Besaran Uang</label>
                    <input class="form-control" type="text" name="besaran_uang" placeholder="Masukkan Besaran Uang">
                </div>
   
    <div class="form-group">
        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
@stop