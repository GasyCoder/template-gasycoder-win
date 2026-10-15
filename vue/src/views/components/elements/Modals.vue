<script setup>
import { ref } from 'vue';
import {
    Dialog,
    DialogPanel,
    TransitionRoot,
    TransitionChild,
    TabGroup,
    TabList,
    Tab,
    TabPanels,
    TabPanel,
} from '@headlessui/vue';
import {
    Card,
    CardBody,
    Block,
    BlockHead,
    BlockTitle,
    BlockTitleLg,
    BlockText,
    BlockBack,
    BlockPageHead,
    BlockLeadText,
    Button,
    Icon,
    Form,
    FormLabel,
    FormGroup,
    Input,
    InputWrap,
    Switch,
    CheckBox,
    DatePicker,
    Select,
    SelectOption,
} from '@/components';
import Layout from '@/layout/Main.vue';

let isDefaultModal = ref(false);
let isSmallModal = ref(false);
let isLargeModal = ref(false);
let isTopModal = ref(false);
let isBottomModal = ref(false);
let isZoomModal = ref(false);
let isFormModal = ref(false);
let isTabsModal = ref(false);
let isSuccessModal = ref(false);
let isDangerModal = ref(false);
</script>
<template>
    <Layout title="Modals">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Modals</BlockTitleLg>
                <BlockLeadText
                    >Here we are utilizing
                    <a
                        target="_blank"
                        class="text-primary-600 hover:text-primary-800"
                        href="https://headlessui.com/v1/vue/dialog"
                        >HeadlessUI Dialog</a
                    >
                    component.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Base Examples</BlockTitle>
                    <BlockText>
                        Following are basic example of modals, just toggle a
                        working modal demo by clicking the buttons below.
                    </BlockText>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-wrap gap-5">
                            <Button
                                @click="() => (isDefaultModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="primary"
                                ><span>Modal Default</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isDefaultModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isDefaultModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-4 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="mx-auto w-full rounded-md bg-white text-start sm:w-[520px] dark:bg-gray-950"
                                                >
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                                                    >
                                                        <h5
                                                            class="-tracking-snug font-sans text-xl font-bold text-slate-700 dark:text-white"
                                                        >
                                                            Modal Title
                                                        </h5>
                                                        <button
                                                            class="text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                            @click="
                                                                () =>
                                                                    (isDefaultModal = false)
                                                            "
                                                        >
                                                            <Icon
                                                                class="text-2xl"
                                                                name="cross"
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="px-5 py-5 sm:px-6 sm:py-6"
                                                    >
                                                        <p>
                                                            Lorem ipsum dolor
                                                            sit amet consectetur
                                                            adipisicing elit.
                                                            Voluptatem similique
                                                            earum necessitatibus
                                                            nesciunt! Quia id
                                                            expedita asperiores
                                                            voluptatem odit quis
                                                            fugit sapiente
                                                            assumenda sunt
                                                            voluptatibus atque
                                                            facere autem, omnis
                                                            explicabo.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-200 px-5 py-4 text-end sm:px-6"
                                                    >
                                                        <span
                                                            class="text-sm text-slate-400"
                                                            >Modal Footer
                                                            Text</span
                                                        >
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>

                            <Button
                                @click="() => (isSmallModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="primary"
                                ><span>Modal Small</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isSmallModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isSmallModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-4 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="mx-auto w-full rounded-md bg-white text-start sm:w-[360px] dark:bg-gray-950"
                                                >
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                                                    >
                                                        <h5
                                                            class="-tracking-snug font-sans text-xl font-bold text-slate-700 dark:text-white"
                                                        >
                                                            Modal Title
                                                        </h5>
                                                        <button
                                                            class="text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                            @click="
                                                                () =>
                                                                    (isSmallModal = false)
                                                            "
                                                        >
                                                            <Icon
                                                                class="text-2xl"
                                                                name="cross"
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="px-5 py-5 sm:px-6 sm:py-6"
                                                    >
                                                        <p>
                                                            Lorem ipsum dolor
                                                            sit amet consectetur
                                                            adipisicing elit.
                                                            Voluptatem similique
                                                            earum necessitatibus
                                                            nesciunt! Quia id
                                                            expedita asperiores
                                                            voluptatem odit quis
                                                            fugit sapiente
                                                            assumenda sunt
                                                            voluptatibus atque
                                                            facere autem, omnis
                                                            explicabo.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-200 px-5 py-4 text-end sm:px-6"
                                                    >
                                                        <span
                                                            class="text-sm text-slate-400"
                                                            >Modal Footer
                                                            Text</span
                                                        >
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>

                            <Button
                                @click="() => (isLargeModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="primary"
                                ><span>Modal Large</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isLargeModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isLargeModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-4 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="relative mx-auto w-full rounded-md bg-white text-start sm:w-[520px] md:w-[720px] dark:bg-gray-950"
                                                >
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                                                    >
                                                        <h5
                                                            class="-tracking-snug font-sans text-xl font-bold text-slate-700 dark:text-white"
                                                        >
                                                            Modal Title
                                                        </h5>
                                                        <button
                                                            class="text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                            @click="
                                                                () =>
                                                                    (isLargeModal = false)
                                                            "
                                                        >
                                                            <Icon
                                                                class="text-2xl"
                                                                name="cross"
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="px-5 py-5 sm:px-6 sm:py-6"
                                                    >
                                                        <p>
                                                            Lorem ipsum dolor
                                                            sit amet consectetur
                                                            adipisicing elit.
                                                            Voluptatem similique
                                                            earum necessitatibus
                                                            nesciunt! Quia id
                                                            expedita asperiores
                                                            voluptatem odit quis
                                                            fugit sapiente
                                                            assumenda sunt
                                                            voluptatibus atque
                                                            facere autem, omnis
                                                            explicabo.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-200 px-5 py-4 text-end sm:px-6"
                                                    >
                                                        <span
                                                            class="text-sm text-slate-400"
                                                            >Modal Footer
                                                            Text</span
                                                        >
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>

                            <Button
                                @click="() => (isTopModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="primary"
                                ><span>Modal Top</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isTopModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isTopModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-start justify-center p-5 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="mx-auto w-full rounded-md bg-white text-start sm:w-[520px] dark:bg-gray-950"
                                                >
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                                                    >
                                                        <h5
                                                            class="-tracking-snug font-sans text-xl font-bold text-slate-700 dark:text-white"
                                                        >
                                                            Modal Title
                                                        </h5>
                                                        <button
                                                            class="text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                            @click="
                                                                () =>
                                                                    (isTopModal = false)
                                                            "
                                                        >
                                                            <Icon
                                                                class="text-2xl"
                                                                name="cross"
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="px-5 py-5 sm:px-6 sm:py-6"
                                                    >
                                                        <p>
                                                            Lorem ipsum dolor
                                                            sit amet consectetur
                                                            adipisicing elit.
                                                            Voluptatem similique
                                                            earum necessitatibus
                                                            nesciunt! Quia id
                                                            expedita asperiores
                                                            voluptatem odit quis
                                                            fugit sapiente
                                                            assumenda sunt
                                                            voluptatibus atque
                                                            facere autem, omnis
                                                            explicabo.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-200 px-5 py-4 text-end sm:px-6"
                                                    >
                                                        <span
                                                            class="text-sm text-slate-400"
                                                            >Modal Footer
                                                            Text</span
                                                        >
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>

                            <Button
                                @click="() => (isBottomModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="primary"
                                ><span>Modal Bottom</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isBottomModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isBottomModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-end justify-center p-5 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="mx-auto w-full rounded-md bg-white text-start sm:w-[520px] dark:bg-gray-950"
                                                >
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                                                    >
                                                        <h5
                                                            class="-tracking-snug font-sans text-xl font-bold text-slate-700 dark:text-white"
                                                        >
                                                            Modal Title
                                                        </h5>
                                                        <button
                                                            class="text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                            @click="
                                                                () =>
                                                                    (isBottomModal = false)
                                                            "
                                                        >
                                                            <Icon
                                                                class="text-2xl"
                                                                name="cross"
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="px-5 py-5 sm:px-6 sm:py-6"
                                                    >
                                                        <p>
                                                            Lorem ipsum dolor
                                                            sit amet consectetur
                                                            adipisicing elit.
                                                            Voluptatem similique
                                                            earum necessitatibus
                                                            nesciunt! Quia id
                                                            expedita asperiores
                                                            voluptatem odit quis
                                                            fugit sapiente
                                                            assumenda sunt
                                                            voluptatibus atque
                                                            facere autem, omnis
                                                            explicabo.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-200 px-5 py-4 text-end sm:px-6"
                                                    >
                                                        <span
                                                            class="text-sm text-slate-400"
                                                            >Modal Footer
                                                            Text</span
                                                        >
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>

                            <Button
                                @click="() => (isZoomModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="primary"
                                ><span>Modal Zoom</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isZoomModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isZoomModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-5 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 scale-95"
                                                enterTo="opacity-100 scale-100"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 scale-100"
                                                leaveTo="opacity-0 scale-95"
                                            >
                                                <DialogPanel
                                                    class="mx-auto w-full rounded-md bg-white text-start sm:w-[520px] dark:bg-gray-950"
                                                >
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                                                    >
                                                        <h5
                                                            class="-tracking-snug font-sans text-xl font-bold text-slate-700 dark:text-white"
                                                        >
                                                            Modal Title
                                                        </h5>
                                                        <button
                                                            class="text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                            @click="
                                                                () =>
                                                                    (isZoomModal = false)
                                                            "
                                                        >
                                                            <Icon
                                                                class="text-2xl"
                                                                name="cross"
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="px-5 py-5 sm:px-6 sm:py-6"
                                                    >
                                                        <p>
                                                            Lorem ipsum dolor
                                                            sit amet consectetur
                                                            adipisicing elit.
                                                            Voluptatem similique
                                                            earum necessitatibus
                                                            nesciunt! Quia id
                                                            expedita asperiores
                                                            voluptatem odit quis
                                                            fugit sapiente
                                                            assumenda sunt
                                                            voluptatibus atque
                                                            facere autem, omnis
                                                            explicabo.
                                                        </p>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-200 px-5 py-4 text-end sm:px-6"
                                                    >
                                                        <span
                                                            class="text-sm text-slate-400"
                                                            >Modal Footer
                                                            Text</span
                                                        >
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Use Case Modal</BlockTitle>
                    <BlockText
                        >Some use-case example of modals that helps in develop
                        your projects.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-wrap gap-5">
                            <Button
                                @click="() => (isFormModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="primary"
                                ><span>Modal With Form</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isFormModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isFormModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-4 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="mx-auto w-full rounded-md bg-white text-start sm:w-[520px] dark:bg-gray-950"
                                                >
                                                    <div
                                                        class="flex flex-shrink-0 items-center justify-between rounded-t-[inherit] border-b border-gray-200 px-5 py-4 sm:px-6 dark:border-gray-800"
                                                    >
                                                        <h5
                                                            class="-tracking-snug font-sans text-xl font-bold text-slate-700 dark:text-white"
                                                        >
                                                            Customer Info
                                                        </h5>
                                                        <button
                                                            class="text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                            @click="
                                                                () =>
                                                                    (isFormModal = false)
                                                            "
                                                        >
                                                            <Icon
                                                                class="text-2xl"
                                                                name="cross"
                                                            />
                                                        </button>
                                                    </div>
                                                    <div
                                                        class="px-5 py-5 sm:px-6 sm:py-6"
                                                    >
                                                        <Form>
                                                            <FormGroup>
                                                                <FormLabel
                                                                    class="mb-2"
                                                                    htmlFor="ciFullName"
                                                                    >Full
                                                                    Name</FormLabel
                                                                >
                                                                <InputWrap>
                                                                    <Input
                                                                        id="ciFullName"
                                                                    />
                                                                </InputWrap>
                                                            </FormGroup>
                                                            <FormGroup>
                                                                <FormLabel
                                                                    class="mb-2"
                                                                    htmlFor="ciEmailAddress"
                                                                    >Email
                                                                    address</FormLabel
                                                                >
                                                                <InputWrap>
                                                                    <Input
                                                                        id="ciEmailAddress"
                                                                    />
                                                                </InputWrap>
                                                            </FormGroup>
                                                            <FormGroup>
                                                                <FormLabel
                                                                    class="mb-2"
                                                                    htmlFor="ciPhoneNo"
                                                                    >Phone
                                                                    No</FormLabel
                                                                >
                                                                <InputWrap>
                                                                    <Input
                                                                        id="ciPhoneNo"
                                                                    />
                                                                </InputWrap>
                                                            </FormGroup>
                                                            <FormGroup>
                                                                <FormLabel
                                                                    class="mb-2"
                                                                    >Communication</FormLabel
                                                                >
                                                                <div
                                                                    class="flex flex-wrap gap-4 pt-2"
                                                                >
                                                                    <CheckBox
                                                                        id="ciEmail"
                                                                        size="sm"
                                                                        >Email</CheckBox
                                                                    >
                                                                    <CheckBox
                                                                        id="ciSMS"
                                                                        size="sm"
                                                                        >SMS</CheckBox
                                                                    >
                                                                    <CheckBox
                                                                        id="ciPhone"
                                                                        size="sm"
                                                                        >Phone</CheckBox
                                                                    >
                                                                </div>
                                                            </FormGroup>
                                                            <FormGroup>
                                                                <FormLabel
                                                                    class="mb-2"
                                                                    htmlFor="ciAmount"
                                                                    >Amount</FormLabel
                                                                >
                                                                <InputWrap>
                                                                    <Input
                                                                        id="ciAmount"
                                                                    />
                                                                </InputWrap>
                                                            </FormGroup>
                                                            <FormGroup>
                                                                <Button
                                                                    size="lg"
                                                                    variant="primary"
                                                                    >Save
                                                                    Informations</Button
                                                                >
                                                            </FormGroup>
                                                        </Form>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-200 px-5 py-4 text-end sm:px-6"
                                                    >
                                                        <span
                                                            class="text-sm text-slate-400"
                                                            >Modal Footer
                                                            Text</span
                                                        >
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>

                            <Button
                                @click="() => (isTabsModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="dark"
                                ><span>Modal With Form</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isTabsModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isTabsModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-4 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="relative mx-auto w-full rounded-md bg-white text-start sm:w-[520px] md:w-[720px] dark:bg-gray-950"
                                                >
                                                    <button
                                                        @click="
                                                            () =>
                                                                (isTabsModal = false)
                                                        "
                                                        class="modal-close absolute end-4 top-4 text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                    >
                                                        <Icon
                                                            class="text-xl"
                                                            name="cross"
                                                        />
                                                    </button>
                                                    <div
                                                        class="px-5 py-6 sm:p-15"
                                                    >
                                                        <TabGroup>
                                                            <h5
                                                                class="font-heading text-xl font-bold text-slate-700 dark:text-white"
                                                            >
                                                                Update Profile
                                                            </h5>
                                                            <TabList
                                                                as="ul"
                                                                class="tab-nav font-heading flex flex-wrap border-b border-gray-300 text-sm dark:border-gray-900"
                                                            >
                                                                <li
                                                                    class="tab-item pe-5 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9"
                                                                >
                                                                    <Tab
                                                                        class="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 dark:text-slate-400"
                                                                        data-target="#personal-info"
                                                                        >Personal</Tab
                                                                    >
                                                                </li>
                                                                <li
                                                                    class="tab-item pe-5 last:pe-0 md:pe-6 lg:pe-7 xl:pe-9"
                                                                >
                                                                    <Tab
                                                                        class="tab-toggle after:bg-primary-600 ui-selected:after:opacity-100 ui-selected:text-primary-600 relative -mb-px inline-flex items-center py-4 text-sm font-bold text-slate-600 after:absolute after:inset-x-0 after:bottom-0 after:h-0.75 after:opacity-0 dark:text-slate-400"
                                                                        data-target="#personal-address"
                                                                        >Address</Tab
                                                                    >
                                                                </li>
                                                            </TabList>
                                                            <TabPanels
                                                                class="tab-content mt-5"
                                                            >
                                                                <TabPanel>
                                                                    <div
                                                                        class="grid grid-flow-dense grid-cols-12 gap-6"
                                                                    >
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="FullName"
                                                                                    >Full
                                                                                    Name</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <Input
                                                                                        defaultValue="Abu Bin Ishtiyak"
                                                                                        id="FullName"
                                                                                    />
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="DisplayName"
                                                                                    >Display
                                                                                    Name</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <Input
                                                                                        defaultValue="Ishtiyak"
                                                                                        id="DisplayName"
                                                                                    />
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="PhoneNumber"
                                                                                    >Phone
                                                                                    Number</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <Input
                                                                                        defaultValue="+880"
                                                                                        id="PhoneNumber"
                                                                                    />
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="DateofBirth"
                                                                                    >Date
                                                                                    of
                                                                                    Birth</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <DatePicker
                                                                                        id="DateofBirth"
                                                                                        placeholder="dd/mm/yyyy"
                                                                                        startView="{2}"
                                                                                    />
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12"
                                                                        >
                                                                            <Switch
                                                                                id="checkDisplayNmae"
                                                                                >Use
                                                                                full
                                                                                name
                                                                                to
                                                                                display</Switch
                                                                            >
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12"
                                                                        >
                                                                            <ul
                                                                                class="flex flex-wrap items-center gap-x-6 gap-y-1.5 sm:flex-nowrap"
                                                                            >
                                                                                <li>
                                                                                    <Button
                                                                                        @click="
                                                                                            () =>
                                                                                                (isTabsModal = false)
                                                                                        "
                                                                                        variant="primary"
                                                                                        size="lg"
                                                                                        >Update
                                                                                        Profile</Button
                                                                                    >
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        @click="
                                                                                            () =>
                                                                                                (isTabsModal = false)
                                                                                        "
                                                                                        class="font-body inline-flex text-sm leading-none font-medium whitespace-nowrap text-slate-400 transition-all duration-300 hover:text-slate-300"
                                                                                    >
                                                                                        Cancel
                                                                                    </button>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </TabPanel>
                                                                <TabPanel>
                                                                    <div
                                                                        class="grid grid-flow-dense grid-cols-12 gap-6"
                                                                    >
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="AddressLine1"
                                                                                    >Address
                                                                                    Line
                                                                                    1</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <Input
                                                                                        defaultValue="2337 Kildeer Drive"
                                                                                        id="AddressLine1"
                                                                                    />
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="AddressLine2"
                                                                                    >Address
                                                                                    Line
                                                                                    2</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <Input
                                                                                        id="AddressLine2"
                                                                                    />
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="State"
                                                                                    >State</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <Input
                                                                                        defaultValue="Kentucky"
                                                                                        id="State"
                                                                                    />
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12 md:col-span-6"
                                                                        >
                                                                            <FormGroup>
                                                                                <FormLabel
                                                                                    class="mb-2"
                                                                                    for="DateofBirth"
                                                                                    >Country</FormLabel
                                                                                >
                                                                                <InputWrap>
                                                                                    <Select>
                                                                                        <SelectOption
                                                                                            >Canada</SelectOption
                                                                                        >
                                                                                        <SelectOption
                                                                                            >United
                                                                                            State</SelectOption
                                                                                        >
                                                                                        <SelectOption
                                                                                            >United
                                                                                            Kindom</SelectOption
                                                                                        >
                                                                                        <SelectOption
                                                                                            >Australia</SelectOption
                                                                                        >
                                                                                        <SelectOption
                                                                                            >India</SelectOption
                                                                                        >
                                                                                        <SelectOption
                                                                                            >Bangladesh</SelectOption
                                                                                        >
                                                                                    </Select>
                                                                                </InputWrap>
                                                                            </FormGroup>
                                                                        </div>
                                                                        <div
                                                                            class="col-span-12"
                                                                        >
                                                                            <ul
                                                                                class="flex flex-wrap items-center gap-x-6 gap-y-1.5 sm:flex-nowrap"
                                                                            >
                                                                                <li>
                                                                                    <Button
                                                                                        @click="
                                                                                            () =>
                                                                                                (isTabsModal = false)
                                                                                        "
                                                                                        variant="primary"
                                                                                        size="lg"
                                                                                        >Update
                                                                                        Address</Button
                                                                                    >
                                                                                </li>
                                                                                <li>
                                                                                    <button
                                                                                        @click="
                                                                                            () =>
                                                                                                (isTabsModal = false)
                                                                                        "
                                                                                        class="font-body inline-flex text-sm leading-none font-medium whitespace-nowrap text-slate-400 transition-all duration-300 hover:text-slate-300"
                                                                                    >
                                                                                        Cancel
                                                                                    </button>
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

                            <Button
                                @click="() => (isSuccessModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="green"
                                ><span>Modal Success</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isSuccessModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isSuccessModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-4 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="relative mx-auto w-full rounded-md bg-white text-start sm:w-[520px] dark:bg-gray-950"
                                                >
                                                    <button
                                                        @click="
                                                            () =>
                                                                (isSuccessModal = false)
                                                        "
                                                        class="modal-close absolute end-4 top-4 text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                    >
                                                        <Icon
                                                            class="text-xl"
                                                            name="cross"
                                                        />
                                                    </button>
                                                    <div
                                                        class="px-5 py-6 sm:p-15"
                                                    >
                                                        <div
                                                            class="text-center"
                                                        >
                                                            <div
                                                                class="relative mx-auto flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-full bg-green-600 font-normal text-white"
                                                            >
                                                                <em
                                                                    class="ni ni-check text-3xl/none"
                                                                ></em>
                                                            </div>
                                                            <h4
                                                                class="py-6 font-sans text-xl font-bold text-slate-700 lg:text-2xl dark:text-white"
                                                            >
                                                                Congratulations!
                                                            </h4>
                                                            <div class="mb-5">
                                                                <div
                                                                    class="-tracking-snug mb-2 text-base/tight text-slate-600 dark:text-slate-200"
                                                                >
                                                                    You’ve
                                                                    successfully
                                                                    bought
                                                                    <strong
                                                                        >0.5968</strong
                                                                    >
                                                                    BTC for
                                                                    <strong
                                                                        >200.00</strong
                                                                    >
                                                                    USD
                                                                </div>
                                                                <span
                                                                    class="text-xs text-slate-400"
                                                                    >Learn when
                                                                    you reciveve
                                                                    bitcoin in
                                                                    your wallet.
                                                                    <a
                                                                        class="text-primary-500 hover:text-primary-700"
                                                                        href="#"
                                                                    >
                                                                        Click
                                                                        here</a
                                                                    ></span
                                                                >
                                                            </div>
                                                            <Button
                                                                @click="
                                                                    () =>
                                                                        (isSuccessModal = false)
                                                                "
                                                                size="lg"
                                                                variant="primary"
                                                                class="min-w-[140px] justify-center"
                                                                >OK</Button
                                                            >
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="dark:bg-gray-1000 rounded-b-[inherit] bg-gray-100 px-5 py-5 text-center sm:px-6"
                                                    >
                                                        <p
                                                            class="text-sm text-slate-400"
                                                        >
                                                            Earn upto $25 for
                                                            each friend your
                                                            refer!
                                                            <a
                                                                class="text-primary-500 hover:text-primary-700"
                                                                href="#"
                                                                >Invite
                                                                friends</a
                                                            >
                                                        </p>
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>

                            <Button
                                @click="() => (isDangerModal = true)"
                                class="*:pointer-events-none"
                                size="rg"
                                variant="red"
                                ><span>Modal Danger</span></Button
                            >
                            <TransitionRoot
                                appear
                                :show="isDangerModal"
                                as="template"
                            >
                                <Dialog
                                    as="div"
                                    class="relative z-[5000]"
                                    @close="() => (isDangerModal = false)"
                                >
                                    <TransitionChild
                                        as="template"
                                        enter="ease-out duration-300"
                                        enterFrom="opacity-0"
                                        enterTo="opacity-100"
                                        leave="ease-in duration-200"
                                        leaveFrom="opacity-100"
                                        leaveTo="opacity-0"
                                    >
                                        <div
                                            class="fixed inset-0 bg-slate-700/50"
                                        ></div>
                                    </TransitionChild>

                                    <div class="fixed inset-0 overflow-y-auto">
                                        <div
                                            class="flex min-h-full items-center justify-center p-4 text-center"
                                        >
                                            <TransitionChild
                                                as="template"
                                                enter="ease-out duration-300"
                                                enterFrom="opacity-0 -translate-y-6"
                                                enterTo="opacity-100 translate-y-0"
                                                leave="ease-in duration-200"
                                                leaveFrom="opacity-100 translate-y-0"
                                                leaveTo="opacity-0 -translate-y-6"
                                            >
                                                <DialogPanel
                                                    class="relative mx-auto w-full rounded-md bg-white text-start sm:w-[520px] dark:bg-gray-950"
                                                >
                                                    <button
                                                        @click="
                                                            () =>
                                                                (isDangerModal = false)
                                                        "
                                                        class="modal-close absolute end-4 top-4 text-slate-500 *:pointer-events-none hover:text-slate-700 dark:text-white"
                                                    >
                                                        <Icon
                                                            class="text-xl"
                                                            name="cross"
                                                        />
                                                    </button>
                                                    <div
                                                        class="px-5 py-6 sm:p-15"
                                                    >
                                                        <div
                                                            class="text-center"
                                                        >
                                                            <div
                                                                class="relative mx-auto flex h-20 w-20 flex-shrink-0 items-center justify-center rounded-full bg-red-600 font-normal text-white"
                                                            >
                                                                <em
                                                                    class="ni ni-cross text-3xl/none"
                                                                ></em>
                                                            </div>
                                                            <h4
                                                                class="py-6 font-sans text-xl font-bold text-slate-700 lg:text-2xl dark:text-white"
                                                            >
                                                                Unable to
                                                                Process!
                                                            </h4>
                                                            <div class="mb-5">
                                                                <div
                                                                    class="-tracking-snug mb-2 text-base text-slate-600 dark:text-slate-200"
                                                                >
                                                                    We are
                                                                    sorry, we
                                                                    were unable
                                                                    to process
                                                                    your
                                                                    payment.
                                                                    Please try
                                                                    after
                                                                    sometimes.
                                                                </div>
                                                                <span
                                                                    class="text-sm text-slate-400"
                                                                    >If you need
                                                                    help please
                                                                    contact us
                                                                    at (855)
                                                                    485-7373.</span
                                                                >
                                                            </div>
                                                            <Button
                                                                @click="
                                                                    () =>
                                                                        (isDangerModal = false)
                                                                "
                                                                size="lg"
                                                                variant="light"
                                                                href="#"
                                                                class="min-w-[140px] justify-center"
                                                                >Return</Button
                                                            >
                                                        </div>
                                                    </div>
                                                </DialogPanel>
                                            </TransitionChild>
                                        </div>
                                    </div>
                                </Dialog>
                            </TransitionRoot>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
