/*!
 * NioApp v1.0.0 (https://softnio.com/)
 * Developed by Softnio Team.
 * Copyright by Softnio.
 */
var NioApp = (function (win, doc) {
    'use strict';
    var NioApp = {
        AppInfo: {
            name: 'NioApp',
            version: '1.0.0',
            author: 'Softnio',
        },
        Package: {
            name: 'DashWind Tailwind',
            version: '1.0',
        },
    };

    function docReady(callback) {
        document.addEventListener('DOMContentLoaded', callback, false);
    }

    function winLoad(callback) {
        window.addEventListener('load', callback, false);
    }

    function onResize(callback, selector) {
        selector = typeof selector === typeof undefined ? window : selector;
        selector.addEventListener('resize', callback);
    }

    NioApp.docReady = docReady;
    NioApp.winLoad = winLoad;
    NioApp.onResize = onResize;

    return NioApp;
})(window, document);

NioApp = (function (NioApp) {
    'use strict';

    //Get Value For Custom PropertyValue  @v1.0

    // Global Uses @v1.0
    /////////////////////////////
    NioApp.BS = {};
    NioApp.Addons = {};
    NioApp.Custom = {};
    NioApp.Chart = {};
    NioApp.body = document.querySelector('body');
    NioApp.Win = { height: window.innerHeight, width: window.innerWidth };
    NioApp.Break = {
        sm: 640,
        md: 768,
        lg: 1024,
        xl: 1280,
        xl2: 1536,
        any: Infinity,
    };
    NioApp.isDark = NioApp.body.classList.contains('dark') ? true : false;
    NioApp.monthList = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];

    // State @v1.0
    NioApp.State = {
        isRTL:
            NioApp.body.classList.contains('rtl') ||
            NioApp.body.getAttribute('dir') === 'rtl'
                ? true
                : false,
        isTouch: 'ontouchstart' in document.documentElement ? true : false,
        isMobile: navigator.userAgent.match(
            /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini|Windows Phone|/i,
        )
            ? true
            : false,
        asMobile: NioApp.Win.width < NioApp.Break.md ? true : false,
    };

    // State Update @v1.1
    NioApp.StateUpdate = function () {
        NioApp.Win = { height: window.innerHeight, width: window.innerWidth };
        NioApp.State.asMobile =
            NioApp.Win.width < NioApp.Break.md ? true : false;
    };

    // HEXtoRGB @v1.0
    NioApp.hexRGB = function (hex, op) {
        let color, colorRGB;
        var opc = op ? op : 1;
        if (/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)) {
            color = hex.substring(1).split('');
            if (color.length === 3) {
                color = [
                    color[0],
                    color[0],
                    color[1],
                    color[1],
                    color[2],
                    color[2],
                ];
            }
            color = '0x' + color.join('');
            colorRGB = [
                (color >> 16) & 255,
                (color >> 8) & 255,
                color & 255,
            ].join(',');
            return opc >= 1
                ? 'rgba(' + colorRGB + ')'
                : 'rgba(' + colorRGB + ',' + opc + ')';
        }
        throw new Error('bad hex');
    };

    //Time Converter @v1.0
    NioApp.to12 = function (time) {
        time = time
            .toString()
            .match(/^([01]\d|2[0-3])(:)([0-5]\d)(:[0-5]\d)?$/) || [time];
        if (time.length > 1) {
            time = time.slice(1);
            time.pop();
            time[5] = +time[0] < 12 ? ' AM' : ' PM'; // Set AM/PM
            time[0] = +time[0] % 12 || 12;
        }
        time = time.join('');
        return time;
    };

    // attribute maker
    NioApp.attr = function (selector, property, value) {
        const att = document.createAttribute(property);
        att.value = value;
        selector.setAttributeNode(att);
    };

    //slide up
    NioApp.SlideUp = function (target, duration = 500) {
        target.style.transitionProperty = 'height, margin, padding';
        target.style.transitionDuration = duration + 'ms';
        target.style.boxSizing = 'border-box';
        target.style.height = target.offsetHeight + 'px';
        target.offsetHeight;
        target.style.overflow = 'hidden';
        target.style.height = 0;
        target.style.paddingTop = 0;
        target.style.paddingBottom = 0;
        target.style.marginTop = 0;
        target.style.marginBottom = 0;
        window.setTimeout(() => {
            target.style.display = 'none';
            target.style.removeProperty('height');
            target.style.removeProperty('padding-top');
            target.style.removeProperty('padding-bottom');
            target.style.removeProperty('margin-top');
            target.style.removeProperty('margin-bottom');
            target.style.removeProperty('overflow');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
        }, duration);
    };

    //side down
    NioApp.SlideDown = function (target, duration = 500) {
        target.style.removeProperty('display');
        let display = window.getComputedStyle(target).display;
        if (display === 'none') display = 'block';
        target.style.display = display;
        let height = target.offsetHeight;
        target.style.overflow = 'hidden';
        target.style.height = 0;
        target.style.paddingTop = 0;
        target.style.paddingBottom = 0;
        target.style.marginTop = 0;
        target.style.marginBottom = 0;
        target.offsetHeight;
        target.style.boxSizing = 'border-box';
        target.style.transitionProperty = 'height, margin, padding';
        target.style.transitionDuration = duration + 'ms';
        target.style.height = height + 'px';
        target.style.removeProperty('padding-top');
        target.style.removeProperty('padding-bottom');
        target.style.removeProperty('margin-top');
        target.style.removeProperty('margin-bottom');
        window.setTimeout(() => {
            target.style.removeProperty('height');
            target.style.removeProperty('overflow');
            target.style.removeProperty('transition-duration');
            target.style.removeProperty('transition-property');
        }, duration);
    };

    //slide toggle
    NioApp.SlideToggle = function (target, duration = 500) {
        if (window.getComputedStyle(target).display === 'none') {
            return NioApp.SlideDown(target, duration);
        } else {
            return NioApp.SlideUp(target, duration);
        }
    };

    // to min
    NioApp.toMin = function (input) {
        let value = input.split(':');
        let hour = parseInt(value[0]);
        let min = value[1] !== undefined ? parseInt(value[1]) : 0;
        let time = hour * 60 + min;
        return time;
    };

    //to time
    NioApp.toTime = function (totalMinutes) {
        const minutes = totalMinutes % 60;
        const hours = Math.floor(totalMinutes / 60);
        return `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}`;
    };

    //get parent Elements
    NioApp.getParents = function (el, selector, filter) {
        // If no selector defined will bubble up all the way to *document*
        let parentSelector =
            selector === undefined
                ? document
                : document.querySelector(selector);
        var parents = [];
        var pNode = el.parentNode;

        while (pNode !== parentSelector) {
            var element = pNode;

            if (filter === undefined) {
                parents.push(element); // Push that parentSelector you wanted to stop at
            } else {
                element.classList.contains(filter) && parents.push(element);
            }
            pNode = element.parentNode;
        }

        return parents;
    };

    /*! Toggle Class */
    NioApp.ToggleClass = function (el) {
        const elm = document.querySelectorAll('.class-toggle');
        elm.forEach(function (item) {
            let target = document.querySelector(item.dataset.target);
            let activeclass = item.dataset.activeClass
                ? item.dataset.activeClass
                : 'active';
            let bodyScroll = item.dataset.bodyScroll === 'off' ? true : false;
            item.addEventListener('click', function (e) {
                let items = document.querySelectorAll(
                    `[data-target="${item.dataset.target}"]`,
                );
                items.forEach(function (single) {
                    single.classList.contains(activeclass)
                        ? single.classList.remove(activeclass)
                        : single.classList.add(activeclass);
                });
                target.classList.contains(activeclass)
                    ? target.classList.remove(activeclass)
                    : target.classList.add(activeclass);
                bodyScroll && document.body.classList.toggle('overflow-hidden');
            });
        });
    };

    /*! Dropdown
    // add 'clickable' class with dropdown-menu to stop auto close
    */
    NioApp.Dropdown = function (el) {
        const elm = document.querySelectorAll('.dropdown-toggle');
        elm.forEach(function (item) {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                const offset = item.dataset.offset
                    ? [
                          parseInt(item.dataset.offset.split(',')[0]),
                          parseInt(item.dataset.offset.split(',')[1]),
                      ]
                    : [0, 0];
                const rtlOffset = item.dataset.rtlOffset
                    ? [
                          parseInt(item.dataset.rtlOffset.split(',')[0]),
                          parseInt(item.dataset.rtlOffset.split(',')[1]),
                      ]
                    : offset;
                let placement = item.dataset.placement
                    ? item.dataset.placement
                    : 'bottom-start';
                let rtlPlacement = item.dataset.rtlPlacement
                    ? item.dataset.rtlPlacement
                    : 'bottom-end';

                var getNextSibling = function (elem, selector) {
                    var sibling = elem.nextElementSibling;

                    while (sibling) {
                        if (sibling.matches(selector)) return sibling;
                        sibling = sibling.nextElementSibling;
                    }
                };
                Popper.createPopper(
                    item,
                    getNextSibling(item, '.dropdown-menu'),
                    {
                        placement: NioApp.State.isRTL
                            ? rtlPlacement
                            : placement,
                        // strategy: 'fixed',
                        modifiers: [
                            {
                                name: 'offset',
                                options: {
                                    offset: NioApp.State.isRTL
                                        ? rtlOffset
                                        : offset,
                                },
                            },
                            {
                                name: 'preventOverflow',
                                options: {
                                    padding: 8,
                                    altAxis: true,
                                    boundary: '#pagecontent',
                                },
                            },
                        ],
                    },
                );
                item.classList.contains('show')
                    ? item.classList.remove('show')
                    : item.classList.add('show');
            });
            document.addEventListener('mouseup', function (e) {
                e.preventDefault();
                if (
                    item !== e.target &&
                    NioApp.getParents(e.target, undefined, 'clickable')
                        .length <= 0 &&
                    !e.target.classList.contains('clickable')
                ) {
                    item.classList.remove('show');
                }
            });
        });
    };

    /*! Accordion
    // add 'manual-close' class with accordion (main wrapper) to stop auto close
    */
    NioApp.Accordion = function (el) {
        const elm = document.querySelectorAll('.accordion-toggle');
        elm.forEach(function (item) {
            let parent = item.parentElement,
                accordion_body = item.nextElementSibling,
                accordion_root = parent.parentElement,
                accordion_items = accordion_root.children,
                speed = 400;

            //on load
            parent.classList.contains('active')
                ? (accordion_body.style.display = 'block')
                : (accordion_body.style.display = 'none');

            item.addEventListener('click', function (e) {
                e.preventDefault();
                Array.from(accordion_items).forEach((item) => {
                    if (
                        item !== parent &&
                        !accordion_root.classList.contains('manual-close')
                    ) {
                        NioApp.SlideUp(
                            item.querySelector('.accordion-body'),
                            speed,
                        );
                        item.classList.remove('active');
                    }
                });
                if (!parent.classList.contains('active')) {
                    parent.classList.add('active');
                    NioApp.SlideDown(accordion_body, speed);
                } else {
                    NioApp.SlideUp(accordion_body, speed);
                    parent.classList.remove('active');
                }
            });
        });
    };

    /*! Modal */
    NioApp.Modal = function (el) {
        const elm = document.querySelectorAll('.modal-toggle');
        elm.forEach(function (item) {
            let dialog = document.querySelector(item.dataset.target),
                close = dialog?.querySelectorAll('.modal-close'),
                getAll = document.querySelectorAll('.modal');
            item.addEventListener('click', function (e) {
                dialog.classList.add('show');
                document.body.classList.add('overflow-hidden');
                getAll.forEach(function (getItem) {
                    getItem !== dialog && getItem.classList.remove('show');
                });
            });
            close?.forEach(function (item) {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    dialog.classList.remove('show');
                    document.body.classList.remove('overflow-hidden');
                });
            });
        });
    };

    /*! Popover */
    NioApp.Popover = function (el) {
        const elm = document.querySelectorAll('.popover-toggle');
        const class_top = `[&[data-popper-placement^='top']_.popover-arrow]:h-2 [&[data-popper-placement^='top']_.popover-arrow]:w-4 [&[data-popper-placement^='top']_.popover-arrow]:-bottom-2 [&[data-popper-placement^='top']_.popover-arrow]:left-1/2 [&[data-popper-placement^='top']_.popover-arrow]:-translate-x-1/2 [&[data-popper-placement^='top']_.popover-arrow]:before:border-t-gray-300 [&[data-popper-placement^='top']_.popover-arrow]:before:dark:border-t-gray-900 [&[data-popper-placement^='top']_.popover-arrow]:before:border-t-8 [&[data-popper-placement^='top']_.popover-arrow]:before:border-r-8 [&[data-popper-placement^='top']_.popover-arrow]:before:border-b-0 [&[data-popper-placement^='top']_.popover-arrow]:before:border-l-8 [&[data-popper-placement^='top']_.popover-arrow]:after:bottom-px [&[data-popper-placement^='top']_.popover-arrow]:after:left-0 [&[data-popper-placement^='top']_.popover-arrow]:after:border-t-white [&[data-popper-placement^='top']_.popover-arrow]:after:dark:border-t-gray-950 [&[data-popper-placement^='top']_.popover-arrow]:after:border-t-8 [&[data-popper-placement^='top']_.popover-arrow]:after:border-r-8 [&[data-popper-placement^='top']_.popover-arrow]:after:border-b-0 [&[data-popper-placement^='top']_.popover-arrow]:after:border-l-8`,
            class_right = `[&[data-popper-placement^='right']_.popover-arrow]:h-4 [&[data-popper-placement^='right']_.popover-arrow]:w-2 [&[data-popper-placement^='right']_.popover-arrow]:-left-2 [&[data-popper-placement^='right']_.popover-arrow]:top-1/2 [&[data-popper-placement^='right']_.popover-arrow]:-translate-y-1/2 [&[data-popper-placement^='right']_.popover-arrow]:before:border-r-gray-300 [&[data-popper-placement^='right']_.popover-arrow]:before:dark:border-r-gray-900 [&[data-popper-placement^='right']_.popover-arrow]:before:border-t-8 [&[data-popper-placement^='right']_.popover-arrow]:before:border-r-8 [&[data-popper-placement^='right']_.popover-arrow]:before:border-b-8 [&[data-popper-placement^='right']_.popover-arrow]:before:border-l-0 [&[data-popper-placement^='right']_.popover-arrow]:after:left-px [&[data-popper-placement^='right']_.popover-arrow]:after:top-0 [&[data-popper-placement^='right']_.popover-arrow]:after:border-r-white [&[data-popper-placement^='right']_.popover-arrow]:after:dark:border-r-gray-950 [&[data-popper-placement^='right']_.popover-arrow]:after:border-t-8 [&[data-popper-placement^='right']_.popover-arrow]:after:border-r-8 [&[data-popper-placement^='right']_.popover-arrow]:after:border-b-8 [&[data-popper-placement^='right']_.popover-arrow]:after:border-l-0`,
            class_bottom = `[&[data-popper-placement^='bottom']_.popover-arrow]:h-2 [&[data-popper-placement^='bottom']_.popover-arrow]:w-4 [&[data-popper-placement^='bottom']_.popover-arrow]:-top-2 [&[data-popper-placement^='bottom']_.popover-arrow]:left-1/2 [&[data-popper-placement^='bottom']_.popover-arrow]:-translate-x-1/2 [&[data-popper-placement^='bottom']_.popover-arrow]:before:border-b-gray-300 [&[data-popper-placement^='bottom']_.popover-arrow]:before:dark:border-b-gray-900 [&[data-popper-placement^='bottom']_.popover-arrow]:before:border-t-0 [&[data-popper-placement^='bottom']_.popover-arrow]:before:border-r-8 [&[data-popper-placement^='bottom']_.popover-arrow]:before:border-b-8 [&[data-popper-placement^='bottom']_.popover-arrow]:before:border-l-8 [&[data-popper-placement^='bottom']_.popover-arrow]:after:top-px [&[data-popper-placement^='bottom']_.popover-arrow]:after:left-0 [&[data-popper-placement^='bottom']_.popover-arrow]:after:border-b-white [&[data-popper-placement^='bottom']_.popover-arrow]:after:dark:border-b-gray-950 [&[data-popper-placement^='bottom']_.popover-arrow]:after:border-t-0 [&[data-popper-placement^='bottom']_.popover-arrow]:after:border-r-8 [&[data-popper-placement^='bottom']_.popover-arrow]:after:border-b-8 [&[data-popper-placement^='bottom']_.popover-arrow]:after:border-l-8`,
            class_left = `[&[data-popper-placement^='left']_.popover-arrow]:h-4 [&[data-popper-placement^='left']_.popover-arrow]:w-2 [&[data-popper-placement^='left']_.popover-arrow]:-right-2 [&[data-popper-placement^='left']_.popover-arrow]:top-1/2 [&[data-popper-placement^='left']_.popover-arrow]:-translate-y-1/2 [&[data-popper-placement^='left']_.popover-arrow]:before:border-l-gray-300 [&[data-popper-placement^='left']_.popover-arrow]:before:dark:border-l-gray-900 [&[data-popper-placement^='left']_.popover-arrow]:before:border-t-8 [&[data-popper-placement^='left']_.popover-arrow]:before:border-r-0 [&[data-popper-placement^='left']_.popover-arrow]:before:border-b-8 [&[data-popper-placement^='left']_.popover-arrow]:before:border-l-8 [&[data-popper-placement^='left']_.popover-arrow]:after:right-px [&[data-popper-placement^='left']_.popover-arrow]:after:top-0 [&[data-popper-placement^='left']_.popover-arrow]:after:border-l-white [&[data-popper-placement^='left']_.popover-arrow]:after:dark:border-l-gray-950 [&[data-popper-placement^='left']_.popover-arrow]:after:border-t-8 [&[data-popper-placement^='left']_.popover-arrow]:after:border-r-0 [&[data-popper-placement^='left']_.popover-arrow]:after:border-b-8 [&[data-popper-placement^='left']_.popover-arrow]:after:border-l-8`;

        elm.forEach(function (item) {
            const id = 'id' + Math.random().toString(16).slice(2);
            item.setAttribute('data-target', id);
            const title = item.dataset.title ? item.dataset.title : false;
            const content = item.dataset.content
                ? item.dataset.content
                : 'placeholder';
            const markup = `<div tabindex="0" id="${id}" class="popover-content absolute w-screen max-w-[276px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow-md z-[1070] hidden [&.show]:block ${class_top} ${class_right} ${class_bottom} ${class_left}">
                <div class="popover-arrow absolute before:block before:h-0 before:w-0 before:border-transparent after:absolute after:block after:h-0 after:w-0 after:border-transparent"></div>
                ${title ? `<h3 class="px-3 py-2 border-b border-gray-300 dark:border-gray-900 bg-gray-100 dark:bg-gray-900 text-base leading-5 font-bold font-heading text-slate-700 dark:text-white rounded-t-[inherit]">${title}</h3>` : ''}
                <div class="px-3 py-2 text-sm leading-6">${content}</div>
            </div>`;
            document.body.insertAdjacentHTML('beforeend', markup);
            item.addEventListener('click', function (e) {
                e.preventDefault();
                const offset = item.dataset.offset
                    ? item.dataset.offset
                    : [0, 10];
                const placement = item.dataset.placement
                    ? item.dataset.placement
                    : 'right';
                const rtlPlacement = item.dataset.rtlPlacement
                    ? item.dataset.rtlPlacement
                    : placement;
                const popover = document.getElementById(item.dataset.target);
                popover.classList.contains('show')
                    ? popover.classList.remove('show')
                    : popover.classList.add('show');
                Popper.createPopper(item, popover, {
                    placement: NioApp.State.isRTL ? rtlPlacement : placement,
                    modifiers: [
                        {
                            name: 'offset',
                            options: {
                                offset: offset,
                            },
                        },
                        {
                            name: 'flip',
                            options: {
                                fallbackPlacements: ['top', 'bottom'],
                            },
                        },
                    ],
                });
            });
        });
    };

    /*! Tooltip */
    NioApp.Tooltip = function (el) {
        const elm = document.querySelectorAll('.tooltip-toggle');
        const class_top = `[&[data-popper-placement^='top']]:after:top-full [&[data-popper-placement^='top']]:after:left-1/2 [&[data-popper-placement^='top']]:after:-translate-x-1/2 [&[data-popper-placement^='top']]:after:border-t-gray-800 [&[data-popper-placement^='top']]:after:border-t-6 [&[data-popper-placement^='top']]:after:border-r-6 [&[data-popper-placement^='top']]:after:border-b-0 [&[data-popper-placement^='top']]:after:border-l-6`,
            class_right = `[&[data-popper-placement^='right']]:after:right-full [&[data-popper-placement^='right']]:after:top-1/2 [&[data-popper-placement^='right']]:after:-translate-y-1/2 [&[data-popper-placement^='right']]:after:border-r-gray-800 [&[data-popper-placement^='right']]:after:border-t-6 [&[data-popper-placement^='right']]:after:border-r-6 [&[data-popper-placement^='right']]:after:border-b-6 [&[data-popper-placement^='right']]:after:border-l-0`,
            class_bottom = `[&[data-popper-placement^='bottom']]:after:bottom-full [&[data-popper-placement^='bottom']]:after:left-1/2 [&[data-popper-placement^='bottom']]:after:-translate-x-1/2 [&[data-popper-placement^='bottom']]:after:border-b-gray-800 [&[data-popper-placement^='bottom']]:after:border-t-0 [&[data-popper-placement^='bottom']]:after:border-r-6 [&[data-popper-placement^='bottom']]:after:border-b-6 [&[data-popper-placement^='bottom']]:after:border-l-6`,
            class_left = `[&[data-popper-placement^='left']]:after:left-full [&[data-popper-placement^='left']]:after:top-1/2 [&[data-popper-placement^='left']]:after:-translate-y-1/2 [&[data-popper-placement^='left']]:after:border-l-gray-800 [&[data-popper-placement^='left']]:after:border-t-6 [&[data-popper-placement^='left']]:after:border-r-0 [&[data-popper-placement^='left']]:after:border-b-6 [&[data-popper-placement^='left']]:after:border-l-6`;
        elm.forEach(function (item) {
            const id = 'id' + Math.random().toString(16).slice(2);
            item.setAttribute('data-target', id);
            const title = item.dataset.title ? item.dataset.title : false;
            const markup = `<div tabindex="0" id="${id}" class="text-white bg-gray-800 text-xs px-3 py-1.5 rounded-sm z-[10000] max-w-[200px] w-max bock break-words font-normal after:absolute after:block after:h-0 after:w-0 after:border-transparent after:z-[10000] [&[data-popper-reference-hidden]]:opacity-0 ${class_top} ${class_right} ${class_bottom} ${class_left}" >
            ${title}
            </div>`;
            item.addEventListener('mouseenter', function (e) {
                e.preventDefault();

                const offset = item.dataset.offset
                    ? item.dataset.offset
                    : [0, 10];
                const placement = item.dataset.placement
                    ? item.dataset.placement
                    : 'right';
                const rtlPlacement = item.dataset.rtlPlacement
                    ? item.dataset.rtlPlacement
                    : placement;

                document.body.insertAdjacentHTML('beforeend', markup);
                const tooltip = document.getElementById(item.dataset.target);
                Popper.createPopper(item, tooltip, {
                    placement: NioApp.State.isRTL ? rtlPlacement : placement,
                    modifiers: [
                        {
                            name: 'offset',
                            options: {
                                offset: offset,
                            },
                        },
                        {
                            name: 'flip',
                            options: {
                                fallbackPlacements: ['top', 'bottom'],
                            },
                        },
                    ],
                });
            });
            item.addEventListener('mouseleave', function (e) {
                e.preventDefault();
                const tooltip = document.getElementById(item.dataset.target);
                tooltip.remove();
            });
        });
    };

    /*! Tab */
    NioApp.Tab = function (el) {
        const elm = document.querySelectorAll('.tab-toggle');
        elm.forEach(function (item) {
            let panel = document.querySelector(item.dataset.target),
                panel_root = panel.parentElement,
                panel_items = panel_root.children;

            item.addEventListener('click', function (e) {
                e.preventDefault();
                // tab toggle active
                let toggles = item
                    .closest('.tab-nav')
                    .querySelectorAll('.tab-toggle');
                Array.from(toggles).forEach((item) => {
                    item.classList.remove('active');
                });
                item.classList.add('active');

                //tab panel active
                Array.from(panel_items).forEach((item) => {
                    item.classList.remove('active');
                });
                panel.classList.add('active');
            });
        });
    };

    /*! TimePicker */
    NioApp.Custom.timePicker = function (selector, opt) {
        let options = {
            format: opt.format ? opt.format : 24,
            interval: opt.interval ? opt.interval : 30,
            start: opt.start ? opt.start : '00:00',
            end: opt.end ? opt.end : '23:59',
            placement: opt.placement ? opt.placement : 'bottom-start',
            class: {
                dropdown: 'nk-timepicker-dropdown',
                dropdownItem: 'nk-timepicker-time',
            },
        };

        let timeInterval = options.interval;
        let timeFormat = options.format;
        let timeStart = options.start;
        let timeEnd = options.end;
        let totalTime = NioApp.toMin(timeEnd) - NioApp.toMin(timeStart);
        let timeSlot = Math.floor(totalTime / timeInterval);
        let items = [];

        let startTime = NioApp.toMin(timeStart);

        for (let i = 0; i < timeSlot + 1; i++) {
            let currentTime = startTime;
            let timeString = function () {
                if (timeFormat == 12) {
                    return NioApp.to12(NioApp.toTime(currentTime));
                } else {
                    return NioApp.toTime(currentTime);
                }
            };
            items.push(`<li><button class="relative w-full px-5 py-1.5 flex items-center rounded-[inherit] text-xs leading-5 font-normal text-base-600 hover:text-primary-600 hover:bg-base-50 transition-all duration-[400ms] ${options.class.dropdownItem}" data-picker-text="${timeString()}" type="button">
                ${timeString()}
            </button></li>`);
            startTime = currentTime + timeInterval;
        }

        let itemsMarkups = items.join('');
        selector.classList.add('peer');
        selector.addEventListener('click', function (e) {
            e.preventDefault();
            selector.classList.contains('show')
                ? selector.classList.remove('show')
                : selector.classList.add('show');
            Popper.createPopper(selector, selector.nextElementSibling, {
                placement: options.placement,
            });
            selector.nextElementSibling.style.display = 'block';
        });

        document.addEventListener('mouseup', function (e) {
            e.preventDefault();
            if (selector !== e.target) {
                selector.classList.remove('show');
                selector.nextElementSibling.style.display = 'none';
            }
        });

        let id = selector.id ? selector.id : NioApp.randomId(8);

        if (!selector.id) {
            NioApp.attr(selector, 'id', id);
        }

        let dropdownTemplate = `
        <ul class="nk-timepicker-dropdown absolute min-w-[180px] border border-gray-300 dark:border-gray-900 bg-white dark:bg-gray-950 rounded-md shadow-md z-[1000] ${options.class.dropdown}" data-picker-id="${id}" style="max-height:320px;overflow:auto;display:none;">
            ${itemsMarkups}
        </ul>
        `;
        selector.insertAdjacentHTML('afterend', dropdownTemplate);

        let timeSelector = document.querySelectorAll(
            `.${options.class.dropdownItem}`,
        );
        timeSelector.forEach((item) => {
            item.addEventListener('click', function (e) {
                e.preventDefault();
                let itemtext = item.dataset.pickerText;
                let input = document.getElementById(
                    item.closest(`.${options.class.dropdown}`).dataset.pickerId,
                );
                input.value = itemtext;
                //set active slot
                let allItems = item
                    .closest(`.${options.class.dropdown}`)
                    .querySelectorAll(`.${options.class.dropdownItem}`);
                allItems.forEach((otherItem) => {
                    otherItem.classList.remove('active');
                });
                item.classList.add('active');
                selector.classList.remove('show');
            });
        });
    };

    /*! Number Spinner @v1.0 */
    NioApp.NumberSpinner = function (elm, opt) {
        var plus = document.querySelectorAll("[data-number='plus']");
        var minus = document.querySelectorAll("[data-number='minus']");
        var number_spinner = document.querySelectorAll('.number-spinner');

        plus.forEach(function (item, index, arr) {
            var parent = plus[index].parentNode;
            plus[index].addEventListener('click', function () {
                var child = plus[index].parentNode.children;
                child.forEach(function (item, index, arr) {
                    if (child[index].classList.contains('number-spinner')) {
                        var value =
                            !child[index].value == ''
                                ? parseInt(child[index].value)
                                : 0;
                        var step =
                            !child[index].step == ''
                                ? parseInt(child[index].step)
                                : 1;
                        var max =
                            !child[index].max == ''
                                ? parseInt(child[index].max)
                                : Infinity;
                        if (max + 1 > value + step) {
                            child[index].value = value + step;
                        } else {
                            child[index].value = value;
                        }
                    }
                });
            });
        });

        minus.forEach(function (item, index, arr) {
            var parent = minus[index].parentNode;
            minus[index].addEventListener('click', function () {
                var child = minus[index].parentNode.children;
                child.forEach(function (item, index, arr) {
                    if (child[index].classList.contains('number-spinner')) {
                        var value =
                            !child[index].value == ''
                                ? parseInt(child[index].value)
                                : 0;
                        var step =
                            !child[index].step == ''
                                ? parseInt(child[index].step)
                                : 1;
                        var min =
                            !child[index].min == ''
                                ? parseInt(child[index].min)
                                : 0;
                        if (min - 1 < value - step) {
                            child[index].value = value - step;
                        } else {
                            child[index].value = value;
                        }
                    }
                });
            });
        });
    };

    //Extend Object
    NioApp.extendObject = function (obj, ext) {
        Object.keys(ext).forEach(function (key) {
            obj[key] = ext[key];
        });
        return obj;
    };

    ///////////////////////////////
    // Initial by default
    /////////////////////////////
    NioApp.onResize(NioApp.StateUpdate);

    NioApp.init = function () {
        NioApp.ToggleClass();
        NioApp.Dropdown();
        NioApp.Accordion();
        NioApp.Modal();
        NioApp.Popover();
        NioApp.Tooltip();
        NioApp.Tab();
        NioApp.NumberSpinner();
    };

    NioApp.init();

    return NioApp;
})(NioApp);
