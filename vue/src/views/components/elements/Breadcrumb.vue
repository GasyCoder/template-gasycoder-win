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
    Breadcrumb,
    BreadcrumbItem,
    BreadcrumbLink,
} from '@/components';
</script>
<template>
    <Layout title="Breadcrumb">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Breadcrumb</BlockTitleLg>
                <BlockLeadText
                    >Indicate the current page’s location within a navigational
                    hierarchy.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Default Style</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem>Home</BreadcrumbItem>
                        </Breadcrumb>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem
                                ><BreadcrumbLink to="/"
                                    >Home</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem>Library</BreadcrumbItem>
                        </Breadcrumb>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem
                                ><BreadcrumbLink to="/"
                                    >Home</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem
                                ><BreadcrumbLink to="/"
                                    >Library</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem>Data</BreadcrumbItem>
                        </Breadcrumb>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Arrow Style</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem separator="arrow"
                                >Home</BreadcrumbItem
                            >
                        </Breadcrumb>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem separator="arrow"
                                ><BreadcrumbLink to="/"
                                    >Home</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem separator="arrow"
                                >Library</BreadcrumbItem
                            >
                        </Breadcrumb>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem separator="arrow"
                                ><BreadcrumbLink to="/"
                                    >Home</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem separator="arrow"
                                ><BreadcrumbLink to="/"
                                    >Library</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem separator="arrow"
                                >Data</BreadcrumbItem
                            >
                        </Breadcrumb>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Pipe Style</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem separator="pipe"
                                >Home</BreadcrumbItem
                            >
                        </Breadcrumb>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem separator="pipe"
                                ><BreadcrumbLink to="/"
                                    >Home</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem separator="pipe"
                                >Library</BreadcrumbItem
                            >
                        </Breadcrumb>
                        <Breadcrumb class="uppercase">
                            <BreadcrumbItem separator="pipe"
                                ><BreadcrumbLink to="/"
                                    >Home</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem separator="pipe"
                                ><BreadcrumbLink to="/"
                                    >Library</BreadcrumbLink
                                ></BreadcrumbItem
                            >
                            <BreadcrumbItem separator="pipe"
                                >Data</BreadcrumbItem
                            >
                        </Breadcrumb>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
