import './assets/css/app.css';

import { createApp } from 'vue';
import { createPinia } from 'pinia';
import { createPopper } from '@popperjs/core';

import slideUp from '@/utilities/slideUp';
import slideDown from '@/utilities/slideDown';

import { useThemeStore } from '@/stores/theme';

import App from './App.vue';
import router from './router';

const app = createApp(App);

app.use(createPinia());
app.use(router);

const theme = useThemeStore();

// custom accordion directive
app.directive('nk-accordion', {
    mounted(elem, binding) {
        let parent = elem.parentElement,
            accordion_body = elem.nextElementSibling,
            accordion_root = parent.parentElement,
            accordion_items = accordion_root.children,
            speed = 400;

        parent.classList.contains('active')
            ? (accordion_body.style.display = 'block')
            : (accordion_body.style.display = 'none');

        elem.addEventListener('click', function (e) {
            e.preventDefault();
            Array.from(accordion_items).forEach((item) => {
                if (
                    item !== parent &&
                    !accordion_root.classList.contains('manual-close')
                ) {
                    slideUp(item.querySelector('.accordion-body'), speed);
                    item.classList.remove('active');
                }
            });
            if (!parent.classList.contains('active')) {
                parent.classList.add('active');
                slideDown(accordion_body, speed);
            } else {
                slideUp(accordion_body, speed);
                parent.classList.remove('active');
            }
        });
    },
});

// custom tooltip directive
app.directive('nk-tooltip', {
    mounted(elem, binding) {
        const class_top = `[&[data-popper-placement^='top']]:after:top-full [&[data-popper-placement^='top']]:after:left-1/2 [&[data-popper-placement^='top']]:after:-translate-x-1/2 [&[data-popper-placement^='top']]:after:border-t-gray-800 [&[data-popper-placement^='top']]:after:border-t-6 [&[data-popper-placement^='top']]:after:border-r-6 [&[data-popper-placement^='top']]:after:border-b-0 [&[data-popper-placement^='top']]:after:border-l-6`,
            class_right = `[&[data-popper-placement^='right']]:after:right-full [&[data-popper-placement^='right']]:after:top-1/2 [&[data-popper-placement^='right']]:after:-translate-y-1/2 [&[data-popper-placement^='right']]:after:border-r-gray-800 [&[data-popper-placement^='right']]:after:border-t-6 [&[data-popper-placement^='right']]:after:border-r-6 [&[data-popper-placement^='right']]:after:border-b-6 [&[data-popper-placement^='right']]:after:border-l-0`,
            class_bottom = `[&[data-popper-placement^='bottom']]:after:bottom-full [&[data-popper-placement^='bottom']]:after:left-1/2 [&[data-popper-placement^='bottom']]:after:-translate-x-1/2 [&[data-popper-placement^='bottom']]:after:border-b-gray-800 [&[data-popper-placement^='bottom']]:after:border-t-0 [&[data-popper-placement^='bottom']]:after:border-r-6 [&[data-popper-placement^='bottom']]:after:border-b-6 [&[data-popper-placement^='bottom']]:after:border-l-6`,
            class_left = `[&[data-popper-placement^='left']]:after:left-full [&[data-popper-placement^='left']]:after:top-1/2 [&[data-popper-placement^='left']]:after:-translate-y-1/2 [&[data-popper-placement^='left']]:after:border-l-gray-800 [&[data-popper-placement^='left']]:after:border-t-6 [&[data-popper-placement^='left']]:after:border-r-0 [&[data-popper-placement^='left']]:after:border-b-6 [&[data-popper-placement^='left']]:after:border-l-6`;

        const id = 'id' + Math.random().toString(16).slice(2);
        elem.setAttribute('data-target', id);
        const markup = `<div tabindex="0" id="${id}" class="text-white bg-gray-800 text-xs px-3 py-1.5 rounded-sm z-[10000] max-w-[200px] w-max bock break-words font-normal after:absolute after:block after:h-0 after:w-0 after:border-transparent after:z-[10000] [&[data-popper-reference-hidden]]:opacity-0 ${class_top} ${class_right} ${class_bottom} ${class_left}" >
        ${binding.value.content}
        </div>`;
        elem.addEventListener('mouseenter', function (e) {
            e.preventDefault();

            const offset = binding.value.offset
                ? binding.value.offset
                : [0, 10];
            const placement = binding.value.placement
                ? binding.value.placement
                : 'right';
            const rtlPlacement = binding.value.rtlPlacement
                ? binding.value.rtlPlacement
                : placement;
            document.body.insertAdjacentHTML('beforeend', markup);
            const tooltip = document.getElementById(elem.dataset.target);
            createPopper(elem, tooltip, {
                placement: theme.direction === 'rtl' ? rtlPlacement : placement,
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
        elem.addEventListener('mouseleave', function (e) {
            e.preventDefault();
            const tooltip = document.getElementById(elem.dataset.target);
            tooltip.remove();
        });
    },
});

app.mount('#app');
