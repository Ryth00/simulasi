@extends('layouts.backend.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (Session::has('message'))
            <div class="alert alert-success">
                {{ Session::get('message') }}
            </div>
            @endif

            <div class="card shadow mb-4 my-5">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">List Pengaduan
                        <span class="float-right">
                            <a href="{{ route('pengaduan.create') }}" title="Tambah Pengaduan">
                                <i class="fa fa-plus"></i>Tambah
                            </a>
                        </span>
                    </h6>
                </div>
            </div>


            <div class="card-body">
                <table class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>User ID</th>
                                <th>Isi Laporan</th>
                                <th>Foto</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>


                        <tbody>
                            @if (count($pengaduans) > 0)
                            @foreach ($pengaduans as $key => $pengaduan)
                            <tr>
                                <th scope="row">{{ $key + 1 }}</th>
                                <td>{{ $pengaduan->tgl_pengaduan }}</td>
                                <td>{{ $pengaduan->user->name }}</td>

                                <td>{{ Str::limit($pengaduan->isi_laporan, 50) }}</td>
                                <td><a href="{{ asset('foto') }}/{{ $pengaduan->foto }}" target="_blank">
                                        <img src="{{ asset('foto') }}/{{ $pengaduan->foto }}" width="100"></a>
                                </td>

                                <td>
                                    @if ($pengaduan->status == '0')
                                    <span class="px-3 bg-gradient-danger text-white">
                                        {{ $pengaduan->status }}
                                    </span>
                                    @elseif($pengaduan->status == 'Proses')
                                    <span class="px-3 bg-gradient-warning text-white">{{ $pengaduan->status }}</span>
                                    @else
                                    <span class="px-3 bg-gradient-success text-white">{{ $pengaduan->status }}</span>
                                    @endif
                                </td>
                                <td>
                                    @if (Auth::user()->role ===0 )
                                    <a href="{{ route('pengaduan.show', [$pengaduan->id]) }}"><button class="btn
                            btn-primary"><i class="fas fa-fw fa-eye"></i></button></a>
                                    @else
                                    <a href="{{ route('pengaduan.edit', [$pengaduan->id]) }}"><button class="btn
                            btn-success"><i class="fa fa-edit"></i></button></a>


                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger" data-toggle="modal"
                                        data-target="#exampleModal{{ $pengaduan->id }}"><i
                                            class="fa fa-trash"></i>
                                    </button>

                                    <a href="{{ route('pengaduan.show', [$pengaduan->id]) }}"><button class="btn
                                                                btn-primary"><i
                                                class="fa fa-eye"></i></button></a>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal{{ $pengaduan->id }}" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form action="{{ route('pengaduan.destroy', [$pengaduan->id]) }}"
                                                method="post">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">DELETE
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h1>Apakah Anda Yakin ?</h1>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                            class="btn btn-outline-danger">Delete</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    </button></a>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            @else
                            <td>Tidak ada Pengaduan yang dapat ditampilkan.</td>
                            @endif
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>
</div>
@endsection