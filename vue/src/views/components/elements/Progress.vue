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
    Progress,
    ProgressBar,
} from '@/components';
</script>
<template>
    <Layout title="Progress">
        <div class="mx-auto lg:max-w-[960px]">
            <BlockPageHead class="md:max-w-[720px]">
                <BlockBack to="/components">Components</BlockBack>
                <BlockTitleLg>Progress</BlockTitleLg>
                <BlockLeadText
                    >Examples for using custom progress bars featuring support
                    for stacked bars, animated backgrounds, and text
                    labels.</BlockLeadText
                >
            </BlockPageHead>
            <Block>
                <BlockHead>
                    <BlockTitle>Basic Examples</BlockTitle>
                    <BlockText
                        >Here is some examples for progess bar.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-col space-y-6">
                            <Progress size="sm">
                                <ProgressBar :progress="5" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar :progress="25" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar :progress="50" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar :progress="75" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar :progress="100" />
                            </Progress>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Different Sizes</BlockTitle>
                    <BlockText>You can change progress thikness.</BlockText>
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-col space-y-6">
                            <Progress size="xs">
                                <ProgressBar :progress="70" />
                            </Progress>
                            <Progress>
                                <ProgressBar :progress="75" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar :progress="80" />
                            </Progress>
                            <Progress size="lg">
                                <ProgressBar :progress="85" />
                            </Progress>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>With Label</BlockTitle>
                    <BlockText
                        >Add labels to your progress bars by placing text within
                        the progress bar.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-col space-y-6">
                            <Progress size="lg">
                                <ProgressBar :progress="50">50%</ProgressBar>
                            </Progress>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Set Background</BlockTitle>
                    <BlockText
                        >Use background utility classes to change the appearance
                        of individual progress bars.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-col space-y-6">
                            <Progress size="sm">
                                <ProgressBar variant="green" :progress="25" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar variant="cyan" :progress="50" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar variant="yellow" :progress="75" />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar variant="red" :progress="100" />
                            </Progress>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Multiple Bars</BlockTitle>
                    <BlockText
                        >Include multiple progress bars in a progress component
                        if you need.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-col space-y-6">
                            <Progress size="sm">
                                <ProgressBar variant="primary" :progress="15" />
                                <ProgressBar variant="green" :progress="30" />
                                <ProgressBar variant="yellow" :progress="20" />
                            </Progress>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Striped Bar</BlockTitle>
                    <BlockText
                        >Use background utility classes to change the appearance
                        of individual progress bars.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-col space-y-6">
                            <Progress size="sm">
                                <ProgressBar
                                    size="sm"
                                    striped
                                    variant="green"
                                    :progress="25"
                                />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar
                                    size="sm"
                                    striped
                                    variant="cyan"
                                    :progress="50"
                                />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar
                                    size="sm"
                                    striped
                                    variant="yellow"
                                    :progress="75"
                                />
                            </Progress>
                            <Progress size="sm">
                                <ProgressBar
                                    size="sm"
                                    striped
                                    variant="red"
                                    :progress="100"
                                />
                            </Progress>
                        </div>
                    </CardBody>
                </Card>
            </Block>
            <Block>
                <BlockHead>
                    <BlockTitle>Animated Stripes</BlockTitle>
                    <BlockText
                        >The striped gradient can also be animated.</BlockText
                    >
                </BlockHead>
                <Card>
                    <CardBody>
                        <div class="flex flex-col space-y-6">
                            <Progress size="sm">
                                <ProgressBar
                                    size="sm"
                                    striped
                                    animated
                                    variant="primary"
                                    :progress="75"
                                />
                            </Progress>
                        </div>
                    </CardBody>
                </Card>
            </Block>
        </div>
    </Layout>
</template>
