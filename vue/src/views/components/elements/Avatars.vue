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
    Avatar,
    AvatarGroup,
    TextOverline,
} from '@/components';
</script>
<template>
    <Layout title="Avatar">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Avatar</BlockTitleLg>
                <BlockLeadText
                    >Documentation and examples for avatars.</BlockLeadText
                >
            </BlockPageHead>

            <Block>
                <BlockHead>
                    <BlockTitle>Example with Variations</BlockTitle>
                    <BlockText
                        >Carefully designed avatar examples with diffrent shape,
                        layout and states.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5 md:w-1/4">
                                <TextOverline class="mb-3"
                                    >Default Style's</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        rounded
                                        icon="user-alt"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        rounded
                                        img="/images/avatar/b-sm.jpg"
                                        imgAlt=""
                                    ></Avatar>
                                </div>
                            </div>
                            <div class="w-full p-3.5 md:w-1/4">
                                <TextOverline class="mb-3"
                                    >Status Style's</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        rounded
                                        text="AB"
                                        status="active"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        rounded
                                        icon="user-alt"
                                        status="inactive"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        rounded
                                        img="/images/avatar/b-sm.jpg"
                                        imgAlt=""
                                        status="away"
                                    ></Avatar>
                                </div>
                            </div>
                            <div class="w-full p-3.5 md:w-1/4">
                                <TextOverline class="mb-3"
                                    >Square Style's</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        icon="user-alt"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        img="/images/avatar/b-sm.jpg"
                                        imgAlt=""
                                    ></Avatar>
                                </div>
                            </div>
                            <div class="w-full p-3.5 md:w-1/4">
                                <TextOverline class="mb-3"
                                    >Status Style's</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        text="AB"
                                        status="active"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        icon="user-alt"
                                        status="inactive"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        img="/images/avatar/b-sm.jpg"
                                        imgAlt=""
                                        status="away"
                                    ></Avatar>
                                </div>
                            </div>
                            <div class="w-full p-3.5 md:w-1/4">
                                <TextOverline class="mb-3"
                                    >Group Style's</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <AvatarGroup>
                                        <Avatar
                                            variant="primary"
                                            size="rg"
                                            rounded
                                            text="AB"
                                        ></Avatar>
                                        <Avatar
                                            variant="green"
                                            size="rg"
                                            rounded
                                            text="NL"
                                        ></Avatar>
                                    </AvatarGroup>
                                    <AvatarGroup>
                                        <Avatar
                                            variant="primary"
                                            size="rg"
                                            rounded
                                            text="AB"
                                        ></Avatar>
                                        <Avatar
                                            variant="green"
                                            size="rg"
                                            rounded
                                            img="/images/avatar/b-sm.jpg"
                                            imgAlt=""
                                        ></Avatar>
                                    </AvatarGroup>
                                    <AvatarGroup>
                                        <Avatar
                                            variant="green"
                                            size="rg"
                                            rounded
                                            img="/images/avatar/b-sm.jpg"
                                            imgAlt=""
                                        ></Avatar>
                                        <Avatar
                                            variant="green"
                                            size="rg"
                                            rounded
                                            img="/images/avatar/c-sm.jpg"
                                            imgAlt=""
                                        ></Avatar>
                                    </AvatarGroup>
                                </div>
                            </div>
                            <div class="w-full p-3.5 md:w-1/4">
                                <TextOverline class="mb-3"
                                    >Group Style's S2</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <AvatarGroup variant="s2" size="rg">
                                        <Avatar
                                            variant="primary"
                                            rounded
                                            text="A"
                                        ></Avatar>
                                        <Avatar
                                            variant="green"
                                            rounded
                                            text="N"
                                        ></Avatar>
                                    </AvatarGroup>
                                    <AvatarGroup variant="s2" size="rg">
                                        <Avatar
                                            variant="primary"
                                            rounded
                                            text="A"
                                        ></Avatar>
                                        <Avatar
                                            rounded
                                            img="/images/avatar/b-sm.jpg"
                                            imgAlt=""
                                        ></Avatar>
                                    </AvatarGroup>
                                    <AvatarGroup variant="s2" size="rg">
                                        <Avatar
                                            rounded
                                            img="/images/avatar/b-sm.jpg"
                                            imgAlt=""
                                        ></Avatar>
                                        <Avatar
                                            rounded
                                            img="/images/avatar/c-sm.jpg"
                                            imgAlt=""
                                        ></Avatar>
                                    </AvatarGroup>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Example with Variant</BlockTitle>
                    <BlockText
                        >Checkout following component code to change the
                        appearance of a avatar.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5">
                                <TextOverline class="mb-3"
                                    >Highlighted colors</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="secondary"
                                        size="rg"
                                        rounded
                                        text="NL"
                                    ></Avatar>
                                    <Avatar
                                        variant="yellow"
                                        size="rg"
                                        rounded
                                        text="CH"
                                    ></Avatar>
                                    <Avatar
                                        variant="red"
                                        size="rg"
                                        rounded
                                        text="SW"
                                    ></Avatar>
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        rounded
                                        text="GO"
                                    ></Avatar>
                                    <Avatar
                                        variant="cyan"
                                        size="rg"
                                        rounded
                                        text="PS"
                                    ></Avatar>
                                    <Avatar
                                        variant="blue"
                                        size="rg"
                                        rounded
                                        text="DM"
                                    ></Avatar>
                                    <Avatar
                                        variant="pink"
                                        size="rg"
                                        rounded
                                        text="HS"
                                    ></Avatar>
                                    <Avatar
                                        variant="indigo"
                                        size="rg"
                                        rounded
                                        text="SM"
                                    ></Avatar>
                                    <Avatar
                                        variant="black"
                                        size="rg"
                                        rounded
                                        text="TM"
                                    ></Avatar>
                                    <Avatar
                                        variant="slate"
                                        size="rg"
                                        rounded
                                        text="JC"
                                    ></Avatar>
                                    <Avatar
                                        variant="orange"
                                        size="rg"
                                        rounded
                                        text="VA"
                                    ></Avatar>
                                    <Avatar
                                        variant="purple"
                                        size="rg"
                                        rounded
                                        text="EH"
                                    ></Avatar>
                                </div>
                            </div>
                            <div class="w-full p-3.5">
                                <TextOverline class="mb-3"
                                    >Pale colors</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary-pale"
                                        size="rg"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="secondary-pale"
                                        size="rg"
                                        rounded
                                        text="NL"
                                    ></Avatar>
                                    <Avatar
                                        variant="yellow-pale"
                                        size="rg"
                                        rounded
                                        text="CH"
                                    ></Avatar>
                                    <Avatar
                                        variant="red-pale"
                                        size="rg"
                                        rounded
                                        text="SW"
                                    ></Avatar>
                                    <Avatar
                                        variant="green-pale"
                                        size="rg"
                                        rounded
                                        text="GO"
                                    ></Avatar>
                                    <Avatar
                                        variant="cyan-pale"
                                        size="rg"
                                        rounded
                                        text="PS"
                                    ></Avatar>
                                    <Avatar
                                        variant="blue-pale"
                                        size="rg"
                                        rounded
                                        text="DM"
                                    ></Avatar>
                                    <Avatar
                                        variant="pink-pale"
                                        size="rg"
                                        rounded
                                        text="HS"
                                    ></Avatar>
                                    <Avatar
                                        variant="indigo-pale"
                                        size="rg"
                                        rounded
                                        text="SM"
                                    ></Avatar>
                                    <Avatar
                                        variant="black-pale"
                                        size="rg"
                                        rounded
                                        text="TM"
                                    ></Avatar>
                                    <Avatar
                                        variant="slate-pale"
                                        size="rg"
                                        rounded
                                        text="JC"
                                    ></Avatar>
                                    <Avatar
                                        variant="orange-pale"
                                        size="rg"
                                        rounded
                                        text="VA"
                                    ></Avatar>
                                    <Avatar
                                        variant="purple-pale"
                                        size="rg"
                                        rounded
                                        text="EH"
                                    ></Avatar>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Example with Sizes</BlockTitle>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5 md:w-1/2">
                                <TextOverline class="mb-3"
                                    >Rounded Avatars</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary"
                                        size="3xl"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="2xl"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="xl"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="sm"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="xs"
                                        rounded
                                        text="A"
                                    ></Avatar>
                                </div>
                            </div>
                            <div class="w-full p-3.5 md:w-1/2">
                                <TextOverline class="mb-3"
                                    >Squared Avatars</TextOverline
                                >
                                <div class="flex flex-wrap gap-3">
                                    <Avatar
                                        variant="primary"
                                        size="3xl"
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="2xl"
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="xl"
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="sm"
                                        text="AB"
                                    ></Avatar>
                                    <Avatar
                                        variant="primary"
                                        size="xs"
                                        text="A"
                                    ></Avatar>
                                </div>
                            </div>
                        </div>
                    </CardBody>
                </Card>
            </Block>

            <Block>
                <BlockHead>
                    <BlockTitle>Example with Use Case</BlockTitle>
                    <BlockText
                        >Lets take a look at some real use case for
                        avatar.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="-m-3.5 flex flex-wrap">
                            <div class="w-full p-3.5 sm:w-1/2 md:w-1/3">
                                <TextOverline class="mb-3"
                                    >User Card 1</TextOverline
                                >
                                <div class="flex items-center">
                                    <Avatar
                                        variant="primary"
                                        size="rg"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <div class="ms-4">
                                        <div
                                            class="text-primary-500 group-hover:text-primary-600 pt-0.5 pb-1.5 text-xs leading-none font-medium"
                                        >
                                            Administrator
                                        </div>
                                        <div
                                            class="flex items-center text-xs font-bold text-slate-600 dark:text-white"
                                        >
                                            Abu Bin Ishityak
                                            <em
                                                class="ni ni-chevron-down ms-1 text-sm leading-none"
                                            ></em>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-3.5 sm:w-1/2 md:w-1/3">
                                <TextOverline class="mb-3"
                                    >User Card 2</TextOverline
                                >
                                <div class="flex items-center">
                                    <Avatar
                                        variant="green"
                                        size="rg"
                                        rounded
                                        img="/images/avatar/c-sm.jpg"
                                        imgAlt=""
                                    ></Avatar>
                                    <div class="ms-4">
                                        <div
                                            class="flex items-center text-sm font-bold text-slate-700 dark:text-white"
                                        >
                                            Keith Jensen
                                        </div>
                                        <div
                                            class="pt-0.5 pb-1.5 text-xs leading-none font-normal text-slate-400"
                                        >
                                            keith@softnio.com
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-3.5 sm:w-1/2 md:w-1/3">
                                <TextOverline class="mb-3"
                                    >User Card 3</TextOverline
                                >
                                <div class="flex items-center">
                                    <Avatar
                                        variant="primary"
                                        size="sm"
                                        rounded
                                        text="AB"
                                    ></Avatar>
                                    <div class="ms-3">
                                        <div
                                            class="flex items-center text-xs font-bold text-slate-600 dark:text-white"
                                        >
                                            Abu Bin Ishityak
                                        </div>
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
