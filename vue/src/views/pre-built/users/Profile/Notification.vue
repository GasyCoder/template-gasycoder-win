<script setup>
import { ref } from 'vue';
import {
    Card,
    Button,
    ButtonZoom,
    FormGroup,
    FormLabel,
    Icon,
    Input,
    InputWrap,
    Select,
    SelectOption,
    Switch,
    DatePicker,
} from '@/components';

const pageAside = defineModel('pageAside');
</script>
<template>
    <div class="flex items-center justify-between gap-x-6 pb-6 sm:pb-10">
        <div class="relative">
            <h5
                class="font-heading leading-tighter mb-2 text-2xl font-bold tracking-tight text-slate-700 dark:text-white"
            >
                Notification Settings
            </h5>
            <p class="text-slate-600 dark:text-slate-400">
                You will get only notification what have enabled.
            </p>
        </div>
        <div class="lg:hidden">
            <ButtonZoom
                @click="
                    () => {
                        pageAside = true;
                    }
                "
            >
                <Icon class="text-xl" name="menu-alt-r" />
            </ButtonZoom>
        </div>
    </div>
    <div class="pb-4">
        <h6
            class="font-heading leading-tighter -tracking-snug mb-2 text-base font-bold text-slate-700 dark:text-white"
        >
            Security Alerts
        </h6>
        <p class="text-sm text-slate-600">
            You will get only those email notification what you want.
        </p>
    </div>
    <ul class="flex flex-col gap-4">
        <li class="flex">
            <Switch type="checkbox" id="checkUnusualActivity" defaultChecked>
                Email me whenever encounter unusual activity
            </Switch>
        </li>
        <li class="flex">
            <Switch type="checkbox" id="checkNewSignIn">
                Email me if new browser is used to sign in
            </Switch>
        </li>
    </ul>
    <div class="pt-6 pb-4 sm:pt-10">
        <h6
            class="font-heading leading-tighter -tracking-snug mb-2 text-base font-bold text-slate-700 dark:text-white"
        >
            News
        </h6>
        <p class="text-sm text-slate-600">
            You will get only those email notification what you want.
        </p>
    </div>
    <ul class="flex flex-col gap-4">
        <li class="flex">
            <Switch type="checkbox" id="notifyLatestNews" defaultChecked>
                Notify me by email about sales and latest news
            </Switch>
        </li>
        <li class="flex">
            <Switch type="checkbox" id="notifyFeatureUpdate">
                Email me about new features and updates
            </Switch>
        </li>
        <li class="flex">
            <Switch type="checkbox" id="notifyAccountTips" defaultChecked>
                Email me about tips on using account
            </Switch>
        </li>
    </ul>
</template>
