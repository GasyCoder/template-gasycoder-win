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
} from '@/components';

import ActiveUsersCard from '../../dashboard/Analytics/partials/ActiveUsersCard.vue';
import OrdersOverviewCard from '../../dashboard/Crypto/partials/OrdersOverviewCard.vue';
import UserActivitiesCard from '../../dashboard/Crypto/partials/UserActivitiesCard.vue';
import SalesOverviewCard from '../../dashboard/Sales/partials/SalesOverviewCard.vue';
import AudienceOverviewCard from '../../dashboard/Analytics/partials/AudienceOverviewCard.vue';
import TrafficChannelCard from '../../dashboard/Analytics/partials/TrafficChannelCard.vue';
import TrafficChannelListCard from '../../dashboard/Analytics/partials/TrafficChannelListCard.vue';
import SessionsCard from '../../dashboard/Analytics/partials/SessionsCard.vue';
</script>
<template>
    <Layout title="Chart Widgets">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Chart Widgets</BlockTitleLg>
            </BlockPageHead>

            <Block>
                <BlockHead>
                    <BlockTitle>Single Bar Chart</BlockTitle>
                    <BlockText
                        >A bar chart provides a way of showing data values
                        represented as vertical bars.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-6">
                                    <ActiveUsersCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Multiple Bar Chart</BlockTitle>
                    <BlockText
                        >A bar chart provides a way of showing data values
                        represented as vertical bars.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <OrdersOverviewCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Stacked Bar Chart</BlockTitle>
                    <BlockText
                        >A bar chart provides a way of comparison of multiple
                        data with stacked view.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-6">
                                    <UserActivitiesCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Solid Line Chart</BlockTitle>
                    <BlockText
                        >A line chart is a way of plotting data points on a
                        line.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <SalesOverviewCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Solid Line Chart</BlockTitle>
                    <BlockText
                        >A line chart is a way of plotting data points on a
                        line.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <AudienceOverviewCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Multiple Line Chart</BlockTitle>
                    <BlockText
                        >A line chart is a way of plotting data points on a
                        line.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <TrafficChannelListCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Donught Charts</BlockTitle>
                    <BlockText
                        >Dughnut charts are probably the most commonly used
                        charts. It use to show relational proportions between
                        data.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-6">
                                    <TrafficChannelCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Donught Charts with icons</BlockTitle>
                    <BlockText
                        >Dughnut charts are probably the most commonly used
                        charts. It use to show relational proportions between
                        data.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div
                            class="rounded-md border-gray-300 bg-white dark:border-gray-900 dark:bg-gray-950"
                        >
                            <div class="grid grid-cols-12">
                                <div class="col-span-12 md:col-span-6">
                                    <SessionsCard />
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
