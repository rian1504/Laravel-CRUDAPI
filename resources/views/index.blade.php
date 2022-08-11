@extends('main')

@section('content')

    <link rel="stylesheet" href="css/style.css">

    @if(session()->has('AddData'))
    <div class="alert alert-success text-center" role="alert">
        {{ session('AddData') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif

    @if(session()->has('EditData'))
    <div class="alert alert-warning text-center" role="alert">
        {{ session('EditData') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif

    @if(session()->has('DeleteData'))
    <div class="alert alert-danger text-center" role="alert">
        {{ session('DeleteData') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
    </div>
    @endif

    <div class="content">
        <button class="tambah"><a href="/tambah">Tambah Data</a></button>
        <table>
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">UMUR</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">WAKTU DIBUAT</th>
                    <th scope="col">WAKTU DIEDIT</th>
                    <th scope="col">EDIT</th>
                    <th scope="col">DELETE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach($members as $mem)
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $mem->nama }}</td>
                        <td>{{ $mem->umur }}</td>
                        <td>{{ $mem->alamat }}</td>
                        <td class="besar">{{ $mem->created_at }}</td>
                        <td class="besar">{{ $mem->updated_at }}</td>
                        <td>
                            <a href="/edit/{{ $mem->id }}" class="btn btn-warning">
                                <span data-feather="edit"></span>
                            </a>
                        </td>
                        <td>
                            <a href="/hapus/{{ $mem->id }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                <span data-feather="delete"></span>
                            </a>
                        </td>
                </tr>
            </tbody>
                    @endforeach
        </table>
    </div>

@endsection