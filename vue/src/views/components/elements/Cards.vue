<script setup>
import Layout from '@/layout/Main.vue';
import {
    Card,
    CardBody,
    CardHeader,
    CardFooter,
    Block,
    BlockHead,
    BlockTitle,
    BlockTitleLg,
    BlockText,
    BlockBack,
    BlockPageHead,
    BlockLeadText,
    Button,
} from '@/components';
</script>
<template>
    <Layout title="Cards">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Card Boxed</BlockTitleLg>
                <BlockLeadText
                    >Cards provide a flexible and extensible content container
                    with multiple variants and options.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Basic Examples</BlockTitle>
                    <BlockText
                        >Cards are built with as little markup and styles as
                        possible, but still manage to deliver a ton of control
                        and customization.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5 lg:w-1/3">
                                <Card>
                                    <img
                                        class="rounded-t-md"
                                        src="/images/slides/slide-a.jpg"
                                        alt=""
                                    />
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-slate-700 dark:text-white"
                                        >
                                            Card with stretched link
                                        </h5>
                                        <p class="mb-4 text-sm text-slate-600">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <Button size="rg" variant="primary"
                                            >Go somewhere</Button
                                        >
                                    </CardBody>
                                </Card>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Basic Examples</BlockTitle>
                    <BlockText
                        >Cards are built with as little markup and styles as
                        possible, but still manage to deliver a ton of control
                        and customization.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5 lg:w-1/3">
                                <Card>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-slate-700 dark:text-white"
                                        >
                                            Card title
                                        </h5>
                                        <h5
                                            class="leading-tighter font-heading -mt-1.5 mb-3 text-base font-bold text-slate-500"
                                        >
                                            Card subtitle
                                        </h5>
                                        <p class="mb-4 text-sm text-slate-600">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                        <ul class="flex space-x-5">
                                            <li>
                                                <a
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                    class="text-primary-600 hover:text-primary-700 text-sm"
                                                    >Card link</a
                                                >
                                            </li>
                                            <li>
                                                <a
                                                    href="#link"
                                                    @click="
                                                        (e) =>
                                                            e.preventDefault()
                                                    "
                                                    class="text-primary-600 hover:text-primary-700 text-sm"
                                                    >Another link</a
                                                >
                                            </li>
                                        </ul>
                                    </CardBody>
                                </Card>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Header and footer</BlockTitle>
                    <BlockText
                        >Add an optional header and/or footer within a
                        card</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5 lg:w-1/3">
                                <Card>
                                    <CardHeader>
                                        <h6
                                            class="text-sm text-slate-600 dark:text-slate-400"
                                        >
                                            Featured Title
                                        </h6>
                                    </CardHeader>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-slate-700 dark:text-white"
                                        >
                                            Special title treatment
                                        </h5>
                                        <p class="mb-4 text-sm text-slate-600">
                                            With supporting text below as a
                                            natural lead-in to additional
                                            content.
                                        </p>
                                        <a
                                            href="#link"
                                            @click="(e) => e.preventDefault()"
                                            class="border-primary-600 bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 relative inline-flex items-center rounded border px-5 py-2 text-center align-middle text-sm leading-4.5 font-bold tracking-wide text-white transition-all duration-300"
                                            >Go somewhere</a
                                        >
                                    </CardBody>
                                    <CardFooter>
                                        <div class="text-xs text-slate-400">
                                            2 days ago
                                        </div>
                                    </CardFooter>
                                </Card>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Card Styles</BlockTitle>
                    <BlockText
                        >Cards include various options for customizing their
                        backgrounds, borders, and color.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5 sm:w-1/2">
                                <Card variant="primary">
                                    <CardHeader variant="primary">
                                        <h6 class="text-sm text-white">
                                            Header
                                        </h6>
                                    </CardHeader>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-white"
                                        >
                                            Primary card title
                                        </h5>
                                        <p class="text-sm text-white">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                    </CardBody>
                                    <CardFooter variant="primary">
                                        <h6 class="text-sm text-white">
                                            Footer
                                        </h6>
                                    </CardFooter>
                                </Card>
                            </div>
                            <div class="w-full p-3.5 sm:w-1/2">
                                <Card variant="secondary">
                                    <CardHeader variant="secondary">
                                        <h6 class="text-sm text-white">
                                            Header
                                        </h6>
                                    </CardHeader>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-white"
                                        >
                                            Dark card title
                                        </h5>
                                        <p class="text-sm text-white">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                    </CardBody>
                                    <CardFooter variant="secondary">
                                        <h6 class="text-sm text-white">
                                            Footer
                                        </h6>
                                    </CardFooter>
                                </Card>
                            </div>
                            <div class="w-full p-3.5 sm:w-1/2">
                                <Card variant="red">
                                    <CardHeader variant="red">
                                        <h6 class="text-sm text-white">
                                            Header
                                        </h6>
                                    </CardHeader>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-white"
                                        >
                                            Danger card title
                                        </h5>
                                        <p class="text-sm text-white">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                    </CardBody>
                                    <CardFooter variant="red">
                                        <h6 class="text-sm text-white">
                                            Footer
                                        </h6>
                                    </CardFooter>
                                </Card>
                            </div>
                            <div class="w-full p-3.5 sm:w-1/2">
                                <Card variant="green">
                                    <CardHeader variant="green">
                                        <h6 class="text-sm text-white">
                                            Header
                                        </h6>
                                    </CardHeader>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-white"
                                        >
                                            Success card title
                                        </h5>
                                        <p class="text-sm text-white">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                    </CardBody>
                                    <CardFooter variant="green">
                                        <h6 class="text-sm text-white">
                                            Footer
                                        </h6>
                                    </CardFooter>
                                </Card>
                            </div>
                            <div class="w-full p-3.5 sm:w-1/2">
                                <Card variant="yellow">
                                    <CardHeader variant="yellow">
                                        <h6 class="text-sm text-white">
                                            Header
                                        </h6>
                                    </CardHeader>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-white"
                                        >
                                            Warning card title
                                        </h5>
                                        <p class="text-sm text-white">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                    </CardBody>
                                    <CardFooter variant="yellow">
                                        <h6 class="text-sm text-white">
                                            Footer
                                        </h6>
                                    </CardFooter>
                                </Card>
                            </div>
                            <div class="w-full p-3.5 sm:w-1/2">
                                <Card variant="cyan">
                                    <CardHeader variant="cyan">
                                        <h6 class="text-sm text-white">
                                            Header
                                        </h6>
                                    </CardHeader>
                                    <CardBody>
                                        <h5
                                            class="leading-tighter font-heading mb-3 text-xl font-bold text-white"
                                        >
                                            Info card title
                                        </h5>
                                        <p class="text-sm text-white">
                                            Some quick example text to build on
                                            the card title and make up the bulk
                                            of the card's content.
                                        </p>
                                    </CardBody>
                                    <CardFooter variant="cyan">
                                        <h6 class="text-sm text-white">
                                            Footer
                                        </h6>
                                    </CardFooter>
                                </Card>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
