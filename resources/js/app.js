import './bootstrap';

const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

// document.addEventListener('DOMContentLoaded', function() {
//   var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
//   var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
//       return new bootstrap.Tooltip(tooltipTriggerEl);
//   });
// });

// const ctx = document.getElementById('chart').getContext('2d');
//     new Chart(ctx, {
//         type: 'bar',
//         data: {
//             labels: ['IT', 'HR', 'Finance', 'Marketing'],
//             datasets: [{
//                 label: 'Employees per Department',
//                 data: [65, 59, 80, 81],
//                 backgroundColor: [
//                     'rgba(255, 99, 132, 0.2)',
//                     'rgba(54, 162, 235, 0.2)',
//                     'rgba(255, 206, 86, 0.2)',
//                     'rgba(75, 192, 192, 0.2)'
//                 ],
//                 borderWidth: 1
//             }]
//         }
//     });

document.addEventListener('DOMContentLoaded', function() {
  // Main Employee Chart
  // const employeeChart = new Chart(document.getElementById('employeeChart'), {
  //     type: 'bar',
  //     data: {
  //         labels: ['IT', 'HR', 'Finance', 'Marketing', 'Operations'],
  //         datasets: [{
  //             label: 'Employees per Department',
  //             data: [65, 59, 80, 81, 45],
  //             backgroundColor: '#3498db55',
  //             borderColor: '#3498db',
  //             borderWidth: 2
  //         }]
  //     },
  //     options: {
  //         responsive: true,
  //         maintainAspectRatio: false,
  //         scales: {
  //             y: {
  //                 beginAtZero: true
  //             }
  //         }
  //     }
  // });

  // Attendance Doughnut Chart
  const attendanceChart = new Chart(document.getElementById('attendanceChart'), {
      type: 'doughnut',
      data: {
          labels: ['Present', 'Absent'],
          datasets: [{
              data: [85, 15],
              backgroundColor: ['#27ae60', '#e74c3c']
          }]
      }
  });

  // Gender Ratio Pie Chart
  const genderChart = new Chart(document.getElementById('genderChart'), {
      type: 'pie',
      data: {
          labels: ['Male', 'Female'],
          datasets: [{
              data: [60, 35],
              backgroundColor: ['#3498db', '#e84393', '#f1c40f']
          }]
      }
  });

  // Dynamic Metric Updates
  function updateMetrics() {
      fetch('/api/metrics')
          .then(response => response.json())
          .then(data => {
              // Update metric values
              document.querySelector('.employee-metric .metric-value').textContent = data.totalEmployees;
              document.querySelector('.department-metric .metric-value').textContent = data.activeDepartments;
              document.querySelector('.request-metric .metric-value').textContent = data.pendingRequests;
          });
  }

  // Update metrics every 30 seconds
  // setInterval(updateMetrics, 30000);
});