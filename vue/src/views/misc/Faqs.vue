<script setup>
import Layout from '@/layout/Main.vue';
import { AccordionItem, Accordion } from '@/components';
</script>

<template>
    <Layout title="Faqs">
        <div class="relative mx-auto md:max-w-[720px]">
            <div class="mx-auto pb-6 text-center sm:max-w-[520px] sm:pb-10">
                <div class="relative mb-3 text-base font-normal text-slate-400">
                    FAQs
                </div>
                <h2
                    class="leading-tighter font-heading mb-4 text-3xl font-normal tracking-tight text-slate-700 lg:text-4xl dark:text-white"
                >
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-slate-600 dark:text-slate-400">
                    Got a question? Can't find the answer you're looking for?
                    Don't worry, drop us a line on our
                    <a
                        class="text-primary-500 hover:text-primary-600 transition-all duration-300"
                        href="#link"
                        @click="(e) => e.preventDefault()"
                        >contact page</a
                    >.
                </p>
            </div>

            <Accordion
                class="rounded border border-gray-200 bg-white dark:border-gray-800 dark:bg-gray-950"
            >
                <AccordionItem buttonClass="font-heading" active>
                    <template #button>
                        <h6
                            class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-400 group-[.active]:dark:text-white"
                        >
                            What is DashWind?
                        </h6>
                    </template>
                    <template #content>
                        <div class="entry text-slate-500 2xl:me-4">
                            <p>
                                An overview of <strong>DashWind</strong> – is
                                fully clean and premium designed admin template
                                which included beautiful hand-crafted components
                                &amp; elements.
                                <strong>DashWind</strong> completely focusing on
                                <strong>conceptual base apps</strong> or
                                dashboard, as it’s equipped with pre-built
                                screens as well.
                            </p>
                            <p>
                                <strong>DashWind</strong> is powerful
                                <strong>admin dashboard</strong> template that
                                especially build for developers and programmers.
                                <strong>DashWind</strong> comes with all kind of
                                components, necessary elements and pre-build
                                pages including
                                <strong>3 conceptual apps</strong> screen that
                                helps you to create your web apps or
                                application.
                            </p>
                        </div>
                    </template>
                </AccordionItem>
                <AccordionItem buttonClass="font-heading">
                    <template #button>
                        <h6
                            class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-400 group-[.active]:dark:text-white"
                        >
                            Do I need a Regular License or an Extended License?
                        </h6>
                    </template>
                    <template #content>
                        <div class="entry text-slate-500 2xl:me-4">
                            <p>
                                If your <strong>end product</strong> including
                                the item is going to be free to the end user
                                then a <strong>Regular License</strong> is what
                                you need. An
                                <strong>Extended License</strong> is required if
                                the <strong>end user</strong> must pay to use
                                the <strong>end product</strong>.
                            </p>
                            <p>
                                You may charge your client for your services to
                                create an end product, even under the
                                <strong>Regular License</strong>.
                                <strong
                                    >But you can’t use one of our Standard
                                    Licenses on multiple clients or
                                    jobs.</strong
                                >
                            </p>
                        </div>
                    </template>
                </AccordionItem>
                <AccordionItem buttonClass="font-heading">
                    <template #button>
                        <h6
                            class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-400 group-[.active]:dark:text-white"
                        >
                            What is Item Support?
                        </h6>
                    </template>
                    <template #content>
                        <div class="entry text-slate-500 2xl:me-4">
                            <p>
                                We always provide
                                <strong>free support for first 6 months</strong>
                                from the purchase date. If you’re about to
                                purchase the item, you’ll have the option to
                                purchase <strong>extended item support</strong>,
                                increasing the item support period up to a
                                <strong>maximum of 12 months</strong> from the
                                date of purchase.
                            </p>
                            <p>
                                Yes, you can! If you have less than
                                <strong>6 months remaining</strong> on a support
                                item you’re eligible to renew your support.
                            </p>
                            <h6>What else is included?</h6>
                            <ul
                                class="prose-li:relative prose-li:py-1 prose-li:ps-5 prose-li:before:absolute prose-li:before:start-0 prose-li:before:top-1 prose-li:before:font-nioicon prose-li:before:content-['\e9b9'] prose-li:before:text-xs prose-li:before:text-primary-600 prose-li:leading-6 prose-li:before:leading-6"
                            >
                                <li>
                                    Answering all questions including technical
                                    about the item
                                </li>
                                <li>
                                    Help with defects in the item or included
                                    third-party assets
                                </li>
                                <li>
                                    Item updates to ensure ongoing compatibility
                                    and to resolve security vulnerabilities
                                </li>
                                <li>
                                    Updates to ensure the item works as
                                    described and is protected against major
                                    security concerns
                                </li>
                                <li>Included version updates for all items</li>
                            </ul>
                            <h6>What's not included in item support?</h6>
                            <ul
                                class="prose-li:relative prose-li:py-1 prose-li:ps-5 prose-li:before:absolute prose-li:before:start-0 prose-li:before:top-1 prose-li:before:font-nioicon prose-li:before:content-['\ea02'] prose-li:before:text-xs prose-li:before:text-red-600 prose-li:leading-6 prose-li:before:leading-6"
                            >
                                <li>Installation of the item</li>
                                <li>
                                    Hosting, server environment, or software
                                </li>
                                <li>
                                    Help from authors of included third-party
                                    assets
                                </li>
                            </ul>
                        </div>
                    </template>
                </AccordionItem>
                <AccordionItem buttonClass="font-heading">
                    <template #button>
                        <h6
                            class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-400 group-[.active]:dark:text-white"
                        >
                            How to download your Item
                        </h6>
                    </template>
                    <template #content>
                        <div class="entry text-slate-500 2xl:me-4">
                            <p>
                                Item should be downloaded
                                <strong>immediately</strong> after
                                <strong>purchasing</strong>. You will get email
                                with <strong>download link</strong> from Envato
                                once you paid.
                            </p>
                            <h6>Also you can download your item:</h6>
                            <ul
                                class="prose-li:relative prose-li:py-1 prose-li:ps-5 prose-li:before:absolute prose-li:before:start-0 prose-li:before:top-1 prose-li:before:font-nioicon prose-li:before:content-['\e980'] prose-li:before:text-xs prose-li:before:text-slate-600 prose-li:leading-6 prose-li:before:leading-6"
                            >
                                <li>
                                    Hover over your username and click '<strong
                                        >Downloads'</strong
                                    >
                                    from the drop-down menu.
                                </li>
                                <li>
                                    The downloads section displays a list of all
                                    the items purchased using your account.
                                </li>
                                <li>
                                    Click the <strong>'Download'</strong> button
                                    next to the item and select
                                    <strong>‘Main File(s)’</strong> which
                                    contains all files, or
                                    <strong
                                        >‘Licence Certificate and Purchase
                                        Code’</strong
                                    >
                                    for the item licence information only.
                                </li>
                            </ul>
                        </div>
                    </template>
                </AccordionItem>
                <AccordionItem buttonClass="font-heading">
                    <template #button>
                        <h6
                            class="text-base font-bold text-slate-600 group-[.active]:text-slate-700 dark:text-slate-400 group-[.active]:dark:text-white"
                        >
                            What are the benefits of using DashWind?
                        </h6>
                    </template>
                    <template #content>
                        <div class="entry text-slate-500 2xl:me-4">
                            <p>
                                If you want to ask questions about our product,
                                or need help using our item you’ve purchased or
                                just want to tell us how much you love our work,
                                that's great!
                            </p>
                            <p>
                                Contact us via email
                                <a href="mailto:info@softnio.com"
                                    >info(at)softnio.com</a
                                >
                                or Post your comment (are visible to everyone)
                                on our item page after login into your account.
                            </p>
                        </div>
                    </template>
                </AccordionItem>
            </Accordion>
        </div>
    </Layout>
</template>
