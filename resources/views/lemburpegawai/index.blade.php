@extends('layouts.app')

@section('content')

<div class="container">
    <div class="panel panel-info">
        <div class="panel-heading">Lembur Pegawai</div>
        <div class="panel-body">
        <a class="btn btn-success" href="{{url('lemburpegawai/create')}}">Tambah Data</a><br><br>
        <div class="form-group"><center>
    <form action="{{url('lemburpegawai')}}/?kode_lembur_id=kode_lembur_id">
        <input type="text" name="kode_lembur_id" placeholder="Cari"></form>
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr class="bg-primary">
                        <th>No</th>
                        <th>Id Kode Lembur</th>
                        <th>Nama Pegawai</th>
                        <th>Jumlah Jam</th>
                        <th colspan="3"><center>Opsi</th>
                    </tr>
                </thead>

                <?php $id=1; ?>
                @foreach ($lemburpegawai as $data)
                <tbody>
                    <tr> 
                        <td> {{$id++}}</td>
                        <td> {{$data->kategori_lembur->kode_lembur}} </td>
                        <td> {{$data->pegawai->User->name}}</td>
                        <td> {{$data->jumlah_jam}}</td>
                       
                        <td><a href="{{route('lemburpegawai.edit',$data->id)}}" class="btn btn-warning">Edit</a></td>
                        <td ><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Hapus</a>
                       @include('modals.delete', ['url' => route('lemburpegawai.destroy', $data->id),'model' => $data])
                                   
                    
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

@endsection