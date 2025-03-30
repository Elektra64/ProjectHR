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