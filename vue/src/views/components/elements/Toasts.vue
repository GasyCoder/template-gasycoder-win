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
    ToastHeader,
    ToastBody,
    Toast,
} from '@/components';
</script>
<template>
    <Layout title="Toast">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Toast</BlockTitleLg>
                <BlockLeadText
                    >Push notifications to your visitors with toast, a
                    customizable alert message.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Basic Examples</BlockTitle>
                    <BlockText
                        >Toasts are lightweight notifications designed to mimic
                        the push notifications.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <Toast>
                            <ToastHeader
                                title="Tailwind"
                                subtitle="11 mins ago"
                            />
                            <ToastBody>
                                Hello, world! This is a toast message.
                            </ToastBody>
                        </Toast>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Stacked Examples</BlockTitle>
                    <BlockText
                        >Here is multiple toast stacked togather.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <Toast>
                            <ToastHeader title="Tailwind" subtitle="Just Now" />
                            <ToastBody> See? Just like this. </ToastBody>
                        </Toast>
                        <Toast>
                            <ToastHeader
                                title="Tailwind"
                                subtitle="2 seconds ago"
                            />
                            <ToastBody>
                                Heads up, toasts will stack automatically
                            </ToastBody>
                        </Toast>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Color Scheme Examples</BlockTitle>
                    <BlockText>Here is some example .</BlockText>
                </BlockHead>
                <Card>
                    <CardBody>
                        <Toast variant="primary">
                            <ToastHeader
                                variant="primary"
                                title="Primary"
                                subtitle="Just Now"
                            />
                            <ToastBody>
                                Hello, world! This is a toast message.
                            </ToastBody>
                        </Toast>
                        <Toast variant="yellow">
                            <ToastHeader
                                variant="yellow"
                                title="Yellow"
                                subtitle="Just Now"
                            />
                            <ToastBody>
                                Hello, world! This is a toast message.
                            </ToastBody>
                        </Toast>
                        <Toast variant="green">
                            <ToastHeader
                                variant="green"
                                title="Green"
                                subtitle="Just Now"
                            />
                            <ToastBody>
                                Hello, world! This is a toast message.
                            </ToastBody>
                        </Toast>
                        <Toast variant="red">
                            <ToastHeader
                                variant="red"
                                title="Red"
                                subtitle="Just Now"
                            />
                            <ToastBody>
                                Hello, world! This is a toast message.
                            </ToastBody>
                        </Toast>
                        <Toast variant="cyan">
                            <ToastHeader
                                variant="cyan"
                                title="cyan"
                                subtitle="Just Now"
                            />
                            <ToastBody>
                                Hello, world! This is a toast message.
                            </ToastBody>
                        </Toast>
                        <Toast variant="dark">
                            <ToastHeader
                                variant="dark"
                                title="Dark"
                                subtitle="Just Now"
                            />
                            <ToastBody>
                                Hello, world! This is a toast message.
                            </ToastBody>
                        </Toast>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
