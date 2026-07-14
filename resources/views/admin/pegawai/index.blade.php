@extends('layouts.app')

@section('content')

<div class="dashboard">
    <div class="container-fluid p-4">

        <h2>Kelola Akun Pegawai</h2>

        <p class="text-muted">
            Admin dapat membuat dan mengelola akun pegawai untuk mengakses sistem SIMANTRA.
        </p>

        <div class="card p-4 mt-4">

            <div class="d-flex justify-content-between align-items-center mb-3">

                <h5 class="fw-bold">Daftar Akun Pegawai</h5>

                <a href="/pegawai/create" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Akun Pegawai
                </a>

            </div>

            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-nowrap">

                    <thead class="table-light">

                        <tr>
                            <th>No</th>
                            <th>NIP</th>
                            <th>Nama Pegawai</th>
                            <th>No. HP</th>
                            <th>Foto</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>Role</th>
                            <th>Bidang</th>
                            <th>Aksi</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>
                            <td>1</td>
                            <td>1987654321</td>
                            <td>Admin BPS</td>
                            <td>081234567890</td>

                            <td>
                                <img src="https://via.placeholder.com/40"
                                     width="40"
                                     height="40"
                                     class="rounded-circle">
                            </td>

                            <td>admin</td>
                            <td>admin123</td>
                            <td>Admin</td>
                            <td>Tata Usaha</td>

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