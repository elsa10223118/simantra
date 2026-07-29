@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Edit Tahun</h2>

        <p class="text-muted">
            Ubah data tahun yang digunakan pada SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            <form>

                <div class="mb-3">

                    <label class="form-label">ID Tahun</label>

                    <input
                        type="text"
                        class="form-control"
                        value="TH001"
                        readonly>

                </div>


                <div class="mb-3">

                    <label class="form-label">Tahun</label>

                    <input
                        type="number"
                        class="form-control"
                        value="2026"
                        placeholder="Masukkan Tahun">

                </div>


                <div class="mt-4">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle"></i>
                        Simpan Perubahan
                    </button>

                    <a href="/tahun" class="btn btn-secondary">
                        <i class="bi bi-arrow-left"></i>
                        Kembali
                    </a>

                </div>

            </form>

        </div>

    </div>
</div>

@endsection