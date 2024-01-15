@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> @if(Session::has('message'))
            <div class="alert alert-success">
                {{Session::get('message')}}
            </div>
            @endif
            <form action="{{route('pengaduan.store')}}" method="post" enctype="multipart/form-data"> @csrf <div
                    class="card">
</div>
                    <div class="card-header">Ajukan Laporan Pengaduan</div>

                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Pelapor</label>
                            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                value="{{Auth::user()->name}}" readonly>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>

                            @enderror
                        </div>
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="text" name="nik" class="form-control @error('nik') is-invalid @enderror"
                                value="{{Auth::user()->nik}}" readonly>
                            @error('nik')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>
                        <input type="hidden" name="user_id" value="{{Auth::user()->id}}">

                        <div class="form-group">
                            <label>Tanggal Kejadian</label>
                            <input type="date" name="tgl_pengaduan"
                                class="form-control @error('tgl_pengaduan') is-invalid @enderror">
                            @error('tgl_pengaduan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>User ID</label>
                            <input type="number" name="user_id"
                                class="form-control @error('user_id') is-invalid @enderror" value="{{Auth::user()->id}}"
                                readonly>
                            @error('user_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label>Isi Laporan</label>
                            <input type="description" name="isi_laporan"
                                class="form-control @error('isi_laporan') is-invalid @enderror">
                            @error('isi_laporan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{$message}}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="form-group mb-2">
                            <label for="foto">Foto</label>
                            <input type="file" name="foto" class="form-control @error('foto') is-invalid @enderror">
                            @error('foto')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Laporkan</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection