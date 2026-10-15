!(function (NioApp) {
    'use strict';

    NioApp.Calendar = function (selector, events) {
        let elm = document.querySelectorAll(selector);

        elm.forEach((item) => {
            events.forEach;
        });
        elm.forEach((item) => {
            let calId = item.id;
            let calendarEl = document.getElementById(calId);

            if (calendarEl != 'undefined' && calendarEl != null) {
                let calendar = new FullCalendar.Calendar(calendarEl, {
                    timeZone: 'UTC',
                    initialView: NioApp.State.asMobile
                        ? 'listWeek'
                        : 'dayGridMonth',
                    themeSystem: 'standard',
                    headerToolbar: {
                        left: 'title prev,next',
                        center: null,
                        right: 'today dayGridMonth,timeGridWeek,timeGridDay,listWeek',
                    },
                    height: 800,
                    contentHeight: 780,
                    aspectRatio: 3,
                    editable: true,
                    droppable: true,
                    views: {
                        dayGridMonth: {
                            dayMaxEventRows: 2,
                        },
                    },
                    direction: NioApp.State.isRTL ? 'rtl' : 'ltr',
                    nowIndicator: true,
                    eventClick: function (item) {
                        let title = item.event._def.title;
                        let description =
                            item.event._def.extendedProps.description;
                        let start = item.event._instance.range.start;
                        let startDate =
                            start.getFullYear() +
                            '-' +
                            String(start.getMonth() + 1).padStart(2, '0') +
                            '-' +
                            String(start.getDate()).padStart(2, '0');
                        let startDateAlt =
                            String(start.getDate()).padStart(2, '0') +
                            ' ' +
                            NioApp.monthList[start.getMonth()] +
                            ' ' +
                            start.getFullYear();
                        let startTime = start.toUTCString().split(' ');
                        startTime = startTime[startTime.length - 2];
                        startTime = startTime == '00:00:00' ? '' : startTime;
                        let end = item.event._instance.range.end;
                        let endDate =
                            end.getFullYear() +
                            '-' +
                            String(end.getMonth() + 1).padStart(2, '0') +
                            '-' +
                            String(end.getDate()).padStart(2, '0');
                        let endDateAlt =
                            String(end.getDate()).padStart(2, '0') +
                            ' ' +
                            NioApp.monthList[end.getMonth()] +
                            ' ' +
                            end.getFullYear();
                        let endTime = end.toUTCString().split(' ');
                        endTime = endTime[endTime.length - 2];
                        endTime = endTime == '00:00:00' ? '' : endTime;
                        let className = item.event._def.ui.classNames;
                        let eventId = item.event._def.publicId;
                        //set seleted event
                        selectedEvent = calendar.getEventById(eventId);
                        selectedEventId = eventId;

                        // preview
                        previewTitle.innerText = title;
                        previewDescription.innerText = description;
                        previewStart.innerText = `${startDateAlt}${startTime ? ' - ' + NioApp.to12(startTime) : ''}`;
                        previewEnd.innerText = `${endDateAlt}${endTime ? ' - ' + NioApp.to12(endTime) : ''}`;

                        eventPreviewModal.classList.add('show');
                        document.body.classList.add('overflow-hidden');

                        let close =
                            eventPreviewModal.querySelectorAll('.modal-close');

                        close.forEach(function (item) {
                            item.addEventListener('click', function (e) {
                                e.preventDefault();
                                eventPreviewModal.classList.remove('show');
                                document.body.classList.remove(
                                    'overflow-hidden',
                                );
                            });
                        });
                    },
                    events: events,
                });

                calendar.render();

                // init date picker
                NioApp.DatePicker('.fc-event-datepicker', {
                    buttonClass: 'btn',
                    autohide: true,
                    format: 'yyyy-mm-dd',
                });
                // init time picker
                NioApp.TimePicker('.fc-event-timepicker', {
                    format: 24,
                    interval: 30,
                    start: '00:00',
                    end: '23:30',
                });

                // preview modal delector
                let eventPreviewModal =
                    document.getElementById('eventPreviewModal');
                let previewTitle =
                    eventPreviewModal.querySelector('.event-title');
                let previewDescription =
                    eventPreviewModal.querySelector('.event-description');
                let previewStart =
                    eventPreviewModal.querySelector('.event-start');
                let previewEnd = eventPreviewModal.querySelector('.event-end');
                let previewHeader =
                    eventPreviewModal.querySelector('.modal-header');

                // choice js for eventcategory
                let eventCategorySelect =
                    document.getElementById('eventCategory');
                const choicesCat = new Choices(eventCategorySelect, {
                    silent: true,
                    allowHTML: false,
                    searchEnabled: true,
                    placeholder: true,
                    placeholderValue: null,
                    searchPlaceholderValue: 'Search',
                    shouldSort: false,
                    choices: [
                        { value: 'event-primary', label: 'Company' },
                        { value: 'event-success', label: 'Seminars' },
                        { value: 'event-info', label: 'Conferences' },
                        { value: 'event-warning', label: 'Meeting' },
                        { value: 'event-danger', label: 'Business dinners' },
                        { value: 'event-secondary', label: 'Private' },
                        { value: 'event-pink', label: 'Workshop' },
                        { value: 'event-primary-soft', label: 'Auctions' },
                        {
                            value: 'event-success-soft',
                            label: 'Networking events',
                        },
                        { value: 'event-info-soft', label: 'Product launches' },
                        { value: 'event-warning-soft', label: 'Fundrising' },
                        { value: 'event-danger-soft', label: 'Sponsored' },
                        {
                            value: 'event-secondary-soft',
                            label: 'Sports events',
                        },
                        { value: 'event-pink-soft', label: 'Exhibition' },
                    ],
                    callbackOnCreateTemplates: function (template) {
                        return {
                            item: ({ classNames }, data) => {
                                return template(`
                                <div class="${classNames.item} ${
                                    data.highlighted
                                        ? classNames.highlightedState
                                        : classNames.itemSelectable
                                } ${
                                    data.placeholder
                                        ? classNames.placeholder
                                        : ''
                                }" data-item data-id="${data.id}" data-value="${data.value}" ${
                                    data.active ? 'aria-selected="true"' : ''
                                } ${data.disabled ? 'aria-disabled="true"' : ''}>
                                    <span class="fc-select-dot fc-${data.value}"></span> ${data.label}
                                </div>
                                `);
                            },
                            choice: ({ classNames }, data) => {
                                return template(`
                                <div class="${classNames.item} ${classNames.itemChoice} ${
                                    data.disabled
                                        ? classNames.itemDisabled
                                        : classNames.itemSelectable
                                }" data-select-text="${this.config.itemSelectText}" data-choice ${
                                    data.disabled
                                        ? 'data-choice-disabled aria-disabled="true"'
                                        : 'data-choice-selectable'
                                } data-id="${data.id}" data-value="${data.value}" ${
                                    data.groupId > 0
                                        ? 'role="treeitem"'
                                        : 'role="option"'
                                }>
                                    <span class="fc-select-dot fc-${data.value}"></span> ${data.label}
                                </div>
                                `);
                            },
                        };
                    },
                });

                let selectedEvent, selectedEventId;

                //form modal selectors
                let editEvent = document.getElementById('editEvent');
                let addEvent = document.getElementById('addEvent');
                let eventFormModal = document.getElementById('eventFormModal');
                let formTitle = eventFormModal.querySelector('.fc-form-title');
                let formAction =
                    eventFormModal.querySelector('.fc-form-action');
                let formInputTitle =
                    eventFormModal.querySelector('#eventTitle');
                let formInputDescription =
                    eventFormModal.querySelector('#eventDescription');
                let formInputCategory =
                    eventFormModal.querySelector('#eventCategory');
                let formInputStartDate =
                    eventFormModal.querySelector('#eventStartDate');
                let formInputStartTime =
                    eventFormModal.querySelector('#eventStartTime');
                let formInputEndDate =
                    eventFormModal.querySelector('#eventEndDate');
                let formInputEndTime =
                    eventFormModal.querySelector('#eventEndTime');
                let formEventAdd = eventFormModal.querySelector('#eventAdd');
                let formEventUpdate =
                    eventFormModal.querySelector('#eventUpdate');

                //delete event
                let deleteEvent = document.getElementById('deleteEvent');
                deleteEvent.addEventListener('click', function (e) {
                    e.preventDefault();
                    selectedEvent.remove();
                });

                //get data from seleted event
                editEvent.addEventListener('click', function (e) {
                    e.preventDefault();
                    let start = selectedEvent._instance.range.start;
                    let startDate =
                        start.getFullYear() +
                        '-' +
                        String(start.getMonth() + 1).padStart(2, '0') +
                        '-' +
                        String(start.getDate()).padStart(2, '0');
                    let startTime = start.toUTCString().split(' ');
                    startTime = startTime[startTime.length - 2];
                    startTime = startTime == '00:00:00' ? '' : startTime;
                    let end = selectedEvent._instance.range.end;
                    let endDate =
                        end.getFullYear() +
                        '-' +
                        String(end.getMonth() + 1).padStart(2, '0') +
                        '-' +
                        String(end.getDate()).padStart(2, '0');
                    let endTime = end.toUTCString().split(' ');
                    endTime = endTime[endTime.length - 2];
                    endTime = endTime == '00:00:00' ? '' : endTime;

                    formTitle.innerText = 'Edit Event';
                    formInputTitle.value = selectedEvent._def.title;
                    formInputDescription.value = selectedEvent._def
                        .extendedProps.description
                        ? selectedEvent._def.extendedProps.description
                        : '';
                    formInputStartDate.value = startDate;
                    formInputStartTime.value = startTime;
                    formInputEndDate.value = endDate;
                    formInputEndTime.value = endTime;
                    choicesCat.setChoiceByValue(
                        selectedEvent._def.ui.classNames[0].slice(3),
                    );
                    formEventAdd.style.display = 'none';
                    formEventUpdate.style.display = 'block';
                });

                //reset data for new event
                addEvent.addEventListener('click', function (e) {
                    e.preventDefault();
                    formTitle.innerText = 'Add Event';
                    formInputTitle.value = '';
                    formInputDescription.value = '';
                    formInputStartDate.value = '';
                    formInputStartTime.value = '';
                    formInputEndDate.value = '';
                    formInputEndTime.value = '';
                    choicesCat.setChoiceByValue('event-primary');
                    formEventAdd.style.display = 'block';
                    formEventUpdate.style.display = 'none';
                });

                //on update button click
                formEventUpdate.addEventListener('click', function (e) {
                    e.preventDefault();
                    selectedEvent.remove();
                    calendar.addEvent({
                        id: selectedEventId,
                        title: formInputTitle.value,
                        start:
                            formInputStartDate.value +
                            (formInputStartTime.value
                                ? 'T' + formInputStartTime.value + 'Z'
                                : ''),
                        end:
                            formInputEndDate.value +
                            (formInputEndTime.value
                                ? 'T' + formInputEndTime.value + 'Z'
                                : ''),
                        className: `fc-${formInputCategory.value}`,
                        description: formInputDescription.value,
                    });
                });

                //on add button click
                formEventAdd.addEventListener('click', function (e) {
                    e.preventDefault();
                    calendar.addEvent({
                        id: `added-event-id-${Math.floor(Math.random() * 9999999)}`,
                        title: formInputTitle.value,
                        start:
                            formInputStartDate.value +
                            (formInputStartTime.value
                                ? 'T' + formInputStartTime.value + 'Z'
                                : ''),
                        end:
                            formInputEndDate.value +
                            (formInputEndTime.value
                                ? 'T' + formInputEndTime.value + 'Z'
                                : ''),
                        className: `fc-${formInputCategory.value}`,
                        description: formInputDescription.value,
                    });
                });
            }
        });
    };

    NioApp.Time = {
        today: function () {
            let today = new Date();
            let dd = String(today.getDate()).padStart(2, '0');
            let mm = String(today.getMonth() + 1).padStart(2, '0');
            let yyyy = today.getFullYear();

            return yyyy + '-' + mm + '-' + dd;
        },
        yesterday: function () {
            let today = new Date();
            let yesterday = new Date(today);
            yesterday.setDate(today.getDate() - 1);
            let y_dd = String(yesterday.getDate()).padStart(2, '0');
            let y_mm = String(yesterday.getMonth() + 1).padStart(2, '0');
            let y_yyyy = yesterday.getFullYear();

            return y_yyyy + '-' + y_mm + '-' + y_dd;
        },
        currentMonth: function () {
            let today = new Date();
            let mm = String(today.getMonth() + 1).padStart(2, '0');
            let yyyy = today.getFullYear();

            return yyyy + '-' + mm;
        },
    };

    NioApp.Calendar.init = function () {
        NioApp.Calendar('.js-calendar', [
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Reader will be distracted',
                start: NioApp.Time.currentMonth() + '-03T13:30:00',
                className: 'fc-event-danger',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden. 1",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Rabfov va hezow.',
                start: NioApp.Time.currentMonth() + '-14T13:30:00',
                end: NioApp.Time.currentMonth() + '-14',
                className: 'fc-event-success',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'The leap into electronic',
                start: NioApp.Time.currentMonth() + '-05',
                end: NioApp.Time.currentMonth() + '-06',
                className: 'fc-event-primary',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Lorem Ipsum passage - Product Release',
                start: NioApp.Time.currentMonth() + '-02',
                end: NioApp.Time.currentMonth() + '-04',
                className: 'fc-event-primary',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                title: 'Gibmuza viib hepobe.',
                start: NioApp.Time.currentMonth() + '-12',
                end: NioApp.Time.currentMonth() + '-10',
                className: 'fc-event-pink-soft',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Jidehse gegoj fupelone.',
                start: NioApp.Time.currentMonth() + '-07T16:00:00',
                className: 'fc-event-danger-soft',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Ke uzipiz zip.',
                start: NioApp.Time.currentMonth() + '-16T16:00:00',
                end: NioApp.Time.currentMonth() + '-14',
                className: 'fc-event-info-soft',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Piece of classical Latin literature',
                start: NioApp.Time.today(),
                end: NioApp.Time.today() + '-01',
                className: 'fc-event-primary',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Nogok kewwib ezidbi.',
                start: NioApp.Time.today() + 'T10:00:00',
                className: 'fc-event-info',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Mifebi ik cumean.',
                start: NioApp.Time.today() + 'T14:30:00',
                className: 'fc-event-warning-soft',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Play Time',
                start: NioApp.Time.today() + 'T17:30:00',
                className: 'fc-event-info',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'Rujfogve kabwih haznojuf.',
                start: NioApp.Time.yesterday() + 'T05:00:00',
                className: 'fc-event-danger',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
            {
                id: 'default-event-id-' + Math.floor(Math.random() * 9999999),
                title: 'simply dummy text of the printing',
                start: NioApp.Time.yesterday() + 'T07:00:00',
                className: 'fc-event-primary-soft',
                description:
                    "Use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden.",
            },
        ]);
    };

    NioApp.winLoad(NioApp.Calendar.init);
})(NioApp);
