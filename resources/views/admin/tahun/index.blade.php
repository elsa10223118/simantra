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

                                    <a href="/tahun/edit" class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <button class="btn btn-danger btn-sm"
                                            data-bs-toggle="modal"
                                            data-bs-target="#hapusTahunModal">
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

<!-- Modal Hapus Tahun -->
<div class="modal fade" id="hapusTahunModal" tabindex="-1" aria-labelledby="hapusTahunModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header bg-danger text-white">

                <h5 class="modal-title" id="hapusTahunModalLabel">
                    Hapus Data Tahun
                </h5>

                <button type="button"
                        class="btn-close btn-close-white"
                        data-bs-dismiss="modal">
                </button>

            </div>

            <div class="modal-body">

                <p>
                    Apakah Anda yakin ingin menghapus data tahun berikut?
                </p>

                <table class="table table-borderless mb-3">

                    <tr>
                        <th width="35%">ID Tahun</th>
                        <td>: TH001</td>
                    </tr>

                    <tr>
                        <th>Tahun</th>
                        <td>: 2026</td>
                    </tr>

                </table>

                <div class="alert alert-danger mb-0">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Data tahun yang dihapus tidak dapat dikembalikan.
                </div>

            </div>

            <div class="modal-footer">

                <button type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal">
                    Batal
                </button>

                <button class="btn btn-danger btn-sm"
                        data-bs-toggle="modal"
                        data-bs-target="#hapusTahunModal">
                  Hapus
                </button>
                  

            </div>

        </div>

    </div>

</div>
 <!-- Modal Hapus Tahun -->
<div class="modal fade" id="hapusTahunModal" tabindex="-1" aria-labelledby="hapusTahunModalLabel" aria-hidden="true">

    <div class="modal-dialog">

        <div class="modal-content">

            <div class="modal-header bg-danger text-white">

                <h5 class="modal-title" id="hapusTahunModalLabel">
                    Hapus Data Tahun
                </h5>

                <button
                    type="button"
                    class="btn-close btn-close-white"
                    data-bs-dismiss="modal"
                    aria-label="Close">
                </button>

            </div>

            <div class="modal-body">

                <p>
                    Apakah Anda yakin ingin menghapus data tahun berikut?
                </p>

                <table class="table table-borderless mb-3">

                    <tr>
                        <th width="35%">ID Tahun</th>
                        <td>: TH001</td>
                    </tr>

                    <tr>
                        <th>Tahun</th>
                        <td>: 2026</td>
                    </tr>

                </table>

                <div class="alert alert-danger mb-0">
                    <i class="bi bi-exclamation-triangle-fill"></i>
                    Data tahun yang dihapus tidak dapat dikembalikan.
                </div>

            </div>

            <div class="modal-footer">

                <button
                    type="button"
                    class="btn btn-secondary"
                    data-bs-dismiss="modal">
                    Batal
                </button>

                <form action="/tahun/1" method="POST">

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger">
                        Hapus
                    </button>

                </form>

            </div>

        </div>

    </div>

</div>
@endsection

