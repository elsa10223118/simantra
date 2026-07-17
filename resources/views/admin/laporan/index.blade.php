@extends('layouts.app')

@section('content')

<div class="container-fluid p-4">

    <h2 class="fw-bold text-primary">
        <i class="bi bi-file-earmark-text me-2"></i> Laporan
    </h2>

    <p class="text-muted">
        Lihat, filter, dan cetak laporan transaksi honor mitra.
    </p>

    <div class="card shadow-sm border-0 mt-4">

        <div class="card-body">

            <!-- Filter -->
            <div class="row g-3 mb-4">

                <!-- Tahun -->
                <div class="col-md-3">
                    <label class="form-label fw-semibold">
                        Tahun
                    </label>

                    <select class="form-select">
                        <option selected>Semua Tahun</option>
                        <option>2026</option>
                        <option>2025</option>
                        <option>2024</option>
                    </select>
                </div>

                <!-- Bidang -->
                <div class="col-md-3">
                    <label class="form-label fw-semibold">
                        Bidang
                    </label>

                    <select class="form-select">
                        <option selected>Semua Bidang</option>
                        <option>Tata Usaha</option>
                        <option>Sosial</option>
                        <option>Nerwilis</option>
                        <option>Distribusi</option>
                        <option>IPDS</option>
                        <option>Produksi</option>
                    </select>
                </div>

                <!-- Kegiatan -->
                <div class="col-md-6">
                    <label class="form-label fw-semibold">
                        Kegiatan
                    </label>

                    <select class="form-select">
                        <option selected>Semua Kegiatan</option>
                        <option>Pendataan Sosial Ekonomi</option>
                        <option>Survei Harga Konsumen</option>
                        <option>Sensus Pertanian</option>
                        <option>Pengolahan Data</option>
                    </select>
                </div>

                <!-- Bulan -->
                <div class="col-12">

                    <label class="form-label fw-semibold">
                        Pilih Bulan
                        <small class="text-muted">(Boleh memilih lebih dari satu)</small>
                    </label>

                    <div class="row">

                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="1" id="jan">
                                <label class="form-check-label" for="jan">Januari</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="2" id="feb">
                                <label class="form-check-label" for="feb">Februari</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="3" id="mar">
                                <label class="form-check-label" for="mar">Maret</label>
                            </div>

                        </div>
                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="4" id="apr">
                                <label class="form-check-label" for="apr">April</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="5" id="mei">
                                <label class="form-check-label" for="mei">Mei</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="6" id="jun">
                                <label class="form-check-label" for="jun">Juni</label>
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="7" id="jul">
                                <label class="form-check-label" for="jul">Juli</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="8" id="ags">
                                <label class="form-check-label" for="ags">Agustus</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="9" id="sep">
                                <label class="form-check-label" for="sep">September</label>
                            </div>

                        </div>

                        <div class="col-md-3">

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="10" id="okt">
                                <label class="form-check-label" for="okt">Oktober</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="11" id="nov">
                                <label class="form-check-label" for="nov">November</label>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bulan[]" value="12" id="des">
                                <label class="form-check-label" for="des">Desember</label>
                            </div>

                        </div>

                    </div>

                </div>

                <!-- Tombol -->
                <div class="col-12 mt-3 d-flex justify-content-end">

                    <button class="btn btn-success me-2">
                        <i class="bi bi-search"></i>
                        Tampilkan
                    </button>

                    <button class="btn btn-danger me-2">
                        <i class="bi bi-file-earmark-pdf"></i>
                        PDF
                    </button>

                    <button class="btn btn-success">
                        <i class="bi bi-file-earmark-excel"></i>
                        Excel
                    </button>

                </div>

            </div>

            <!-- Tabel -->
            <div class="table-responsive">

                <table class="table table-bordered table-hover align-middle text-nowrap">

                    <thead class="table-light">

                        <tr>
                            <th>No</th>
                            <th>Tahun</th>
                            <th>Nama Operator</th>
                            <th>Bidang</th>
                            <th>Nama Mitra</th>
                            <th>Kegiatan</th>
                            <th>Honor</th>
                            <th>Status</th>
                            <th>Tanggal</th>
                        </tr>

                    </thead>

                    <tbody></tbody>
                        <tr>
                            <td>1</td>
                            <td>2026</td>
                            <td>Elsa</td>
                            <td>Sosial</td>
                            <td>Budi Santoso</td>
                            <td>Pendataan Sosial Ekonomi</td>
                            <td>Rp150.000</td>
                            <td>
                                <span class="badge bg-success">
                                    Sudah Dibayar
                                </span>
                            </td>
                            <td>15 Juli 2026</td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>2026</td>
                            <td>Andi</td>
                            <td>IPDS</td>
                            <td>Siti Aminah</td>
                            <td>Survei Harga Konsumen</td>
                            <td>Rp200.000</td>
                            <td>
                                <span class="badge bg-warning text-dark">
                                    Belum Dibayar
                                </span>
                            </td>
                            <td>20 Juli 2026</td>
                        </tr>

                        <tr>
                            <td>3</td>
                            <td>2026</td>
                            <td>Dewi</td>
                            <td>Distribusi</td>
                            <td>Rina Marlina</td>
                            <td>Pendataan UMKM</td>
                            <td>Rp175.000</td>
                            <td>
                                <span class="badge bg-success">
                                    Sudah Dibayar
                                </span>
                            </td>
                            <td>25 Juli 2026</td>
                        </tr>

                        <tr>
                            <td>4</td>
                            <td>2026</td>
                            <td>Rahmat</td>
                            <td>Produksi</td>
                            <td>Slamet Riyadi</td>
                            <td>Sensus Pertanian</td>
                            <td>Rp180.000</td>
                            <td>
                                <span class="badge bg-warning text-dark">
                                    Belum Dibayar
                                </span>
                            </td>
                            <td>28 Juli 2026</td>
                        </tr>

                        <tr>
                            <td>5</td>
                            <td>2026</td>
                            <td>Nabila</td>
                            <td>Tata Usaha</td>
                            <td>Ahmad Fauzi</td>
                            <td>Pengolahan Data</td>
                            <td>Rp225.000</td>
                            <td>
                                <span class="badge bg-success">
                                    Sudah Dibayar
                                </span>
                            </td>
                            <td>30 Juli 2026</td>
                        </tr>
                        </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection