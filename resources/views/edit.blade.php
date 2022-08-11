@extends('main')

@section('content')

    <link rel="stylesheet" href="/css/tambah.css">

    <a href="/"><button class="back mx-3">KEMBALI</button></a>

    <div class="col-lg-7 mx-auto my-5">
        <div class="card card-primary card-outline">
            <div class="card-header bg-info">
                <h1 class="text-center">Edit Data</h1>
            </div>

        @foreach($members as $mem)
        <form class="mt-3" action="/edit" method="post">
            @csrf

            <input type="hidden" name="id" value="{{ $mem->id }}"> <br/>
            <input type="hidden" name="updated_at" value="{{ now() }}">
            <input type="hidden" name="created_at" value="{{ $mem->created_at }}">
        
            <div>
                <label for="nama">NAMA: </label>
                <input type="text" name="nama" id="nama" class="@error('nama') is-invalid @enderror" value="{{ $mem->nama }}" autofocus required>
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>

            <div>
                <label for="umur">UMUR: </label>
                <input type="number" name="umur" id="umur" class="@error('umur') is-invalid @enderror" value="{{ $mem->umur }}" required>
                @error('umur')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>

            <div>
                <label for="alamat">ALAMAT: </label>
                <input type="text" name="alamat" id="alamat" class="@error('alamat') is-invalid @enderror" value="{{ $mem->alamat }}" required>
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>

            <div>
                <button type="submit" class="submit">SUBMIT</button>
            </div>
            
        </form>
        </div>
    </div>
        @endforeach

@endsection