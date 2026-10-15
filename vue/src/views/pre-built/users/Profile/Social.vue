<script setup>
import { ref } from 'vue';
import {
    Card,
    CardBody,
    Button,
    ButtonZoom,
    Avatar,
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
    <div class="flex items-center justify-between gap-x-6 pb-4">
        <div class="relative">
            <h5
                class="font-heading leading-tighter mb-2 text-2xl font-bold tracking-tight text-slate-700 dark:text-white"
            >
                Connected with Social Account
            </h5>
            <p class="text-slate-600 dark:text-slate-400">
                You can connect with your social account such as facebook,
                google etc to make easier to login into account.
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
    <h6
        class="font-heading mb-4 text-sm font-bold text-slate-700 dark:text-white"
    >
        Connect to Facebook
    </h6>
    <Card>
        <CardBody>
            <div
                class="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap"
            >
                <div class="flex items-center gap-4 sm:max-w-lg">
                    <Avatar rounded class="h-11 w-11 bg-[#3b5998] text-white">
                        <Icon class="text-2xl" name="facebook-f" />
                    </Avatar>
                    <div>
                        <p class="text-slate-600 dark:text-slate-400">
                            You have successfully connected with your facebook
                            account, you can easily log in using your account
                            too.
                        </p>
                    </div>
                </div>
                <div>
                    <Button size="lg" variant="red">Revoke Access</Button>
                </div>
            </div>
        </CardBody>
    </Card>
    <h6
        class="font-heading mt-8 mb-4 text-sm font-bold text-slate-700 dark:text-white"
    >
        Connect to Google
    </h6>
    <Card>
        <CardBody>
            <div
                class="flex flex-wrap items-center justify-between gap-4 md:flex-nowrap"
            >
                <div class="flex items-center gap-4 sm:max-w-lg">
                    <Avatar rounded class="h-11 w-11 bg-[#de5246] text-white">
                        <Icon class="text-2xl" name="google" />
                    </Avatar>
                    <div>
                        <p class="text-slate-600 dark:text-slate-400">
                            You can connect with your google account.
                            <em class="block text-slate-400"
                                >Not connected yet</em
                            >
                        </p>
                    </div>
                </div>
                <div>
                    <Button size="lg" variant="primary-pale">Connect</Button>
                </div>
            </div>
        </CardBody>
    </Card>
    <div class="mt-10">
        <h6 class="font-heading text-base font-bold">
            Import Contacts
            <a
                href="#link"
                @click="(e) => e.preventDefault()"
                class="font-body text-primary-600 hover:text-primary-700 ms-auto inline-flex text-sm leading-none font-medium whitespace-nowrap transition-all duration-300"
                >Import from Google</a
            >
        </h6>
        <p class="text-sm text-slate-600 dark:text-slate-400">
            You have not imported contacts from your mobile phone.
        </p>
    </div>
</template>
