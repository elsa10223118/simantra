@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Tahun</h2>

        <p class="text-muted">
            Kelola data tahun yang digunakan pada SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="fw-bold">Daftar Tahun</h5>

                <a href="/tahun/create" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Tahun
                </a>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-nowrap">

                    <thead class="table-light">

                        <tr>
                            <th>No</th>
                            <th>ID Tahun</th>
                            <th>Tahun</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>TH001</td>
                            <td>2026</td>

                            <td>
                                <div class="d-flex gap-2">

                                    <button class="btn btn-warning btn-sm">
                                        Edit
                                    </button>

                                    <button class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>

                                </div>
                            </td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

@endsection