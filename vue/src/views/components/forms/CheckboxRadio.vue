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
    TextOverline,
    CheckBox,
    Radio,
    Switch,
} from '@/components';
</script>
<template>
    <Layout title="Checkbox Radio">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Checkbox & Radio</BlockTitleLg>
                <BlockLeadText
                    >Examples and usage guidelines for Checkbox, Radio and
                    Switch.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Checkbox Styles</BlockTitle>
                    <BlockText>
                        To create custom control, use
                        <code class="text-primary-600">&lt;CheckBox/&gt;</code>
                        component.
                    </BlockText>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-flow-dense grid-cols-12 gap-6">
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Default</TextOverline
                                    >
                                    <CheckBox id="customCheck1"
                                        >Option Label</CheckBox
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Checked</TextOverline
                                    >
                                    <CheckBox id="customCheck2" checked
                                        >Option Label</CheckBox
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Disabled</TextOverline
                                    >
                                    <CheckBox id="customCheck3" disabled
                                        >Option Label</CheckBox
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Check Disabled</TextOverline
                                    >
                                    <CheckBox id="customCheck4" checked disabled
                                        >Option Label</CheckBox
                                    >
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Size</TextOverline
                                    >
                                    <div
                                        class="flex flex-wrap items-center gap-4"
                                    >
                                        <CheckBox id="customCheck7" size="sm"
                                            >Option Label</CheckBox
                                        >
                                        <CheckBox id="customCheck8"
                                            >Option Label</CheckBox
                                        >
                                        <CheckBox id="customCheck9" size="lg"
                                            >Option Label</CheckBox
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Radio Styles</BlockTitle>
                    <BlockText>
                        To create custom control, use
                        <code class="text-primary-600">&lt;Radio/&gt;</code>
                        component.
                    </BlockText>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-flow-dense grid-cols-12 gap-6">
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Default</TextOverline
                                    >
                                    <Radio id="customRadio1" name="customRadio"
                                        >Option Label</Radio
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Checked</TextOverline
                                    >
                                    <Radio
                                        id="customRadio2"
                                        name="customRadio"
                                        checked
                                        >Option Label</Radio
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Disabled</TextOverline
                                    >
                                    <Radio
                                        id="customRadio3"
                                        name="customRadioDisabled"
                                        disabled
                                        >Option Label</Radio
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Check Disabled</TextOverline
                                    >
                                    <Radio
                                        id="customRadio4"
                                        name="customRadioCheckedDisabled"
                                        checked
                                        disabled
                                        >Option Label</Radio
                                    >
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Size</TextOverline
                                    >
                                    <div
                                        class="flex flex-wrap items-center gap-4"
                                    >
                                        <Radio
                                            id="customRadio7"
                                            name="customRadioSize"
                                            size="sm"
                                            >Option Label</Radio
                                        >
                                        <Radio
                                            id="customRadio8"
                                            name="customRadioSize"
                                            >Option Label</Radio
                                        >
                                        <Radio
                                            id="customRadio9"
                                            name="customRadioSize"
                                            size="lg"
                                            >Option Label</Radio
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Switch Style</BlockTitle>
                    <BlockText>
                        The
                        <code class="text-primary-600">&lt;Switch/&gt;</code>
                        component is a
                        <code class="text-pink-600">checkbox</code> but render a
                        toggle switch.
                    </BlockText>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-flow-dense grid-cols-12 gap-6">
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Default</TextOverline
                                    >
                                    <Switch id="customSwitch1"
                                        >Option Label</Switch
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Checked</TextOverline
                                    >
                                    <Switch id="customSwitch2" defaultChecked
                                        >Option Label</Switch
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Disabled</TextOverline
                                    >
                                    <Switch id="customSwitch3" disabled
                                        >Option Label</Switch
                                    >
                                </div>
                            </div>
                            <div
                                class="col-span-12 sm:col-span-6 md:col-span-3"
                            >
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Check Disabled</TextOverline
                                    >
                                    <Switch
                                        id="customSwitch4"
                                        defaultChecked
                                        disabled
                                        >Option Label</Switch
                                    >
                                </div>
                            </div>
                            <div class="col-span-12">
                                <div class="preview-block">
                                    <TextOverline class="mb-3"
                                        >Size</TextOverline
                                    >
                                    <div
                                        class="flex flex-wrap items-center gap-4"
                                    >
                                        <Switch id="customSwitch7" size="sm"
                                            >Option Label</Switch
                                        >
                                        <Switch id="customSwitch8"
                                            >Option Label</Switch
                                        >
                                        <Switch id="customSwitch9" size="lg"
                                            >Option Label</Switch
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
