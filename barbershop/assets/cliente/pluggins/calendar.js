d = new Date();
value = d.getFullYear() + "-" + ("0" + (d.getMonth() + 1)).slice(-2) + "-" + d.getDate();
datoHoras(value);
sessionStorage.setItem("fechaselect", value);

var vanillaCalendar = {
    month: document.querySelectorAll('[data-calendar-area="month"]')[0],
    next: document.querySelectorAll('[data-calendar-toggle="next"]')[0],
    previous: document.querySelectorAll('[data-calendar-toggle="previous"]')[0],
    label: document.querySelectorAll('[data-calendar-label="month"]')[0],
    activeDates: null,
    date: new Date(),
    todaysDate: new Date(),

    init: function(options) {
        this.options = options
        this.date.setDate(1)
        this.createMonth()
        this.createListeners()
    },

    createListeners: function() {
        var _this = this
        this.next.addEventListener('click', function() {
                _this.clearCalendar()
                var nextMonth = _this.date.getMonth() + 1
                _this.date.setMonth(nextMonth)
                _this.createMonth()
            })
            // Clears the calendar and shows the previous month
        this.previous.addEventListener('click', function() {
            _this.clearCalendar()
            var prevMonth = _this.date.getMonth() - 1
            _this.date.setMonth(prevMonth)
            _this.createMonth()
        })
    },

    createDay: function(num, day, year) {
        var newDay = document.createElement('div')
        var dateEl = document.createElement('span')
        dateEl.innerHTML = num
        newDay.className = 'vcal-date'
        newDay.setAttribute('data-calendar-date', this.date.getFullYear() + "-" + ("0" + (this.date.getMonth() + 1)).slice(-2) + "-" + this.date.getDate())

        // if it's the first day of the month
        if (num === 1) {
            if (day === 0) {
                newDay.style.marginLeft = (6 * 14.28) + '%'
            } else {
                newDay.style.marginLeft = ((day - 1) * 14.28) + '%'
            }
        }

        if (this.options.disablePastDays && this.date.getTime() <= this.todaysDate.getTime() - 1) {
            newDay.classList.add('vcal-date--disabled')
        } else {
            newDay.classList.add('vcal-date--active')
            newDay.setAttribute('data-calendar-status', 'active')
        }

        if (this.date.toString() === this.todaysDate.toString()) {
            newDay.classList.add('vcal-date--today')
        }

        newDay.appendChild(dateEl)
        this.month.appendChild(newDay)
    },

    dateClicked: function() {
        var _this = this
        this.activeDates = document.querySelectorAll(
            '[data-calendar-status="active"]'
        )
        for (var i = 0; i < this.activeDates.length; i++) {
            this.activeDates[i].addEventListener('click', function(event) {
                var picked = document.querySelectorAll(
                        '[data-calendar-label="picked"]'
                    )[0]
                    //picked.innerHTML = this.dataset.calendarDate
                sessionStorage.setItem("fechaselect", this.dataset.calendarDate);
                datoHoras(this.dataset.calendarDate);
                _this.removeActiveClass()
                this.classList.add('vcal-date--selected')
                    //alert(this.dataset.calendarDate);
            })
        }
    },

    createMonth: function() {
        var currentMonth = this.date.getMonth()
        while (this.date.getMonth() === currentMonth) {
            this.createDay(
                this.date.getDate(),
                this.date.getDay(),
                this.date.getFullYear()
            )
            this.date.setDate(this.date.getDate() + 1)
        }
        // while loop trips over and day is at 30/31, bring it back
        this.date.setDate(1)
        this.date.setMonth(this.date.getMonth() - 1)

        this.label.innerHTML =
            this.monthsAsString(this.date.getMonth()) + ' ' + this.date.getFullYear()
        this.dateClicked()
    },

    monthsAsString: function(monthIndex) {
        return [
            'Enero',
            'Febrero',
            'Marzo',
            'Abril',
            'Mayo',
            'Junio',
            'Julio',
            'Agosto',
            'Setiembre',
            'Octubre',
            'Noviembre',
            'Deciembre'
        ][monthIndex]
    },

    clearCalendar: function() {
        vanillaCalendar.month.innerHTML = ''
    },

    removeActiveClass: function() {
        for (var i = 0; i < this.activeDates.length; i++) {
            this.activeDates[i].classList.remove('vcal-date--selected')
        }
    }
}


function datoHoras(fecha) {
    $.ajax({
        url: "http://localhost:8080/barbershop/clientes/Hora/getData",
        type: "POST",
        data: { fecha: fecha },
        dataType: "json",
        success: function(data) {

            var html = new Array();

            $.each(data, function(key, value) {
                html.push(
                    '<div class="col-lg-4 col-sm-3 " >' +
                    '<div class="hours" id="' + value.id + '"  fech="' + fecha + '">' +
                    ' <h4>' + value.inicio + '-' + value.fin + '</h4>' +
                    '</div>' +
                    '</div>'
                );
            });

            $("#horas").html(html);
        }
    });
}