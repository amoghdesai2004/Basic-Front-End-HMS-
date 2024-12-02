// script.js

document.getElementById('appointmentForm').addEventListener('submit', function (event) {
    event.preventDefault();
    
    const patientName = document.getElementById('patientName').value;
    const appointmentDate = document.getElementById('appointmentDate').value;
  
    alert(`Appointment booked for ${patientName} on ${appointmentDate}.`);
  });
  