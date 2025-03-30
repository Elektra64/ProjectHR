@extends('layouts.app')

@section('content')

    <div class="dashboard p-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">HR Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="dropdown-calendar me-2">
                    <ul class="dropdown-date">
                        <li>
                            <!-- <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="dropdown-item">Logout</button>
                            </form> -->
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Dashboard Widgets -->
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Total Employees</h5>
                        <h2 class="card-text">1,234</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Active Departments</h5>
                        <h2 class="card-text">15</h2>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">Pending Requests</h5>
                        <h2 class="card-text">23</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Example Chart -->
        <div class="card shadow-sm mb-4">
            <div class="card-body">
                <h5 class="card-title">Employee Distribution</h5>
                <div id="chart" style="height: 300px;"></div>
            </div>
        </div>
    </div>
    
@endsection

@section('styles')

@endsection

@section('scripts')
<!-- Add Chart.js or other JS libraries -->
<!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

<!-- <script>
    // Example Chart
    const ctx = document.getElementById('chart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['IT', 'HR', 'Finance', 'Marketing'],
            datasets: [{
                label: 'Employees per Department',
                data: [65, 59, 80, 81],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderWidth: 1
            }]
        }
    });
</script> -->
@endsection