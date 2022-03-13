@extends('layouts.app')
@section('content')
@if (session('success'))
<div class="alert-success mt-2">
    <p>{{ session('success')}}</p>
</div>
@endif
<div class="row justify-content-center">

        <div class="col-3 pt-5">
            <img src="{{$buku->coverImage()}}" class="w-100">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center">
                    <h3 class="pe-4">{{ $buku -> judul}}</h3>
                </div>
                <div class="d-flex flex-row-reverse">
                    <form action="{{ url('buku' , $buku->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger" type="submit">
                                <i class="bi bi-trash"></i> Hapus Buku
                            </button>
                    </form>
                    <a href="/buku/{{$buku->id}}/edit" class="btn btn-warning me-2"><i class="bi bi-pencil-square"></i> Edit Buku</a>
                </div>
            </div>
            <div>
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width:15%"></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>Penulis</strong></td>
                            <td>{{ $buku->penulis }}</td>
                        </tr>
                        <tr>
                            <td><strong>Penerbit</strong></td>
                            <td>{{ $buku->penerbit }}</td>
                        </tr>
                        <tr>
                            <td><strong>Tahun Terbit</strong></td>
                            <td>{{ $buku->tahunterbit }}</td>
                        </tr>
                        <tr>
                            <td><strong>Jumlah Halaman</strong></td>
                            <td>{{ $buku->jumlahhalaman }}</td>
                        </tr>
                        <tr>
                            <td><strong>Ukuran</strong></td>
                            <td>{{ $buku->ukuran }} cm</td>
                        </tr>
                        <tr>
                            <td><strong>Sinopsis</strong></td>
                            <td>{{ $buku->sinopsis ? $buku->sinopsis : 'N\A'  }}</td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection