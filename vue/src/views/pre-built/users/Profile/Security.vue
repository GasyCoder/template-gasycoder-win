<script setup>
import { ref } from 'vue'
import { Card, CardBody, Button, ButtonZoom, FormGroup, FormLabel, Icon, Input, InputWrap, Select, SelectOption, Switch, DatePicker } from '@/components'

const pageAside = defineModel('pageAside')
</script>
<template>
  <div class="flex justify-between items-center pb-6 sm:pb-10 gap-x-6">
            <div class="relative">
                <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Security Settings</h5>
                <p class="text-slate-600 dark:text-slate-400">These settings are helps you keep your account secure.</p>
            </div>
            <div class="lg:hidden">
                <ButtonZoom @click="()=>{ pageAside = true }">
                    <Icon class="text-xl" name="menu-alt-r" />
                </ButtonZoom>
            </div>
        </div>
        <Card>
            <CardBody class="border-b last:border-b-0 border-gray-300 dark:border-gray-900">
                <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                    <div>
                        <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">Save my Activity Logs</h6>
                        <p class="text-slate-600 text-sm">You can save your all activity logs including unusual activity detected.</p>
                    </div>
                    <div>
                        <div class="flex">
                            <Switch id="checkUnusualActivity" checked />
                        </div>
                    </div>
                </div>
            </CardBody>
            <CardBody class="border-b last:border-b-0 border-gray-300 dark:border-gray-900">
                <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                    <div>
                        <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">Change Password</h6>
                        <p class="text-slate-600 text-sm">Set a unique password to protect your account.</p>
                    </div>
                    <div>
                        <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-3">
                            <li class="md:order-2">
                                <Button size="rg" variant="primary">Change Password</Button>
                            </li>
                            <li>
                                <em class="text-xs text-slate-400 whitespace-nowrap">Last changed: <span class="text-slate-600 dark:text-slate-400">Oct 2, 2019</span></em>
                            </li>
                        </ul>
                    </div>
                </div>
            </CardBody>
            <CardBody class="border-b last:border-b-0 border-gray-300 dark:border-gray-900">
                <div class="flex items-center justify-between flex-wrap md:flex-nowrap gap-4">
                    <div>
                        <h6 class="text-base font-heading font-bold leading-tighter -tracking-snug text-slate-700 dark:text-white mb-2">2 Factor Auth</h6>
                        <p class="text-slate-600 text-sm">Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app.</p>
                    </div>
                    <div>
                        <Button size="rg" variant="primary">Disable</Button>
                    </div>
                </div>
            </CardBody>
        </Card>
</template>
