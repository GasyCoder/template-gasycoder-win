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
    CheckBoxImage,
    CheckBoxButton,
    RadioImage,
    RadioButton,
    Avatar,
    Icon,
} from '@/components';
</script>
<template>
    <Layout title="Advanced Controls">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Advanced Controls</BlockTitleLg>
                <BlockLeadText
                    >Examples and usage guidelines for custom styled Checkbox
                    and Radio.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Image Checkbox & Radio</BlockTitle>
                    <BlockText
                        >To create custom checkbox and radio with image, use
                        <code class="text-pink-600">CheckBoxImage</code> and
                        <code class="text-pink-600">RadioImage</code>
                        component.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <h6
                            class="font-heading mb-4 text-base font-bold text-slate-700 dark:text-white"
                        >
                            With Checkbox
                        </h6>
                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Default</TextOverline
                                >
                                <CheckBoxImage
                                    src="/images/stock/a.jpg"
                                    id="imageCheck1"
                                />
                            </div>
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Checked</TextOverline
                                >
                                <CheckBoxImage
                                    src="/images/stock/b.jpg"
                                    id="imageCheck2"
                                    checked
                                />
                            </div>
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Disabled</TextOverline
                                >
                                <CheckBoxImage
                                    src="/images/stock/c.jpg"
                                    id="imageCheck3"
                                    disabled
                                />
                            </div>
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Checked Disabled</TextOverline
                                >
                                <CheckBoxImage
                                    src="/images/stock/d.jpg"
                                    id="imageCheck4"
                                    disabled
                                    checked
                                />
                            </div>
                        </div>
                        <h6
                            class="font-heading mt-6 mb-4 text-base font-bold text-slate-700 dark:text-white"
                        >
                            With Radio
                        </h6>
                        <div class="grid grid-flow-dense grid-cols-12 gap-4">
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Default</TextOverline
                                >
                                <RadioImage
                                    src="/images/stock/e.jpg"
                                    name="imageRadio"
                                    id="imageRadio1"
                                />
                            </div>
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Checked</TextOverline
                                >
                                <RadioImage
                                    src="/images/stock/f.jpg"
                                    name="imageRadio"
                                    id="imageRadio2"
                                    checked
                                />
                            </div>
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Disabled</TextOverline
                                >
                                <RadioImage
                                    src="/images/stock/g.jpg"
                                    name="imageRadioDisabled"
                                    id="imageRadio3"
                                    disabled
                                />
                            </div>
                            <div class="col-span-6 md:col-span-3">
                                <TextOverline class="mb-3"
                                    >Checked Disabled</TextOverline
                                >
                                <RadioImage
                                    src="/images/stock/h.jpg"
                                    name="imageRadioDisabled"
                                    id="imageRadio4"
                                    disabled
                                    checked
                                />
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Grouped Checkbox</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-flow-dense grid-cols-12 gap-5">
                            <div class="col-span-12">
                                <h6
                                    class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                                >
                                    Default Mode
                                </h6>
                                <div class="flex flex-wrap items-center gap-3">
                                    <CheckBoxButton id="btnCheckControl1"
                                        >Option Label</CheckBoxButton
                                    >
                                    <CheckBoxButton id="btnCheckControl2"
                                        >Option Label</CheckBoxButton
                                    >
                                    <CheckBoxButton id="btnCheckControl3"
                                        >Option Label</CheckBoxButton
                                    >
                                    <CheckBoxButton
                                        id="btnCheckControl4"
                                        checked
                                        >Option Checked</CheckBoxButton
                                    >
                                    <CheckBoxButton
                                        id="btnCheckControl5"
                                        disabled
                                        >Option Disabled</CheckBoxButton
                                    >
                                </div>
                            </div>
                            <div class="col-span-12">
                                <h6
                                    class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                                >
                                    NoControl Mode
                                </h6>
                                <div class="flex flex-wrap items-center gap-3">
                                    <CheckBoxButton id="btnCheck1" nocontrol
                                        >Option Label</CheckBoxButton
                                    >
                                    <CheckBoxButton id="btnCheck2" nocontrol
                                        >Option Label</CheckBoxButton
                                    >
                                    <CheckBoxButton id="btnCheck3" nocontrol
                                        >Option Label</CheckBoxButton
                                    >
                                    <CheckBoxButton
                                        id="btnCheck4"
                                        checked
                                        nocontrol
                                        >Option Checked</CheckBoxButton
                                    >
                                    <CheckBoxButton
                                        id="btnCheck5"
                                        disabled
                                        nocontrol
                                        >Option Disabled</CheckBoxButton
                                    >
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-7">
                                <h6
                                    class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                                >
                                    With Icon
                                </h6>
                                <div class="flex flex-wrap items-center gap-3">
                                    <CheckBoxButton
                                        id="btnIconCheckNc1"
                                        icon="user"
                                        nocontrol
                                        >User</CheckBoxButton
                                    >
                                    <CheckBoxButton
                                        id="btnIconCheckNc2"
                                        icon="loader"
                                        nocontrol
                                        >Loading</CheckBoxButton
                                    >
                                    <CheckBoxButton
                                        id="btnIconCheckNc3"
                                        icon="signal"
                                        nocontrol
                                        >Network</CheckBoxButton
                                    >
                                    <CheckBoxButton
                                        id="btnIconCheckNc4"
                                        icon="wifi-off"
                                        nocontrol
                                        >No Wifi</CheckBoxButton
                                    >
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-5">
                                <h6
                                    class="font-heading mb-3 text-base font-bold text-slate-700 dark:text-white"
                                >
                                    Only Icon
                                </h6>
                                <div class="flex flex-wrap items-center gap-3">
                                    <CheckBoxButton
                                        id="btnOnlyIconCheck1"
                                        icon="user"
                                        nocontrol
                                    ></CheckBoxButton>
                                    <CheckBoxButton
                                        id="btnOnlyIconCheck2"
                                        icon="loader"
                                        nocontrol
                                    ></CheckBoxButton>
                                    <CheckBoxButton
                                        id="btnOnlyIconCheck3"
                                        icon="signal"
                                        nocontrol
                                    ></CheckBoxButton>
                                    <CheckBoxButton
                                        id="btnOnlyIconCheck4"
                                        icon="wifi-off"
                                        nocontrol
                                    ></CheckBoxButton>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Grouped Radio</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-flow-dense grid-cols-12 gap-5">
                            <div class="col-span-12">
                                <TextOverline class="mb-3"
                                    >Default Mode</TextOverline
                                >
                                <div class="flex flex-wrap items-center gap-3">
                                    <RadioButton
                                        id="btnRadioControl1"
                                        name="btnRadio"
                                        >Option Label</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadioControl2"
                                        name="btnRadio"
                                        >Option Label</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadioControl3"
                                        name="btnRadio"
                                        >Option Label</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadioControl4"
                                        name="btnRadio"
                                        checked
                                        >Option Checked</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadioControl5"
                                        name="btnRadio"
                                        disabled
                                        >Option Disabled</RadioButton
                                    >
                                </div>
                            </div>
                            <div class="col-span-12">
                                <TextOverline class="mb-3"
                                    >NoControl Mode</TextOverline
                                >
                                <div class="flex flex-wrap items-center gap-3">
                                    <RadioButton
                                        id="btnRadio1"
                                        name="btnRadioNc"
                                        nocontrol
                                        >Option Label</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadio2"
                                        name="btnRadioNc"
                                        nocontrol
                                        >Option Label</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadio3"
                                        name="btnRadioNc"
                                        nocontrol
                                        >Option Label</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadio4"
                                        name="btnRadioNc"
                                        checked
                                        nocontrol
                                        >Option Checked</RadioButton
                                    >
                                    <RadioButton
                                        id="btnRadio5"
                                        name="btnRadioNc"
                                        disabled
                                        nocontrol
                                        >Option Disabled</RadioButton
                                    >
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-7">
                                <TextOverline class="mb-3"
                                    >With Icon</TextOverline
                                >
                                <div class="flex flex-wrap items-center gap-3">
                                    <RadioButton
                                        id="btnIconRadioNc1"
                                        name="btnIconRadio"
                                        icon="user"
                                        nocontrol
                                        >User</RadioButton
                                    >
                                    <RadioButton
                                        id="btnIconRadioNc2"
                                        name="btnIconRadio"
                                        icon="loader"
                                        nocontrol
                                        >Loading</RadioButton
                                    >
                                    <RadioButton
                                        id="btnIconRadioNc3"
                                        name="btnIconRadio"
                                        icon="signal"
                                        nocontrol
                                        >Network</RadioButton
                                    >
                                    <RadioButton
                                        id="btnIconRadioNc4"
                                        name="btnIconRadio"
                                        icon="wifi-off"
                                        nocontrol
                                        >No Wifi</RadioButton
                                    >
                                </div>
                            </div>
                            <div class="col-span-12 lg:col-span-5">
                                <TextOverline class="mb-3"
                                    >Only Icon</TextOverline
                                >
                                <div class="flex flex-wrap items-center gap-3">
                                    <RadioButton
                                        id="btnOnlyIconRadio1"
                                        name="btnOnlyIconRadio"
                                        icon="user"
                                        nocontrol
                                    ></RadioButton>
                                    <RadioButton
                                        id="btnOnlyIconRadio2"
                                        name="btnOnlyIconRadio"
                                        icon="loader"
                                        nocontrol
                                    ></RadioButton>
                                    <RadioButton
                                        id="btnOnlyIconRadio3"
                                        name="btnOnlyIconRadio"
                                        icon="signal"
                                        nocontrol
                                    ></RadioButton>
                                    <RadioButton
                                        id="btnOnlyIconRadio4"
                                        name="btnOnlyIconRadio"
                                        icon="wifi-off"
                                        nocontrol
                                    ></RadioButton>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>With Custom Content</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="grid grid-flow-dense grid-cols-12 gap-5">
                            <div
                                class="col-span-12 md:col-span-6 lg:col-span-4"
                            >
                                <TextOverline class="mb-3"
                                    >User Selection</TextOverline
                                >
                                <div class="flex flex-col gap-3">
                                    <CheckBoxButton
                                        id="userSelection1"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center ps-1 whitespace-nowrap"
                                        >
                                            <Avatar
                                                variant="green"
                                                size="rg"
                                                img="/images/avatar/c-sm.jpg"
                                                imgAlt=""
                                            ></Avatar>
                                            <span class="ms-4">
                                                <span
                                                    class="block text-sm font-bold text-slate-700 dark:text-white"
                                                    >Keith Jensen</span
                                                >
                                                <span
                                                    class="block text-xs text-slate-400"
                                                    >Senior Developer</span
                                                >
                                            </span>
                                        </span>
                                    </CheckBoxButton>
                                    <CheckBoxButton
                                        id="userSelection2"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center ps-1 whitespace-nowrap"
                                        >
                                            <Avatar
                                                variant="pink"
                                                size="rg"
                                                text="AB"
                                            ></Avatar>
                                            <span class="ms-4">
                                                <span
                                                    class="block text-sm font-bold text-slate-700 dark:text-white"
                                                    >Abu Bin Ishtiyak</span
                                                >
                                                <span
                                                    class="block text-xs text-slate-400"
                                                    >Senior Developer</span
                                                >
                                            </span>
                                        </span>
                                    </CheckBoxButton>
                                    <CheckBoxButton
                                        id="userSelection3"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center ps-1 whitespace-nowrap"
                                        >
                                            <Avatar
                                                variant="green"
                                                size="rg"
                                                img="/images/avatar/d-sm.jpg"
                                                imgAlt=""
                                            ></Avatar>
                                            <span class="ms-4">
                                                <span
                                                    class="block text-sm font-bold text-slate-700 dark:text-white"
                                                    >Daisy Morgan</span
                                                >
                                                <span
                                                    class="block text-xs text-slate-400"
                                                    >UI/UX Designer</span
                                                >
                                            </span>
                                        </span>
                                    </CheckBoxButton>
                                </div>
                            </div>
                            <div
                                class="col-span-12 md:col-span-6 lg:col-span-4"
                            >
                                <TextOverline class="mb-3"
                                    >User Choose</TextOverline
                                >
                                <div
                                    class="flex flex-col -space-y-px [&>*:not(:first-child)]:rounded-t-none [&>*:not(:last-child)]:rounded-b-none"
                                >
                                    <RadioButton
                                        id="userChoice1"
                                        name="userChoice"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center pl-1 whitespace-nowrap"
                                        >
                                            <span
                                                class="bg-primary-600 relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full text-sm font-medium text-white"
                                            >
                                                <Avatar
                                                    variant="green"
                                                    rounded
                                                    size="sm"
                                                    img="/images/avatar/c-sm.jpg"
                                                    imgAlt=""
                                                ></Avatar>
                                            </span>
                                            <span
                                                class="ms-3 block text-xs font-bold text-slate-700 dark:text-white"
                                                >Keith Jensen</span
                                            >
                                        </span>
                                    </RadioButton>
                                    <RadioButton
                                        id="userChoice2"
                                        name="userChoice"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center pl-1 whitespace-nowrap"
                                        >
                                            <span
                                                class="bg-primary-600 relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full text-sm font-medium text-white"
                                            >
                                                <Avatar
                                                    variant="pink"
                                                    rounded
                                                    size="sm"
                                                    text="AB"
                                                ></Avatar>
                                            </span>
                                            <span
                                                class="ms-3 block text-xs font-bold text-slate-700 dark:text-white"
                                                >Keith Jensen</span
                                            >
                                        </span>
                                    </RadioButton>
                                    <RadioButton
                                        id="userChoice3"
                                        name="userChoice"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center pl-1 whitespace-nowrap"
                                        >
                                            <span
                                                class="bg-primary-600 relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full text-sm font-medium text-white"
                                            >
                                                <Avatar
                                                    variant="green"
                                                    rounded
                                                    size="sm"
                                                    img="/images/avatar/b-sm.jpg"
                                                    imgAlt=""
                                                ></Avatar>
                                            </span>
                                            <span
                                                class="ms-3 block text-xs font-bold text-slate-700 dark:text-white"
                                                >Keith Jensen</span
                                            >
                                        </span>
                                    </RadioButton>
                                    <RadioButton
                                        id="userChoice4"
                                        name="userChoice"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center pl-1 whitespace-nowrap"
                                        >
                                            <span
                                                class="bg-primary-600 relative flex h-8 w-8 flex-shrink-0 items-center justify-center rounded-full text-sm font-medium text-white"
                                            >
                                                <Avatar
                                                    variant="green"
                                                    rounded
                                                    size="sm"
                                                    img="/images/avatar/d-sm.jpg"
                                                    imgAlt=""
                                                ></Avatar>
                                            </span>
                                            <span
                                                class="ms-3 block text-xs font-bold text-slate-700 dark:text-white"
                                                >Keith Jensen</span
                                            >
                                        </span>
                                    </RadioButton>
                                </div>
                            </div>
                            <div
                                class="col-span-12 md:col-span-6 lg:col-span-4"
                            >
                                <TextOverline class="mb-3"
                                    >Payment Method</TextOverline
                                >
                                <div class="flex flex-col gap-3">
                                    <RadioButton
                                        id="paymentCheck1"
                                        name="paymentCheck"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center ps-1 whitespace-nowrap"
                                        >
                                            <Icon
                                                class="text-3xl/none"
                                                name="cc-paypal"
                                            />
                                            <span
                                                class="ms-3 block text-sm text-slate-600 dark:text-slate-400"
                                                >Paypal</span
                                            >
                                        </span>
                                    </RadioButton>
                                    <RadioButton
                                        id="paymentCheck2"
                                        name="paymentCheck"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center ps-1 whitespace-nowrap"
                                        >
                                            <Icon
                                                class="text-3xl/none"
                                                name="cc-mc"
                                            />
                                            <span
                                                class="ms-3 block text-sm text-slate-600 dark:text-slate-400"
                                                >Master Card</span
                                            >
                                        </span>
                                    </RadioButton>
                                    <RadioButton
                                        id="paymentCheck3"
                                        name="paymentCheck"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center ps-1 whitespace-nowrap"
                                        >
                                            <Icon
                                                class="text-3xl/none"
                                                name="cc-visa"
                                            />
                                            <span
                                                class="ms-3 block text-sm text-slate-600 dark:text-slate-400"
                                                >Visa Card</span
                                            >
                                        </span>
                                    </RadioButton>
                                    <RadioButton
                                        id="paymentCheck4"
                                        name="paymentCheck"
                                        labelClass="w-full"
                                    >
                                        <span
                                            class="flex w-full items-center ps-1 whitespace-nowrap"
                                        >
                                            <Icon
                                                class="text-3xl/none"
                                                name="cc-stripe"
                                            />
                                            <span
                                                class="ms-3 block text-sm text-slate-600 dark:text-slate-400"
                                                >Stripe</span
                                            >
                                        </span>
                                    </RadioButton>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
