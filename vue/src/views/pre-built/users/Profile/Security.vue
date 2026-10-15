<script setup>
import { ref } from 'vue';
import {
    Card,
    CardBody,
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
                Security Settings
            </h5>
            <p class="text-slate-600 dark:text-slate-400">
                These settings are helps you keep your account secure.
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
    <Card>
        <CardBody
            class="border-b border-gray-300 last:border-b-0 dark:border-gray-900"
        >
            <div
                class="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap"
            >
                <div>
                    <h6
                        class="font-heading leading-tighter -tracking-snug mb-2 text-base font-bold text-slate-700 dark:text-white"
                    >
                        Save my Activity Logs
                    </h6>
                    <p class="text-sm text-slate-600">
                        You can save your all activity logs including unusual
                        activity detected.
                    </p>
                </div>
                <div>
                    <div class="flex">
                        <Switch id="checkUnusualActivity" checked />
                    </div>
                </div>
            </div>
        </CardBody>
        <CardBody
            class="border-b border-gray-300 last:border-b-0 dark:border-gray-900"
        >
            <div
                class="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap"
            >
                <div>
                    <h6
                        class="font-heading leading-tighter -tracking-snug mb-2 text-base font-bold text-slate-700 dark:text-white"
                    >
                        Change Password
                    </h6>
                    <p class="text-sm text-slate-600">
                        Set a unique password to protect your account.
                    </p>
                </div>
                <div>
                    <ul
                        class="flex flex-wrap items-center gap-x-6 gap-y-3 sm:flex-nowrap"
                    >
                        <li class="md:order-2">
                            <Button size="rg" variant="primary"
                                >Change Password</Button
                            >
                        </li>
                        <li>
                            <em class="text-xs whitespace-nowrap text-slate-400"
                                >Last changed:
                                <span class="text-slate-600 dark:text-slate-400"
                                    >Oct 2, 2019</span
                                ></em
                            >
                        </li>
                    </ul>
                </div>
            </div>
        </CardBody>
        <CardBody
            class="border-b border-gray-300 last:border-b-0 dark:border-gray-900"
        >
            <div
                class="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap"
            >
                <div>
                    <h6
                        class="font-heading leading-tighter -tracking-snug mb-2 text-base font-bold text-slate-700 dark:text-white"
                    >
                        2 Factor Auth
                    </h6>
                    <p class="text-sm text-slate-600">
                        Secure your account with 2FA security. When it is
                        activated you will need to enter not only your password,
                        but also a special code using app. You can receive this
                        code by in mobile app.
                    </p>
                </div>
                <div>
                    <Button size="rg" variant="primary">Disable</Button>
                </div>
            </div>
        </CardBody>
    </Card>
</template>
