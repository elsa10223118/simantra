@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Tambah Tahun</h2>

        <p class="text-muted">
            Tambahkan data tahun yang akan digunakan pada SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('tahun.store') }}" method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">Tahun</label>

                    <input
                        type="number"
                        name="tahun"
                        class="form-control"
                        placeholder="Masukkan Tahun"
                        value="{{ old('tahun') }}"
                        required>

                </div>

                <div class="mt-4">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i>
                        Simpan
                    </button>

                    <a href="{{ route('tahun.index') }}" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection