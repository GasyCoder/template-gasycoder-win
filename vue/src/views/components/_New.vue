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
</script>
<template>
    <Layout title="Blank">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg></BlockTitleLg>
                <BlockLeadText></BlockLeadText>
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle></BlockTitle>
                    <BlockText></BlockText>
                </BlockHead>
                <Card>
                    <CardBody> </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
