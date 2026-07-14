@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Data Mitra</h2>

        <p class="text-muted">
            Daftar data mitra yang dapat dilihat oleh operator.
        </p>

        <div class="card p-4 mt-4">

            <h5 class="fw-bold mb-3">Daftar Mitra</h5>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-nowrap">

                    <thead class="table-light">

                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>ID Mitra / Sobat</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat Lengkap</th>
                            <th>No. HP</th>
                            <th>Email</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td colspan="9" class="text-center text-muted">
                                Belum ada data mitra.
                            </td>
                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

@endsection