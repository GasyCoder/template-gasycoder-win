<script setup>
import { ref } from 'vue'
import { Dialog, DialogPanel, TransitionRoot, TransitionChild, TabGroup, TabList, Tab, TabPanels, TabPanel } from '@headlessui/vue'
import { Button, ButtonZoom, FormGroup, FormLabel, Icon, Input, InputWrap, Select, SelectOption, Switch, DatePicker } from '@/components'

const isOpen = ref(false)
const pageAside = defineModel('pageAside')
</script>
<template>
    <div class="flex justify-between items-center pb-6 sm:pb-10 gap-x-6">
        <div class="relative">
            <h5 class="text-2xl font-heading mb-2 font-bold leading-tighter tracking-tight text-slate-700 dark:text-white">Personal Information</h5>
            <p class="text-slate-600 dark:text-slate-400">Basic info, like your name and address, that you use on Nio PlatForm</p>
        </div>
        <div class="lg:hidden">
            <ButtonZoom @click="()=>{ pageAside = true }" >
                <Icon class="text-xl" name="menu-alt-r" />
            </ButtonZoom>
        </div>
    </div>
    <div class="mb-8 last:mb-0">
        <div class="py-2 px-5 bg-gray-100 dark:bg-gray-900 rounded">
            <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Basics</h6>
        </div>
        <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" @click="() => isOpen = true">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Full Name</span>
                <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">Abu Bin Ishtiyak</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                    <Icon class="text-base rtl:-scale-x-100" name="forward-ios" />
                </span>
            </div>
        </div>
        <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" @click="() => isOpen = true">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Display Name</span>
                <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">Ishtiyak</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                    <Icon class="text-base rtl:-scale-x-100" name="forward-ios" />
                </span>
            </div>
        </div>
        <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Email</span>
                <span class="text-sm/6 text-slate-600 dark:text-slate-300 block md:w-1/2">info@softnio.com</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 text-slate-400 group-hover:text-slate-600">
                    <Icon class="text-base rtl:-scale-x-100" name="lock-alt" />
                </span>
            </div>
        </div>
        <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" @click="() => isOpen = true">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Phone Number</span>
                <span class="text-sm/6 text-slate-400 dark:text-slate-600 block md:w-1/2">Not add yet</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                    <Icon class="text-base rtl:-scale-x-100" name="forward-ios" />
                </span>
            </div>
        </div>
        <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" @click="() => isOpen = true">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Date of Birth</span>
                <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">29 Feb, 1986</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                    <Icon class="text-base rtl:-scale-x-100" name="forward-ios" />
                </span>
            </div>
        </div>
        <div class="modal-toggle group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800" @click="() => isOpen = true">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Address</span>
                <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">2337 Kildeer Drive,<br />Kentucky, Canada</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <span class="inline-flex items-center justify-center isolate relative h-8 w-8 px-1.5 before:content-[''] before:absolute before:-z-[1] before:h-5 before:w-5 group-hover:before:h-8 group-hover:before:w-8 before:rounded-full before:opacity-0 group-hover:before:opacity-100 before:transition-all before:duration-300 before:-translate-x-1/2  before:-translate-y-1/2 before:top-1/2 before:left-1/2 before:bg-gray-200 before:dark:bg-gray-900 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-white">
                    <Icon class="text-base rtl:-scale-x-100" name="forward-ios" />
                </span>
            </div>
        </div>
    </div>
    <div class="mb-8 last:mb-0">
        <div class="py-2 px-5 bg-gray-100 dark:bg-gray-900 rounded">
            <h6 class="text-slate-400 whitespace-nowrap uppercase font-bold text-xxs tracking-relaxed leading-tight">Preferences</h6>
        </div>
        <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Language</span>
                <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">English (United State)</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <a href="#link" @click="(e)=> e.preventDefault()" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700">Change Language</a>
            </div>
        </div>
        <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Date Format</span>
                <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">M d, YYYY</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <a href="#link" @click="(e)=> e.preventDefault()" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700">Change</a>
            </div>
        </div>
        <div class="group px-5 py-4 md:py-6 flex items-center border-b last:border-b-0 border-gray-200 dark:border-gray-800">
            <div class="md:flex md:items-center flex-grow">
                <span class="text-sm/6 text-slate-400 group-hover:text-slate-600 group-hover:dark:text-slate-300 transition-all duration-300 block md:w-1/2">Timezone</span>
                <span class="text-sm/6 text-slate-600 group-hover:text-slate-700 dark:text-white group-hover:dark:text-slate-200 transition-all duration-300 block md:w-1/2">Bangladesh (GMT +6)</span>
            </div>
            <div class="md:flex md:items-center flex-grow-0 ms-auto md:justify-end md:w-[200px] md:text-end">
                <a href="#link" @click="(e)=> e.preventDefault()" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-primary-600 hover:text-primary-700">Change</a>
            </div>
        </div>
    </div>

    <TransitionRoot appear :show="isOpen" as="template">
        <Dialog as="div" class="relative z-[5000]" @close="() => isOpen = false">
            <TransitionChild
                as="template"
                enter="ease-out duration-300"
                enterFrom="opacity-0"
                enterTo="opacity-100"
                leave="ease-in duration-200"
                leaveFrom="opacity-100"
                leaveTo="opacity-0"
            >
                <div class="fixed inset-0 bg-slate-700/50" ></div>
            </TransitionChild>

            <div class="fixed inset-0 overflow-y-auto">
                <div class="flex min-h-full items-center justify-center p-4 text-center">
                <TransitionChild
                    as="template"
                    enter="ease-out duration-300"
                    enterFrom="opacity-0 -translate-y-6"
                    enterTo="opacity-100 translate-y-0"
                    leave="ease-in duration-200"
                    leaveFrom="opacity-100 translate-y-0"
                    leaveTo="opacity-0 -translate-y-6"
                >
                    <DialogPanel class="relative bg-white dark:bg-gray-950 rounded-md w-full md:w-[720px] sm:w-[520px] mx-auto text-start">
                        <button @click="() => isOpen = false" class="modal-close *:pointer-events-none absolute top-4 end-4 text-slate-500 hover:text-slate-700 dark:text-white">
                            <Icon class="text-xl" name="cross" />
                        </button>
                        <div class="px-5 py-6 sm:p-15">
                            <TabGroup>
                                <h5 class="text-xl font-bold font-heading text-slate-700 dark:text-white">Update Profile</h5>
                                <TabList as="ul" class="tab-nav flex flex-wrap font-heading text-sm border-b border-gray-300 dark:border-gray-900">
                                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                                        <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600" data-target="#personal-info">Personal</Tab>
                                    </li>
                                    <li class="tab-item pe-5 md:pe-6 lg:pe-7 xl:pe-9 last:pe-0">
                                        <Tab class="tab-toggle inline-flex items-center text-sm font-bold py-4 relative -mb-px text-slate-600 dark:text-slate-400 after:absolute after:h-0.75 after:bg-primary-600 after:inset-x-0 after:bottom-0 after:opacity-0 ui-selected:after:opacity-100 ui-selected:text-primary-600" data-target="#personal-address">Address</Tab>
                                    </li>
                                </TabList>
                                <TabPanels class="tab-content mt-5">
                                    <TabPanel>
                                        <div class="grid grid-flow-dense grid-cols-12 gap-6">
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="FullName">Full Name</FormLabel>
                                                    <InputWrap>
                                                        <Input defaultValue="Abu Bin Ishtiyak" id="FullName" />
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="DisplayName">Display Name</FormLabel>
                                                    <InputWrap>
                                                        <Input defaultValue="Ishtiyak" id="DisplayName" />
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="PhoneNumber">Phone Number</FormLabel>
                                                    <InputWrap>
                                                        <Input defaultValue="+880" id="PhoneNumber" />
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="DateofBirth">Date of Birth</FormLabel>
                                                    <InputWrap>
                                                        <DatePicker id="DateofBirth" placeholder="dd/mm/yyyy" :startView="2" />
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12">
                                                <Switch id="checkDisplayNmae">Use full name to display</Switch>
                                            </div>
                                            <div class="col-span-12">
                                                <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-1.5">
                                                    <li>
                                                        <Button @click="() => isOpen = false" variant="primary" size="lg">Update Profile</Button>
                                                    </li>
                                                    <li>
                                                        <button @click="() => isOpen = false" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-slate-400 hover:text-slate-300">Cancel</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </TabPanel>
                                    <TabPanel>
                                        <div class="grid grid-flow-dense grid-cols-12 gap-6">
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="AddressLine1">Address Line 1</FormLabel>
                                                    <InputWrap>
                                                        <Input defaultValue="2337 Kildeer Drive" id="AddressLine1" />
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="AddressLine2">Address Line 2</FormLabel>
                                                    <InputWrap>
                                                        <Input id="AddressLine2" />
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="State">State</FormLabel>
                                                    <InputWrap>
                                                        <Input defaultValue="Kentucky" id="State" />
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12 md:col-span-6">
                                                <FormGroup>
                                                    <FormLabel class="mb-2" for="DateofBirth">Country</FormLabel>
                                                    <InputWrap>
                                                        <Select>
                                                            <SelectOption>Canada</SelectOption>
                                                            <SelectOption>United State</SelectOption>
                                                            <SelectOption>United Kindom</SelectOption>
                                                            <SelectOption>Australia</SelectOption>
                                                            <SelectOption>India</SelectOption>
                                                            <SelectOption>Bangladesh</SelectOption>
                                                        </Select>
                                                    </InputWrap>
                                                </FormGroup>
                                            </div>
                                            <div class="col-span-12">
                                                <ul class="flex items-center flex-wrap sm:flex-nowrap gap-x-6 gap-y-1.5">
                                                    <li>
                                                        <Button @click="() => isOpen = false" variant="primary" size="lg">Update Address</Button>
                                                    </li>
                                                    <li>
                                                        <button @click="() => isOpen = false" class="inline-flex text-sm leading-none whitespace-nowrap transition-all duration-300 font-medium font-body text-slate-400 hover:text-slate-300">Cancel</button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </TabPanel>
                                </TabPanels>
                            </TabGroup>
                        </div>
                    </DialogPanel>
                </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>
