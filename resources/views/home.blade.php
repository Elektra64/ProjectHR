@extends('layouts.app')

@section('content')

    <div class="dashboard p-3">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">HR Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
                <div class="dropdown-calendar me-2">
                    <div class="calendar-search">
                        <div class="input-group">
                            <input type="text" 
                                class="form-control" 
                                placeholder="Event dates..."
                                id="calendarSearch">
                            <button class="btn btn-calendar" id="showCalendar">
                                <i class="lni lni-calendar"></i>
                            </button>
                        </div>
                        
                        <!-- Calendar Overlay -->
                        <div class="calendar-overlay" id="calendarOverlay">
                            <div class="calendar-container">
                                <div class="calendar-header">
                                    <h4>Calendar</h4>
                                    <div id="realTimeClock" class="calendar-clock"></div>
                                    <div class="calendar-controls">
                                        <button class="btn prev-month"><i class="lni lni-chevron-left"></i></button>
                                        <button class="btn today">Today</button>
                                        <button class="btn next-month"><i class="lni lni-chevron-right"></i></button>
                                    </div>
                                    <span id="realTimeClock"></span>
                                    <button class="btn-close-calendar">
                                        <i class="lni lni-close"></i>
                                    </button>
                                </div>
                                <div id="calendar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main class="dashboard-main container-fluid">
            <!-- Metrics Cards -->
            <div class="metrics-grid">
                <div class="metric-card employee-metric">
                    <div class="card-content">
                        <div class="metric-icon">
                            <i class="lni lni-users"></i>
                        </div>
                        <div class="metric-info">
                            <h3>Total Employees</h3>
                            <div class="metric-value">1,234</div>
                            <div class="metric-trend positive">
                                <i class="lni lni-arrow-up"></i> 12% from last month
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metric-card department-metric">
                    <div class="card-content">
                        <div class="metric-icon">
                            <i class="lni lni-briefcase"></i>
                        </div>
                        <div class="metric-info">
                            <h3>Active Departments</h3>
                            <div class="metric-value">15</div>
                            <div class="metric-trend neutral">
                                <i class="lni lni-minus"></i> No change
                            </div>
                        </div>
                    </div>
                </div>

                <div class="metric-card request-metric">
                    <div class="card-content">
                        <div class="metric-icon">
                            <i class="lni lni-alarm"></i>
                        </div>
                        <div class="metric-info">
                            <h3>Pending Requests</h3>
                            <div class="metric-value">23</div>
                            <div class="metric-trend negative">
                                <i class="lni lni-arrow-down"></i> 5% overdue
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Charts Section -->
            <div class="charts-container">
                <div class="main-chart">
                    <div class="chart-header">
                        <h3>Employee Distribution</h3>
                        <div class="chart-controls">
                            <select class="form-select period-select">
                                <option>Last 7 Days</option>
                                <option>Last Month</option>
                                <option>Last Year</option>
                            </select>
                        </div>
                    </div>
                    <canvas id="employeeChart"></canvas>
                </div>

                <div class="side-charts">
                    <div class="small-chart attendance-chart">
                        <h4>Attendance Rate</h4>
                        <canvas id="attendanceChart"></canvas>
                    </div>
                    <div class="small-chart gender-chart">
                        <h4>Gender Ratio</h4>
                        <canvas id="genderChart"></canvas>
                    </div>
                </div>
            </div>

            <!-- Quick Action Buttons -->
            <div class="quick-actions">
                <button class="action-btn new-employee">
                    <i class="lni lni-plus"></i>
                    Add New Employee
                </button>
                <button class="action-btn generate-report">
                    <i class="lni lni-download"></i>
                    Generate Report
                </button>
            </div>
        </main>
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