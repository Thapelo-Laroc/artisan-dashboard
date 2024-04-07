<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Add this inside your <head> tag -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/5.10.1/main.min.js"></script>

</head>
<body>
    


<div id="calendar"></div>











    <script>
        // Example initialization (customize as needed)
document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar'); // Replace with your calendar element ID
    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: ['dayGrid', 'timeGrid', 'list'], // Choose the plugins you need
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'dayGridMonth,timeGridWeek,timeGridDay,listWeek'
        },
        events: '/events', // URL to fetch events from your backend (create a route for this)
        // Add other options (eventClick, eventRender, etc.) based on your requirements
    });
    calendar.render();
});

    </script>
</body>
</html>