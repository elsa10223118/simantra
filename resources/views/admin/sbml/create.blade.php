@extends('layouts.app')

@section('content')

<div class="container-fluid py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h2 class="fw-bold text-primary">
                <i class="bi bi-plus-circle me-2"></i>
                Tambah SBML
            </h2>

            <p class="text-muted mb-0">
                Tambahkan batas maksimal Standar Biaya Masukan Lokal (SBML)
            </p>
        </div>

        <a href="/sbml" class="btn btn-secondary">
            <i class="bi bi-arrow-left me-1"></i>
            Kembali
        </a>

    </div>

    <!-- Form -->
    <div class="card shadow-sm border-0">

        <div class="card-body">

            <form>

                <!-- Tahun -->
                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Tahun
                    </label>

                    <select class="form-select">

                        <option selected disabled>
                            Pilih Tahun
                        </option>

                        <option>2026</option>
                        <option>2027</option>
                        <option>2028</option>

                    </select>

                </div>

                <!-- Batas Maksimal Honor -->
                <div class="mb-4">

                    <label class="form-label fw-semibold">
                        Batas Maksimal Honor
                    </label>

                    <input
                        type="number"
                        class="form-control"
                        placeholder="Contoh : 1500000">

                    <small class="text-muted">
                        Masukkan batas maksimal honor dalam rupiah tanpa titik.
                    </small>

                </div>

                <!-- Tombol -->
                <div class="d-flex gap-2">

                    <button type="submit" class="btn btn-primary">
                        <i class="bi bi-check-circle me-1"></i>
                        Simpan
                    </button>

                    <a href="/sbml" class="btn btn-outline-secondary">
                        Batal
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection