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

                <a href="{{ route('tahun.create') }}" class="btn btn-primary">
                    <i class="bi bi-plus-circle"></i>
                    Tambah Tahun
                </a>

            </div>

            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

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

                        @forelse($tahuns as $index => $tahun)

                        <tr>

                            <td>{{ $index + 1 }}</td>

                            <td>{{ $tahun->id_tahun }}</td>

                            <td>{{ $tahun->tahun }}</td>

                            <td>

                                <div class="d-flex gap-2">

                                    <a href="{{ route('tahun.edit',$tahun->id_tahun) }}"
                                        class="btn btn-warning btn-sm">
                                        Edit
                                    </a>

                                    <form action="{{ route('tahun.destroy',$tahun->id_tahun) }}"
                                        method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="4" class="text-center">
                                Belum ada data tahun.
                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>
</div>

@endsection