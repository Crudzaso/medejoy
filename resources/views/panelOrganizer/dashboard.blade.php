@extends('adminlte::page')

@section('title', 'Dashboard - Organizador')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
<div class="container-fluid">
    <!-- Tarjetas de resumen -->
    <div class="row">
        <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>$12,340</h3>
                    <p>Ventas Totales</p>
                </div>
                <div class="icon">
                    <i class="fas fa-dollar-sign"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>5</h3>
                    <p>Rifas Activas</p>
                </div>
                <div class="icon">
                    <i class="fas fa-ticket-alt"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>250</h3>
                    <p>Boletos Vendidos</p>
                </div>
                <div class="icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- Gráfico de ventas -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ventas Totales por Rifa</h3>
                </div>
                <div class="card-body">
                    <canvas id="salesChart" height="100"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Tabla de detalle -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detalle de Rifas</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Rifa</th>
                                <th>Boletos Vendidos</th>
                                <th>Ventas Totales</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rifa del Auto</td>
                                <td>100</td>
                                <td>$5,000</td>
                                <td><span class="badge badge-success">Activa</span></td>
                            </tr>
                            <tr>
                                <td>Rifa de la Moto</td>
                                <td>50</td>
                                <td>$2,500</td>
                                <td><span class="badge badge-success">Activa</span></td>
                            </tr>
                            <tr>
                                <td>Rifa de la Casa</td>
                                <td>100</td>
                                <td>$10,000</td>
                                <td><span class="badge badge-secondary">Inactiva</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Datos ficticios para el gráfico
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Rifa del Auto', 'Rifa de la Moto', 'Rifa de la Casa'],
                datasets: [{
                    label: 'Ventas ($)',
                    data: [5000, 2500, 10000],
                    backgroundColor: 'rgba(54, 162, 235, 0.5)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endsection
