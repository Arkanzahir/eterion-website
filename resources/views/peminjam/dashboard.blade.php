@extends('layouts.dashboard')

@section('title', 'Dashboard Pegawai')
@section('page-title', 'Dashboard Pegawai')

@php
    $role = 'Pegawai';
    $nama = $data['nama'];
    $routePrefix = 'peminjam';
    $showAjukan = true;
    $showRiwayat = true;
@endphp

@section('main-content')
    <style>
        .glass-card {
            background: rgba(255, 255, 255, 0.1) !important;
            backdrop-filter: blur(10px) !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.15) !important;
            border-radius: 16px !important;
            transition: all 0.3s ease;
        }
        .glass-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px 0 rgba(31, 38, 135, 0.25) !important;
        }
        .glass-card .card-body {
            padding: 1.5rem;
        }
        .glass-card .card-title {
            font-size: 0.875rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            opacity: 0.9;
        }
        .glass-card h2 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 0;
        }
        .table-card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 16px;
            box-shadow: 0 4px 24px 0 rgba(34, 41, 47, 0.1);
            overflow: hidden;
        }
    </style>
    <div class="row g-3 mb-4">
        <div class="col-md-4">
            <div class="card text-white glass-card" style="background: linear-gradient(135deg, #0396FF, #0D47A1) !important;">
                <div class="card-body">
                    <h5 class="card-title">Kas Pribadi</h5>
                    <h2>Rp {{ number_format($data['kas_pribadi'], 0, ',', '.') }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white glass-card" style="background: linear-gradient(135deg, #42ba96, #2f9c7f) !important;">
                <div class="card-body">
                    <h5 class="card-title">Jumlah Pinjaman</h5>
                    <h2>Rp {{ number_format($data['jumlah_pinjaman'], 0, ',', '.') }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-white glass-card" style="background: linear-gradient(135deg, #FFB547, #FF8A00) !important;">
                <div class="card-body">
                    <h5 class="card-title">Sisa Pinjaman</h5>
                    <h2>Rp {{ number_format($data['sisa_pinjaman'], 0, ',', '.') }}</h2>
                </div>
            </div>
        </div>
    </div>

    <div class="card table-card">
        <div class="card-header bg-transparent border-bottom-0 pt-4 px-4">
            <h5 class="fw-semibold mb-0">Simulasi Pinjaman & Angsuran</h5>
        </div>
        <div class="card-body">
            <div class="table-responsive px-4">
              <table class="table">
                <thead>
                  <tr>
                    <th class="text-dark fw-semibold">Bulan Ke</th>
                    <th class="text-dark fw-semibold">Angsuran</th>
                    <th class="text-dark fw-semibold">Sisa Pinjaman</th>
                  </tr>
                </thead>
                <tbody>
                  @for ($i = 1; $i <= 5; $i++)
                  <tr style="background: rgba(255,255,255,0.8); backdrop-filter: blur(8px);">
                    <td class="py-3">{{ $i }}</td>
                    <td class="py-3 fw-semibold text-primary">Rp 2.000.000</td>
                    <td class="py-3 fw-semibold text-success">Rp {{ number_format(20000000 - ($i * 2000000), 0, ',', '.') }}</td>
                  </tr>
                  @endfor
                </tbody>
              </table>
            </div>
            <style>
              .table {
                  border-collapse: separate;
                  border-spacing: 0 10px;
              }
              .table thead th {
                  border: none;
                  background: transparent;
                  padding: 1rem;
                  font-size: 0.9rem;
              }
              .table tbody tr {
                  box-shadow: 0 2px 6px rgba(0,0,0,0.02);
                  border-radius: 10px;
                  transition: transform 0.2s ease, box-shadow 0.2s ease;
              }
              .table tbody tr:hover {
                  transform: translateY(-2px);
                  box-shadow: 0 4px 12px rgba(0,0,0,0.05);
              }
              .table tbody td {
                  border: none;
                  background: transparent;
                  vertical-align: middle;
              }
              .table tbody td:first-child {
                  border-top-left-radius: 10px;
                  border-bottom-left-radius: 10px;
                  padding-left: 1.5rem;
              }
              .table tbody td:last-child {
                  border-top-right-radius: 10px;
                  border-bottom-right-radius: 10px;
                  padding-right: 1.5rem;
              }
              .text-primary {
                  color: #0d6efd !important;
              }
              .text-success {
                  color: #198754 !important;
              }
            </style>
        </div>
    </div>
@endsection