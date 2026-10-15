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
    FormGroup,
    FormLabel,
    NoUiSlider,
} from '@/components';
</script>
<template>
    <Layout title="noUislider">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>noUislider</BlockTitleLg>
                <BlockLeadText
                    >Examples and usage guidelines for range slider with
                    noUislider plugin.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Basic Configuration</BlockTitle>
                    <BlockText
                        >For input slider use
                        <code class="text-pink-400">NoUiSlider</code> component
                        that must have an
                        <code class="text-pink-400">id</code>.</BlockText
                    >
                </BlockHead>
                <Card class="overflow-hidden">
                    <CardBody>
                        <div class="-m-3 flex flex-wrap sm:-m-4">
                            <div class="w-full p-3 sm:w-1/2 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Default Range Slider</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            id="DefaultRange"
                                            start="30"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-full p-3 sm:w-1/2 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Range Connect (upper)</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            start="20"
                                            connect="upper"
                                            id="RangeConnect"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-full p-3 sm:w-1/2 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Range Slider Step (10)</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            :step="10"
                                            start="20"
                                            id="RangeStep"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-full p-3 sm:w-1/2 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Range Multiple</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            connect="true"
                                            start="30 70"
                                            id="RangeMultiple"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Vertical Slider</BlockTitle>
                    <BlockText
                        >To make this vertical just add
                        <code class="text-pink-400"
                            >orientation="vertical"</code
                        >
                        props on
                        <code class="text-pink-400">NoUiSlider</code>
                        component.</BlockText
                    >
                </BlockHead>
                <Card class="overflow-hidden">
                    <CardBody>
                        <div class="-m-3 flex flex-wrap sm:-m-4">
                            <div class="w-1/2 p-3 sm:w-1/4 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Default Range Slider</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            orientation="vertical"
                                            start="30"
                                            id="vertical-Default-Range"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-1/2 p-3 sm:w-1/4 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Range Connect (upper)</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            orientation="vertical"
                                            start="20"
                                            connect="upper"
                                            id="vertical-Range-Connect"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-1/2 p-3 sm:w-1/4 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Range Slider Step (10)</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            orientation="vertical"
                                            :step="10"
                                            start="20"
                                            id="vertical-Range-Step"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-1/2 p-3 sm:w-1/4 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Range Multiple</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            orientation="vertical"
                                            connect="true"
                                            start="30 70"
                                            id="vertical-Range-Multiple"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Advanced Configuration</BlockTitle>
                    <BlockText
                        >Range slider with tooltip value preview. just add
                        <code class="text-pink-400">:tooltip="true"</code> props
                        on
                        <code class="text-pink-400">NoUiSlider</code>
                        component.</BlockText
                    >
                </BlockHead>
                <Card class="overflow-hidden">
                    <CardBody>
                        <div class="-m-3 flex flex-wrap sm:-m-4">
                            <div class="w-full p-3 sm:w-1/2 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Tooltip Slider</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            :tooltip="true"
                                            start="40"
                                            id="Tooltip-Range"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-full p-3 sm:w-1/2 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Minimum Distance Slider</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            :tooltip="true"
                                            connect="true"
                                            start="30 60"
                                            :minDistance="20"
                                            id="Min-Distance-Range"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                            <div class="w-full p-3 sm:w-1/2 sm:p-4">
                                <FormGroup>
                                    <FormLabel class="mb-4"
                                        >Maximum Distance Slider</FormLabel
                                    >
                                    <div class="relative">
                                        <NoUiSlider
                                            :tooltip="true"
                                            connect="true"
                                            start="30 60"
                                            :maxDistance="50"
                                            id="Max-Distance-Range"
                                        />
                                    </div>
                                </FormGroup>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
