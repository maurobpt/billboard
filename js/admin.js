$(document).ready(function() {

    // page is now ready, initialize the calendar...

    $('#calendar').fullCalendar({
        // put your options and callbacks here
		events: './json-events.php',
		eventClick: function(calEvent, jsEvent, view) {

        alert('Event: ' + calEvent.title);
        //alert('Coordinates: ' + jsEvent.pageX + ',' + jsEvent.pageY);
        //alert('View: ' + view.name);

        $(this).css('border-color', 'yellow');
		$(this).css('background-color', 'green');

		}
    })

});