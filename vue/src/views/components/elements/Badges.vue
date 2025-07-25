<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Badge, BadgeDot, TextOverline } from "@/components";
</script>
<template>
    <Layout title="Badges">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Badges</BlockTitleLg>
              <BlockLeadText>Documentation and examples for badges, our small count and labeling component.</BlockLeadText>
          </BlockPageHead>

          <Block>
            <BlockHead>
                <BlockTitle>Example with Variations</BlockTitle>
                <BlockText>We created predefined badges styles with states appearance.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <TextOverline class="first:mt-0 mt-6 mb-3">Default Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary">Primary</Badge>
                    <Badge variant="green">Success</Badge>
                    <Badge variant="yellow">Warning</Badge>
                    <Badge variant="red">Danger</Badge>
                    <Badge variant="cyan">Info</Badge>
                    <Badge variant="dark">Dark</Badge>
                    <Badge variant="secondary">Gray</Badge>
                    <Badge variant="light">Light</Badge>
                </div>
                <TextOverline class="first:mt-0 mt-6 mb-3">Pill Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary" pill>Primary</Badge>
                    <Badge variant="green" pill>Success</Badge>
                    <Badge variant="yellow" pill>Warning</Badge>
                    <Badge variant="red" pill>Danger</Badge>
                    <Badge variant="cyan" pill>Info</Badge>
                    <Badge variant="dark" pill>Dark</Badge>
                    <Badge variant="secondary" pill>Gray</Badge>
                    <Badge variant="light" pill>Light</Badge>
                </div>
                <TextOverline class="first:mt-0 mt-6 mb-3">Outline Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary-outline">Primary</Badge>
                    <Badge variant="green-outline">Success</Badge>
                    <Badge variant="yellow-outline">Warning</Badge>
                    <Badge variant="red-outline">Danger</Badge>
                    <Badge variant="cyan-outline">Info</Badge>
                    <Badge variant="dark-outline">Dark</Badge>
                    <Badge variant="secondary-outline">Gray</Badge>
                    <Badge variant="light-outline">Light</Badge>
                </div>
                <TextOverline class="first:mt-0 mt-6 mb-3">Outline Pill Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary-outline" pill>Primary</Badge>
                    <Badge variant="green-outline" pill>Success</Badge>
                    <Badge variant="yellow-outline" pill>Warning</Badge>
                    <Badge variant="red-outline" pill>Danger</Badge>
                    <Badge variant="cyan-outline" pill>Info</Badge>
                    <Badge variant="dark-outline" pill>Dark</Badge>
                    <Badge variant="secondary-outline" pill>Gray</Badge>
                    <Badge variant="light-outline" pill>Light</Badge>
                </div>
              </CardBody>
            </Card>
          </Block>

          <Block>
            <BlockHead>
                <BlockTitle>Dot Style</BlockTitle>
                <BlockText>Here is a different appearance for badges with dot.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-3">
                    <BadgeDot variant="primary">Primary</BadgeDot>
                    <BadgeDot variant="green">Success</BadgeDot>
                    <BadgeDot variant="yellow">Warning</BadgeDot>
                    <BadgeDot variant="red">Danger</BadgeDot>
                    <BadgeDot variant="cyan">Info</BadgeDot>
                    <BadgeDot variant="dark">Dark</BadgeDot>
                    <BadgeDot variant="secondary">Gray</BadgeDot>
                    <BadgeDot variant="light">Light</BadgeDot>
                </div>
              </CardBody>
            </Card>
          </Block>

          <Block>
            <BlockHead>
                <BlockTitle>Example with Pale color</BlockTitle>
                <BlockText>Here is badges with pale colors variants.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
              <TextOverline class="first:mt-0 mt-6 mb-3">Default Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary-pale">Primary</Badge>
                    <Badge variant="green-pale">Success</Badge>
                    <Badge variant="yellow-pale">Warning</Badge>
                    <Badge variant="red-pale">Danger</Badge>
                    <Badge variant="cyan-pale">Info</Badge>
                    <Badge variant="dark-pale">Dark</Badge>
                    <Badge variant="secondary-pale">Gray</Badge>
                    <Badge variant="light-pale">Light</Badge>
                </div>
                <TextOverline class="first:mt-0 mt-6 mb-3">Pill Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary-pale" pill>Primary</Badge>
                    <Badge variant="green-pale" pill>Success</Badge>
                    <Badge variant="yellow-pale" pill>Warning</Badge>
                    <Badge variant="red-pale" pill>Danger</Badge>
                    <Badge variant="cyan-pale" pill>Info</Badge>
                    <Badge variant="dark-pale" pill>Dark</Badge>
                    <Badge variant="secondary-pale" pill>Gray</Badge>
                    <Badge variant="light-pale" pill>Light</Badge>
                </div>
                <TextOverline class="first:mt-0 mt-6 mb-3">Outline Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary-pale-outline">Primary</Badge>
                    <Badge variant="green-pale-outline">Success</Badge>
                    <Badge variant="yellow-pale-outline">Warning</Badge>
                    <Badge variant="red-pale-outline">Danger</Badge>
                    <Badge variant="cyan-pale-outline">Info</Badge>
                    <Badge variant="dark-pale-outline">Dark</Badge>
                    <Badge variant="secondary-pale-outline">Gray</Badge>
                    <Badge variant="light-pale-outline">Light</Badge>
                </div>
                <TextOverline class="first:mt-0 mt-6 mb-3">Outline Pill Style</TextOverline>
                <div class="flex flex-wrap gap-3">
                    <Badge variant="primary-pale-outline" pill>Primary</Badge>
                    <Badge variant="green-pale-outline" pill>Success</Badge>
                    <Badge variant="yellow-pale-outline" pill>Warning</Badge>
                    <Badge variant="red-pale-outline" pill>Danger</Badge>
                    <Badge variant="cyan-pale-outline" pill>Info</Badge>
                    <Badge variant="dark-pale-outline" pill>Dark</Badge>
                    <Badge variant="secondary-pale-outline" pill>Gray</Badge>
                    <Badge variant="light-pale-outline" pill>Light</Badge>
                </div>
              </CardBody>
            </Card>
          </Block>

          <Block>
            <BlockHead>
                <BlockTitle>Example with Sizes</BlockTitle>
                <BlockText>You can make badge small or as big as you need.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <TextOverline class="first:mt-0 mt-6 mb-3">Default Style</TextOverline>
                <div class="flex flex-wrap items-start gap-4">
                    <Badge size="3xl" variant="primary">Primary</Badge>
                    <Badge size="2xl" variant="primary">Primary</Badge>
                    <Badge size="xl" variant="primary">Primary</Badge>
                    <Badge size="lg" variant="primary">Primary</Badge>
                    <Badge size="rg" variant="primary">Primary</Badge>
                </div>
                <TextOverline class="first:mt-0 mt-6 mb-3">Pill Style</TextOverline>
                <div class="flex flex-wrap items-start gap-4">
                    <Badge size="3xl" variant="primary" pill>Primary</Badge>
                    <Badge size="2xl" variant="primary" pill>Primary</Badge>
                    <Badge size="xl" variant="primary" pill>Primary</Badge>
                    <Badge size="lg" variant="primary" pill>Primary</Badge>
                    <Badge size="rg" variant="primary" pill>Primary</Badge>
                </div>
              </CardBody>
            </Card>
          </Block>

        </div>
    </Layout>
</template>