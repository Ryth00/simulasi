@extends('layouts.backend.master')

@section('content')
@if (Session::has('message'))
<div class="alert alert-success">
    {{ Session::get('message') }}
</div>
@endif

<div class="card o-hidden border-0 shadow-lg my-5">
    <div class="card-body p-0">

        <div class="card">
            <div class="card-header">
                <b>Detail Pengaduan</b>
            </div>

            <div class="card-body">
                <div class="form-group">
                    Nama Pelapor:
                    <b>{{ $pengaduan->user->name }}</b><br>
                    NIK: <b>{{ $pengaduan->user->nik }}</b><br>
                    Status: <b>{{ $pengaduan->status }}</b><br>
                    Isi Pengaduan: <b>{{ $pengaduan->isi_laporan }}</b><br>
                    Foto: <br> <img src="{{ asset('foto') }}/{{ $pengaduan->foto }}" width="50%">
                </div>

                <div class="form-group">
                    Tanggapan:
                    @if (empty($pengaduan->tanggapan->tanggapan))
                    <b>Belum ada tanggapan</b>
                    @else
                    <b>{{ $pengaduan->tanggapan->tanggapan }}</b>
                    @endif
                </div>
                <div class="form-group">
                    @if (empty($pengaduan->tanggapan->tanggapan))
                    <div class="form-group">
                        <a href="{{ route('tanggapan.show', [$pengaduan->id]) }}"> <button class="btn btn-primary">Beri
                                Tanggapan</button></a>
                    </div>
                    @else
                    <div class="form-group">
                        <a href="{{ route('tanggapan.edit', [$pengaduan->tanggapan->id]) }}"><button
                                class="btn btn-primary">Update Tanggapan</i></button></a>
                    </div>
                    @endif
                    @if(Auth::user()->role!=0)
                    <div class="form-group">
                        <a href="{{ route('tanggapan.show', [$pengaduan->id]) }}"> <button class="btn btn-primary">Beri
                                Tanggapan</button></a>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection