document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendario');
    var calendar = new FullCalendar.Calendar(calendarEl, {
        // Configuración de FullCalendar
        selectable: true, // Habilitar la selección
        // Resto de la configuración...

        // Manejador de eventos para el clic en el día
        select: function(info) {
            // info contiene la información sobre el rango de tiempo seleccionado

            // Dispara un evento personalizado para indicar que se hizo clic en un día
            var event = new CustomEvent('dayClick', { detail: { date: info.startStr } });
            document.dispatchEvent(event);
        }
    });

    calendar.render();
});

document.addEventListener('dayClick', function(event) {
    var clickedDate = event.detail.date;
    var dayElement = document.querySelector('.fc-day[data-date="' + clickedDate + '"]');

    // Cambia el color de fondo del día clicado a verde
    if (dayElement) {
        dayElement.style.backgroundColor = 'green';
    }
});
