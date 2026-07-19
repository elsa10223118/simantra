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
                    <i class="bi bi-plus-circle me-1"></i>
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
                                <img
                                    src="https://via.placeholder.com/40"
                                    width="40"
                                    height="40"
                                    class="rounded-circle">
                            </td>

                            <td>admin</td>
                            <td>Admin</td>
                            <td>Tata Usaha</td>

                            <td>

                                <div class="d-flex gap-2">

                                    <a href="/pegawai/edit" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i>
                                        Edit
                                    </a>

                                    <button
                                        class="btn btn-info btn-sm text-white"
                                        data-bs-toggle="modal"
                                        data-bs-target="#resetPasswordModal">

                                        <i class="bi bi-key-fill"></i>
                                        Reset Password

                                    </button>

                                    <button
                                        class="btn btn-danger btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#hapusPegawaiModal">

                                        <i class="bi bi-trash"></i>
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
<!-- Modal Reset Password -->

<div class="modal fade"
     id="resetPasswordModal"
     tabindex="-1"
     aria-labelledby="resetPasswordModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="resetPasswordModalLabel">

                    <i class="bi bi-key-fill me-2"></i>
                    Reset Password

                </h5>

                <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <div class="alert alert-warning">

                    <i class="bi bi-exclamation-triangle-fill me-2"></i>

                    Password lama akan diganti dengan password baru.

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Pegawai
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Admin BPS"
                        readonly>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Username
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="admin"
                        readonly>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Role
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Admin"
                        readonly>

                </div>

                <hr>

                <div class="mb-3">

                    <label class="form-label">
                        Password Baru
                    </label>

                    <input
                        type="password"
                        class="form-control"
                        placeholder="Masukkan Password Baru">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Konfirmasi Password
                    </label>

                    <input
                        type="password"
                        class="form-control"
                        placeholder="Masukkan kembali Password Baru">

                </div>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">

                    Batal

                </button>

                <button
                    type="button"
                    class="btn btn-primary">

                    <i class="bi bi-check-circle me-1"></i>
                    Simpan

                </button>

            </div>

        </div>

    </div>

</div>
<!-- Modal Hapus Pegawai -->

<div class="modal fade"
     id="hapusPegawaiModal"
     tabindex="-1"
     aria-labelledby="hapusPegawaiModalLabel"
     aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header bg-danger text-white">

                <h5 class="modal-title" id="hapusPegawaiModalLabel">

                    <i class="bi bi-trash me-2"></i>
                    Hapus Akun Pegawai

                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <p class="mb-3">
                    Apakah Anda yakin ingin menghapus akun pegawai berikut?
                </p>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Nama Pegawai
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Admin BPS"
                        readonly>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Username
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="admin"
                        readonly>

                </div>

                <div class="mb-3">

                    <label class="form-label fw-semibold">
                        Role
                    </label>

                    <input
                        type="text"
                        class="form-control"
                        value="Admin"
                        readonly>

                </div>

                <div class="alert alert-danger mb-0">

                    <i class="bi bi-exclamation-triangle-fill me-2"></i>

                    Akun yang dihapus tidak dapat digunakan kembali.

                </div>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">

                    Batal

                </button>

                <button
                    type="button"
                    class="btn btn-danger">

                    <i class="bi bi-trash me-1"></i>
                    Hapus

                </button>

            </div>

        </div>

    </div>

</div>

@endsection