<script setup>
import Layout from '@/layout/Main.vue';
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
    AccordionItem,
    Accordion,
} from '@/components';
</script>
<template>
    <Layout title="Accordions">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Accordions</BlockTitleLg>
                <BlockLeadText
                    >Custom directive / component for accordion.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Default Style</BlockTitle>
                    <BlockText
                        >Checkout our default styles for accordion
                        style.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <Accordion
                            class="rounded border border-gray-200 dark:border-gray-800"
                        >
                            <AccordionItem active>
                                <template #button>
                                    <h6
                                        class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white"
                                    >
                                        What is DashWind?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                            <AccordionItem>
                                <template #button>
                                    <h6
                                        class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white"
                                    >
                                        What are some of the benefits of
                                        receiving my bill electronically?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                            <AccordionItem>
                                <template #button>
                                    <h6
                                        class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white"
                                    >
                                        What is the relationship between
                                        DashWind and payment?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                            <AccordionItem>
                                <template #button>
                                    <h6
                                        class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-300 group-[.active]:dark:text-white"
                                    >
                                        What are the benefits of using DashWind?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                        </Accordion>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Accordion Style 2</BlockTitle>
                    <BlockText
                        >You can simply use tailwind classes to style your
                        accordion diffrent, like you can remove borders, change
                        colors.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <Accordion>
                            <AccordionItem active variant="s2">
                                <template #button>
                                    <h6
                                        class="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 text-base font-bold text-slate-600 dark:text-slate-300"
                                    >
                                        What is DashWind?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                            <AccordionItem variant="s2">
                                <template #button>
                                    <h6
                                        class="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 text-base font-bold text-slate-600 dark:text-slate-300"
                                    >
                                        What are some of the benefits of
                                        receiving my bill electronically?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                            <AccordionItem variant="s2">
                                <template #button>
                                    <h6
                                        class="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 text-base font-bold text-slate-600 dark:text-slate-300"
                                    >
                                        What is the relationship between
                                        DashWind and payment?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                        </Accordion>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Accordion Style 3</BlockTitle>
                    <BlockText
                        >You can simply use tailwind classes to style your
                        accordion diffrent, like you can remove borders, change
                        colors or maybe place those icons on a diffrent
                        place.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <Accordion>
                            <AccordionItem active variant="s3">
                                <template #button>
                                    <h6
                                        class="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 text-base font-bold text-slate-600 dark:text-slate-300"
                                    >
                                        What is DashWind?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                            <AccordionItem variant="s3">
                                <template #button>
                                    <h6
                                        class="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 text-base font-bold text-slate-600 dark:text-slate-300"
                                    >
                                        What are some of the benefits of
                                        receiving my bill electronically?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                            <AccordionItem variant="s3">
                                <template #button>
                                    <h6
                                        class="group-[.active]:text-primary-600 group-[.active]:dark:text-primary-600 text-base font-bold text-slate-600 dark:text-slate-300"
                                    >
                                        What is the relationship between
                                        DashWind and payment?
                                    </h6>
                                </template>
                                <template #content>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                        Duis aute irure dolor in reprehenderit
                                        in voluptate velit esse cillum dolore eu
                                        fugiat nulla pariatur. Excepteur sint
                                        occaecat cupidatat non proident, sunt in
                                        culpa qui officia deserunt mollit anim
                                        id est laborum.
                                    </p>
                                    <p
                                        class="mb-4 text-sm text-slate-500 last:mb-0"
                                    >
                                        Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna
                                        aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris
                                        nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </template>
                            </AccordionItem>
                        </Accordion>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
