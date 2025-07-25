<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, CardHeader, CardFooter, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Button } from "@/components";
</script>
<template>
    <Layout title="Cards">
        <div class="lg:max-w-[960px] mx-auto">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Card Boxed</BlockTitleLg>
                <BlockLeadText>Cards provide a flexible and extensible content container with multiple variants and options.</BlockLeadText>
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Basic Examples</BlockTitle>
                    <BlockText>Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization.</BlockText>
                </BlockHead>
                <Card>
                <CardBody>
                    <div class="flex flex-wrap -m-3.5">
                        <div class="w-full lg:w-1/3 p-3.5">
                            <Card>
                                <img class="rounded-t-md" src="/images/slides/slide-a.jpg" alt="" />
                                <CardBody>
                                    <h5 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Card with stretched link</h5>
                                    <p class="text-sm text-slate-600 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <Button size="rg" variant="primary">Go somewhere</Button>
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
                    <BlockText>Cards are built with as little markup and styles as possible, but still manage to deliver a ton of control and customization.</BlockText>
                </BlockHead>
                <Card>
                <CardBody>
                    <div class="flex flex-wrap -m-3.5">
                        <div class="w-full lg:w-1/3 p-3.5">
                            <Card>
                                <CardBody>
                                    <h5 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Card title</h5>
                                    <h5 class="text-base leading-tighter font-bold font-heading text-slate-500 mb-3 -mt-1.5">Card subtitle</h5>
                                    <p class="text-sm text-slate-600 mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                    <ul class="flex space-x-5">
                                        <li><a href="#link" @click="(e)=> e.preventDefault()" class="text-sm text-primary-600 hover:text-primary-700">Card link</a></li>
                                        <li><a href="#link" @click="(e)=> e.preventDefault()" class="text-sm text-primary-600 hover:text-primary-700">Another link</a></li>
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
                    <BlockText>Add an optional header and/or footer within a card</BlockText>
                </BlockHead>
                <Card>
                <CardBody>
                    <div class="flex flex-wrap -m-3.5">
                        <div class="w-full lg:w-1/3 p-3.5">
                            <Card>
                                <CardHeader>
                                    <h6 class="text-sm text-slate-600 dark:text-slate-400">Featured Title</h6>
                                </CardHeader>
                                <CardBody>
                                    <h5 class="text-xl leading-tighter font-bold font-heading text-slate-700 dark:text-white mb-3">Special title treatment</h5>
                                    <p class="text-sm text-slate-600 mb-4">With supporting text below as a natural lead-in to additional content.</p>
                                    <a href="#link" @click="(e)=> e.preventDefault()" class="relative inline-flex items-center text-center align-middle text-sm font-bold leading-4.5 rounded px-5 py-2 tracking-wide border border-primary-600 text-white bg-primary-600 hover:bg-primary-700 hover:border-primary-700 active:bg-primary-800 transition-all duration-300">Go somewhere</a>
                                </CardBody>
                                <CardFooter>
                                    <div class="text-xs text-slate-400">2 days ago</div>
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
                    <BlockText>Cards include various options for customizing their backgrounds, borders, and color.</BlockText>
                </BlockHead>
                <Card>
                <CardBody>
                    <div class="flex flex-wrap -m-3.5">
                    <div class="w-full sm:w-1/2 p-3.5">
                        <Card variant="primary">
                            <CardHeader variant="primary">
                                <h6 class="text-sm text-white">Header</h6>
                            </CardHeader>
                            <CardBody>
                                <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Primary card title</h5>
                                <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </CardBody>
                            <CardFooter variant="primary">
                                <h6 class="text-sm text-white">Footer</h6>
                            </CardFooter>
                        </Card>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <Card variant="secondary">
                            <CardHeader variant="secondary">
                                <h6 class="text-sm text-white">Header</h6>
                            </CardHeader>
                            <CardBody>
                                <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Dark card title</h5>
                                <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </CardBody>
                            <CardFooter variant="secondary">
                                <h6 class="text-sm text-white">Footer</h6>
                            </CardFooter>
                        </Card>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <Card variant="red">
                            <CardHeader variant="red">
                                <h6 class="text-sm text-white">Header</h6>
                            </CardHeader>
                            <CardBody>
                                <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Danger card title</h5>
                                <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </CardBody>
                            <CardFooter variant="red">
                                <h6 class="text-sm text-white">Footer</h6>
                            </CardFooter>
                        </Card>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <Card variant="green">
                            <CardHeader variant="green">
                                <h6 class="text-sm text-white">Header</h6>
                            </CardHeader>
                            <CardBody>
                                <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Success card title</h5>
                                <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </CardBody>
                            <CardFooter variant="green">
                                <h6 class="text-sm text-white">Footer</h6>
                            </CardFooter>
                        </Card>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <Card variant="yellow">
                            <CardHeader variant="yellow">
                                <h6 class="text-sm text-white">Header</h6>
                            </CardHeader>
                            <CardBody>
                                <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Warning card title</h5>
                                <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </CardBody>
                            <CardFooter variant="yellow">
                                <h6 class="text-sm text-white">Footer</h6>
                            </CardFooter>
                        </Card>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <Card variant="cyan">
                            <CardHeader variant="cyan">
                                <h6 class="text-sm text-white">Header</h6>
                            </CardHeader>
                            <CardBody>
                                <h5 class="text-xl leading-tighter font-bold font-heading text-white mb-3">Info card title</h5>
                                <p class="text-sm text-white">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            </CardBody>
                            <CardFooter variant="cyan">
                                <h6 class="text-sm text-white">Footer</h6>
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