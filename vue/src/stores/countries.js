import { defineStore } from 'pinia';

export const useCountryStore = defineStore('Countries', () => {
    const data = [
        {
            flag: '/images/flags/arg.png',
            name: 'Argentina',
        },
        {
            flag: '/images/flags/aus.png',
            name: 'Australia',
        },
        {
            flag: '/images/flags/bangladesh.png',
            name: 'Bangladesh',
        },
        {
            flag: '/images/flags/canada.png',
            name: 'Canada',
            language: 'English',
        },
        {
            flag: '/images/flags/china.png',
            name: 'Centrafricaine',
        },
        {
            flag: '/images/flags/china.png',
            name: 'China',
        },
        {
            flag: '/images/flags/french.png',
            name: 'France',
        },
        {
            flag: '/images/flags/germany.png',
            name: 'Germany',
        },
        {
            flag: '/images/flags/iran.png',
            name: 'Iran',
        },
        {
            flag: '/images/flags/italy.png',
            name: 'Italy',
        },
        {
            flag: '/images/flags/mexico.png',
            name: 'México',
        },
        {
            flag: '/images/flags/philipine.png',
            name: 'Philippines',
        },
        {
            flag: '/images/flags/portugal.png',
            name: 'Portugal',
        },
        {
            flag: '/images/flags/s-africa.png',
            name: 'South Africa',
        },
        {
            flag: '/images/flags/spanish.png',
            name: 'Spain',
        },
        {
            flag: '/images/flags/switzerland.png',
            name: 'Switzerland',
        },
        {
            flag: '/images/flags/uk.png',
            name: 'United Kingdom',
        },
        {
            flag: '/images/flags/english.png',
            name: 'United State',
        },
    ];

    return { data };
});
