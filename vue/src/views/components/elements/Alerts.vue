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
    Alert,
    AlertLink,
    AlertPro,
} from '@/components';
</script>
<template>
    <Layout title="Alerts">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Alerts Styles</BlockTitleLg>
                <BlockLeadText
                    >Provide contextual feedback messages for typical user
                    actions with the handful of available and flexible alert
                    messages.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Examples - Default Style</BlockTitle>
                    <BlockText
                        >Here is some basic example for designed alert
                        components</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-1 gap-6">
                            <Alert icon="alert-circle" variant="primary">
                                <p class="text-sm">
                                    <strong>Order has been placed</strong>. Your
                                    will be redirect for make your payment.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="secondary">
                                <p class="text-sm">
                                    <strong>Order has been placed</strong>. Your
                                    will be redirect for make your payment.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="green">
                                <p class="text-sm">
                                    <strong>Thanks for your deposit</strong>.
                                    Your account balance has been updated
                                    accordingly.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="cyan">
                                <p class="text-sm">
                                    <strong>Order has been placed</strong>. Your
                                    will be redirect for make your payment.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="yellow">
                                <p class="text-sm">
                                    Your credit card
                                    <strong>already expired</strong>. Please
                                    enter a valid & up-to-date
                                    <AlertLink
                                        @click="(e) => e.preventDefault()"
                                        href="#link"
                                        >credit card</AlertLink
                                    >
                                    for make deposit.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="red">
                                <p class="text-sm">
                                    <strong>Update failed!</strong>. There is
                                    some technical issues.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="light">
                                <p class="text-sm">
                                    Your credit card
                                    <strong>already expired</strong>. Please
                                    enter a valid & up-to-date
                                    <AlertLink
                                        @click="(e) => e.preventDefault()"
                                        href="#link"
                                        >credit card</AlertLink
                                    >
                                    for make deposit.
                                </p>
                            </Alert>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <Card>
                    <CardBody>
                        <div class="grid grid-cols-1 gap-6">
                            <Alert icon="alert-circle" variant="primary-fill">
                                <p class="text-sm">
                                    <strong>Order has been placed</strong>. Your
                                    will be redirect for make your payment.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="secondary-fill">
                                <p class="text-sm">
                                    <strong>Order has been placed</strong>. Your
                                    will be redirect for make your payment.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="green-fill">
                                <p class="text-sm">
                                    <strong>Thanks for your deposit</strong>.
                                    Your account balance has been updated
                                    accordingly.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="cyan-fill">
                                <p class="text-sm">
                                    <strong>Order has been placed</strong>. Your
                                    will be redirect for make your payment.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="yellow-fill">
                                <p class="text-sm">
                                    Your credit card
                                    <strong>already expired</strong>. Please
                                    enter a valid & up-to-date
                                    <AlertLink
                                        @click="(e) => e.preventDefault()"
                                        href="#link"
                                        >credit card</AlertLink
                                    >
                                    for make deposit.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="red-fill">
                                <p class="text-sm">
                                    <strong>Update failed!</strong>. There is
                                    some technical issues.
                                </p>
                            </Alert>
                            <Alert icon="alert-circle" variant="light-fill">
                                <p class="text-sm">
                                    Your credit card
                                    <strong>already expired</strong>. Please
                                    enter a valid & up-to-date
                                    <AlertLink
                                        @click="(e) => e.preventDefault()"
                                        href="#link"
                                        >credit card</AlertLink
                                    >
                                    for make deposit.
                                </p>
                            </Alert>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Examples - Style Pro</BlockTitle>
                    <BlockText
                        >Here is some pro example styled alert
                        components</BlockText
                    >
                </BlockHead>
                <div class="grid grid-cols-1 gap-6">
                    <AlertPro variant="primary">
                        <h6
                            class="-tracking-snug leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Your Order Placed
                        </h6>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Your order has been successfully placed for diposit.
                            Your will be redirect for make your payment.
                        </p>
                    </AlertPro>
                    <AlertPro variant="secondary">
                        <h6
                            class="-tracking-snug leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Your Order Placed
                        </h6>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Your order has been successfully placed for diposit.
                            Your will be redirect for make your payment.
                        </p>
                    </AlertPro>
                    <AlertPro variant="green">
                        <h6
                            class="-tracking-snug leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Payment Successfully Made
                        </h6>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Thanks for your deposit. Now you can see your
                            transaction history. Your account has been updated
                            accordingly.
                        </p>
                    </AlertPro>
                    <AlertPro variant="cyan">
                        <h6
                            class="-tracking-snug leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Your Order Placed
                        </h6>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Your order has been successfully placed for diposit.
                            Your will be redirect for make your payment.
                        </p>
                    </AlertPro>
                    <AlertPro variant="yellow">
                        <h6
                            class="-tracking-snug leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Payment Information
                        </h6>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Sorry! your credit card already expired. Please
                            enter a valid & up-to-date credit card for make
                            deposit.
                        </p>
                    </AlertPro>
                    <AlertPro variant="red">
                        <h6
                            class="-tracking-snug leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Order Cancelled
                        </h6>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Your order has been cancelled due to received your
                            payment.
                        </p>
                    </AlertPro>
                    <AlertPro variant="light">
                        <h6
                            class="-tracking-snug leading-tighter mb-2 text-base font-bold text-slate-700 dark:text-white"
                        >
                            Your Order Placed
                        </h6>
                        <p class="text-sm text-slate-600 dark:text-slate-400">
                            Your order has been successfully placed for diposit.
                            Your will be redirect for make your payment.
                        </p>
                    </AlertPro>
                </div>
            </Block>
        </div>
    </Layout>
</template>
