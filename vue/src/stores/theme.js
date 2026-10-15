import { ref } from 'vue';
import { defineStore } from 'pinia';
import { useStorage } from '@vueuse/core';

export const useThemeStore = defineStore('theme', () => {
    const mode = useStorage('DashwindVue:mode', ref('light'));
    const sidebar = useStorage('DashwindVue:sidebar', ref('dark'));
    const direction = useStorage('DashwindVue:direction', ref('ltr'));

    const updateSidebar = () => {
        sidebar.value = sidebar.value === 'light' ? 'dark' : 'light';
    };

    const updateMode = () => {
        mode.value = mode.value === 'light' ? 'dark' : 'light';
    };

    const updateDirection = () => {
        direction.value = direction.value === 'ltr' ? 'rtl' : 'ltr';
    };

    return {
        mode,
        direction,
        updateMode,
        updateDirection,
        sidebar,
        updateSidebar,
    };
});
