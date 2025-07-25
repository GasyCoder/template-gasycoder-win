<script setup>
import { ref } from 'vue'
import { Card, CardBody, Button, ButtonZoom, Avatar, FormGroup, FormLabel, Icon, Input, InputWrap, Select, SelectOption, Switch, DatePicker } from '@/components'

const pageAside = defineModel('pageAside')
</script>
<template>
<div class="flex justify-between items-center pb-4 gap-x-6">
    <div class="relative">
        <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Connected with Social Account</h5>
        <p class="text-slate-600 dark:text-slate-400">You can connect with your social account such as facebook, google etc to make easier to login into account.</p>
    </div>
    <div class="lg:hidden">
        <ButtonZoom  @click="()=>{ pageAside = true }">
            <Icon class="text-xl" name="menu-alt-r" />
        </ButtonZoom>
    </div>
</div>
<h6 class="text-sm font-heading font-bold text-slate-700 dark:text-white mb-4">Connect to Facebook</h6>
<Card>
    <CardBody>
        <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
            <div class="flex items-center gap-4 sm:max-w-lg">
                <Avatar rounded class="text-white bg-[#3b5998] h-11 w-11" >
                    <Icon class="text-2xl"  name="facebook-f" />
                </Avatar>
                <div>
                    <p class="text-slate-600 dark:text-slate-400">You have successfully connected with your facebook account, you can easily log in using your account too.</p>
                </div>
            </div>
            <div>
                <Button size="lg" variant="red">Revoke Access</Button>
            </div>
        </div>
    </CardBody>
</Card>
<h6 class="text-sm font-heading font-bold text-slate-700 dark:text-white mb-4 mt-8">Connect to Google</h6>
<Card>
    <CardBody>
        <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
            <div class="flex items-center gap-4 sm:max-w-lg">
                <Avatar rounded class="text-white bg-[#de5246] h-11 w-11" >
                    <Icon class="text-2xl"  name="google" />
                </Avatar>
                <div>
                    <p class="text-slate-600 dark:text-slate-400">You can connect with your google account. <em class="block text-slate-400">Not connected yet</em></p>
                </div>
            </div>
            <div>
                <Button size="lg" variant="primary-pale">Connect</Button>
            </div>
        </div>
    </CardBody>
</Card>
<div class="mt-10">
    <h6 class="text-base font-heading font-bold">Import Contacts <a href="#link" @click="(e)=> e.preventDefault()" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700 ms-auto">Import from Google</a></h6>
    <p class="text-sm text-slate-600 dark:text-slate-400">You have not imported contacts from your mobile phone.</p>
</div>
</template>
