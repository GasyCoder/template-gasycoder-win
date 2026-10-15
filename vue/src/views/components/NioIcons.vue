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
    IconPreview,
} from '@/components';
import { useIconDataStore } from '@/stores/icondata';
const icondata = useIconDataStore();
</script>
<template>
    <Layout title="Nioicon">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Nioicon Font</BlockTitleLg>
                <BlockLeadText>
                    <strong>Nioicon</strong> is hand-crafted and beautiful icon
                    set which is designed by <strong>Softnio</strong> Team. We
                    inspired from google icons and carefuly designed this for
                    <strong>DashWind</strong> dashboard. It's have
                    {{ icondata.nioIcon.length }} icons that helps much in your
                    project.
                </BlockLeadText>
                <BlockText>
                    At first import
                    <code class="text-pink-500">Icon</code> component. Then use
                    <code class="text-pink-500"
                        >&lt;Icon name=&quot;icon-name&quot;/&gt;</code
                    >
                    <br />
                    Or you can just the markup from this page.
                </BlockText>
            </BlockPageHead>
            <Block>
                <div class="-m-2.5 flex flex-wrap sm:-m-4">
                    <IconPreview
                        v-for="(item, index) in icondata.nioIcon"
                        :key="index"
                        :icon="item.name"
                    />
                </div>
            </Block>
        </div>
    </Layout>
</template>
