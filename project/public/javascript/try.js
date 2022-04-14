var event_count = 0 // to count the number of events starting from zero
$(document).ready(function () {
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'month,agendaWeek,agendaDay',
        },
        defaultDate: '2016-01-12',
        editable: true,
        selectable: true,
        minTime: '09:00:00',
        maxTime: '18:00:00',
        columnFormat: 'dddd',
        eventLimit: true,
        select: function (start, end) {
            var eventData = {
                start: start,
                end: end,
            }
            event_count += 1 //if the control is inside this function increment eventcount
            if (event_count < 4) {
                //if the counter is less than four then do this
                $('#calendar').fullCalendar('renderEvent', eventData, true) // stick? = true
                $('#calendar').fullCalendar('unselect')
            }
        },
        eventClick: function (event) {
            $('#calendar').fullCalendar('removeEvents', event._id)
            event_count -= event_count //decrement event_count when event is removed
        },
        loading: function (bool) {
            $('#loading').toggle(bool)
        },
    })

    $('#view_calendar').on('shown.bs.modal', function () {
        $('#calendar').fullCalendar('render')
    })
})
