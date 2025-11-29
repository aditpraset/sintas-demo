@extends('layouts.app')

@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
        <div class="row g-2 align-items-center">
            <div class="col">
                <h2 class="page-title">
                    Detail Produk: Shampo Anti-Rontok
                </h2>
            </div>
            <div class="col-auto ms-auto d-print-none">
                <div class="btn-list">
                    <a href="{{ route('manajemen_produk_penawaran.product') }}" class="btn btn-secondary d-none d-sm-inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 11l-4 4l4 4m-4 -4h11a4 4 0 0 0 0 -8h-1" /></svg>
                        Kembali ke Daftar Produk
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page-body">
    <div class="container-xl">
        <div class="row row-cards">
            <div class="col-md-4">
                <div class="card card-md">
                    <div class="card-body text-center">
                        <span class="avatar avatar-xl mb-3" style="background-image: url(https://placehold.co/128x128/E0E0E0/000000?text=Produk)"></span>
                        <h3 class="m-0 text-truncate">Beras Premium 5kg</h3>
                        <div class="text-secondary">Kategori: Beras</div>
                        <div class="mt-3">
                            <span class="badge bg-success me-1"></span> Tersedia
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Informasi Produk</h3>
                    </div>
                    <div class="card-body">
                        <div class="datagrid">
                            <div class="datagrid-item">
                                <div class="datagrid-title">ID Produk</div>
                                <div class="datagrid-content">PROD001</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Harga Satuan</div>
                                <div class="datagrid-content">Rp 100.000</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Stok Tersedia</div>
                                <div class="datagrid-content">250 Unit</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Deskripsi</div>
                                <div class="datagrid-content">Beras premium dengan kualitas terbaik.</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Supplier</div>
                                <div class="datagrid-content">PT. Bulog</div>
                            </div>
                            <div class="datagrid-item">
                                <div class="datagrid-title">Tanggal Terdaftar</div>
                                <div class="datagrid-content">01 Januari 2024</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Widget Kinerja Produk --}}
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-primary text-white avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 7v4l3 3" /><path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total Terjual (Tahun Ini)
                                </div>
                                <div class="text-secondary">
                                    1500 Unit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-success text-white avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Total Penjualan (Tahun Ini)
                                </div>
                                <div class="text-secondary">
                                    Rp 150.000.000
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="card card-sm">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-auto">
                                <span class="bg-warning text-white avatar">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 17.75l-6.172 3.245l1.179 -6.873l5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z" /></svg>
                                </span>
                            </div>
                            <div class="col">
                                <div class="font-weight-medium">
                                    Stok Peringatan
                                </div>
                                <div class="text-secondary">
                                    Di bawah 50 unit
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grafik Kinerja Produk --}}
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tren Penjualan Produk Bulanan</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-product-sales-trend" style="height: 200px;">
                            <canvas id="productSalesTrendChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Distribusi per GPK</h3>
                    </div>
                    <div class="card-body">
                        <div id="chart-product-sales-by-depo" style="height: 200px;">
                            <canvas id="productSalesByDepoChart"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Riwayat Penjualan Produk --}}
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Riwayat Penjualan Produk</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-vcenter card-table">
                                <thead>
                                    <tr>
                                        <th>Tanggal</th>
                                        <th>No. SO</th>
                                        <th>RPK</th>
                                        <th>Jumlah Unit</th>
                                        <th>Total Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>01 Juli 2025</td>
                                        <td>SO001</td>
                                        <td>RPK001</td>
                                        <td>10</td>
                                        <td>Rp 1.000.000</td>
                                    </tr>
                                    <tr>
                                        <td>25 Juni 2025</td>
                                        <td>SO005</td>
                                        <td>RPK002</td>
                                        <td>5</td>
                                        <td>Rp 500.000</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {
        // Chart: Tren Penjualan Produk Bulanan
        const productSalesTrendCtx = document.getElementById('productSalesTrendChart').getContext('2d');
        new Chart(productSalesTrendCtx, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul'],
                datasets: [{
                    label: 'Unit Terjual',
                    data: [100, 120, 110, 130, 125, 140, 150], // Contoh data
                    borderColor: '#007bff',
                    backgroundColor: 'rgba(0, 123, 255, 0.2)',
                    fill: true,
                    tension: 0.3
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        display: false,
                    },
                    title: {
                        display: false,
                        text: 'Tren Penjualan Produk Bulanan'
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Chart: Distribusi Penjualan per Depo
        const productSalesByDepoCtx = document.getElementById('productSalesByDepoChart').getContext('2d');
        new Chart(productSalesByDepoCtx, {
            type: 'pie',
            data: {
                labels: ['GPK Jakarta', 'GPK Bandung', 'GPK Surabaya'],
                datasets: [{
                    data: [45, 30, 25], // Contoh data persentase penjualan produk ini per depo
                    backgroundColor: ['#007bff', '#28a745', '#ffc107'],
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: false,
                        text: 'Distribusi Penjualan per GPK'
                    }
                }
            }
        });
    });
</script>
@endpush
@endsection
