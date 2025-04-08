import './bootstrap';
import { Calendar } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction';

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

// Calendar Toggle
document.getElementById('showCalendar').addEventListener('click', function() {
    document.getElementById('calendarOverlay').style.display = 'flex';
  });
  
  document.querySelector('.btn-close-calendar').addEventListener('click', function() {
    document.getElementById('calendarOverlay').style.display = 'none';
  });
  
  // Close calendar when clicking outside
  document.getElementById('calendarOverlay').addEventListener('click', function(e) {
    if(e.target === this) {
        this.style.display = 'none';
    }
  });
  
  document.addEventListener('DOMContentLoaded', function() {
    // Initialize Calendar
    const calendarEl = document.getElementById('calendar');
    if (calendarEl) {
      const calendar = new Calendar(calendarEl, {
        plugins: [dayGridPlugin, interactionPlugin],
        initialView: 'dayGridMonth',
        initialDate: new Date(),
        headerToolbar: false,
        events: '/api/events',
        editable: true,
        selectable: true,
        dateClick: function(info) {
            $('#eventModal').modal('show');
            document.querySelector('#eventForm input[name="date"]').value = info.dateStr;
        },
        eventClick: function(info) {
            alert('Event: ' + info.event.title + '\nDate: ' + info.event.startStr);
        },
        datesSet: function(dateInfo) {
              updateRealTimeClock();
          }
      });
  
       // Calendar navigation controls
       document.querySelector('.prev-month').addEventListener('click', () => calendar.prev());
       document.querySelector('.next-month').addEventListener('click', () => calendar.next());
       document.querySelector('.today').addEventListener('click', () => calendar.today());
       
      calendar.render();
    }
  
    // Real-time Clock
    function updateRealTimeClock() {
        const now = new Date();
        const timeString = now.toLocaleTimeString('en-US', {
            hour: '2-digit',
            minute: '2-digit',
            second: '2-digit'
        });
        document.getElementById('realTimeClock').textContent = timeString;
    }
  
    // Update clock every second
    setInterval(updateRealTimeClock, 1000);
    
    // Initial clock setup
    const clockElement = document.createElement('div');
    clockElement.id = 'realTimeClock';
    clockElement.className = 'calendar-clock';
    document.querySelector('.calendar-container').appendChild(clockElement);
    updateRealTimeClock();
  
    // Event Form Submission
    document.getElementById('eventForm').addEventListener('submit', function(e) {
      e.preventDefault();
      const formData = new FormData(this);
      
      fetch('/api/events', {
          method: 'POST',
          body: formData
      }).then(() => {
          calendarEl.refetchEvents();
          $('#eventModal').modal('hide');
      });
    });
    
    // Refresh calendar every minute
    setInterval(() => calendarEl.refetchEvents(), 60000);
  });