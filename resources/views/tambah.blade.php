@extends('main')

@section('content')

    <link rel="stylesheet" href="css/tambah.css">

    <a href="/"><button class="back mx-3">KEMBALI</button></a>
    
    <div class="col-lg-7 mx-auto my-5">
        <div class="card card-primary card-outline">
            <div class="card-header bg-info">
                <h1 class="text-center">Tambah Data</h1>
            </div>
        <form class="mt-3" action="/tambah" method="post">
            @csrf

            <input type="hidden" name="updated_at" value='{{ null }}'>
            <input type="hidden" name="created_at" value="{{ now() }}">
        
            <div>
                <label for="nama">NAMA: </label>
                <input type="text" name="nama" id="nama" class="@error('nama') is-invalid @enderror" value="{{ old('nama') }}" autofocus required>
                @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>

            <div>
                <label for="umur">UMUR: </label>
                <input type="number" name="umur" id="umur" class="@error('umur') is-invalid @enderror" value="{{ old('umur') }}" required>
                @error('umur')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>

            <div>
                <label for="alamat">ALAMAT: </label>
                <input type="text" name="alamat" id="alamat" class="@error('alamat') is-invalid @enderror" value="{{ old('alamat') }}" required>
                @error('alamat')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>

            <br>

            <div>
                <button type="submit" class="submit" id="down">SUBMIT</button>
            </div>
            
        </form>
        </div>
    </div>

@endsection