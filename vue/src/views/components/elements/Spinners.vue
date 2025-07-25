<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Button, Spinner, SpinnerGrow } from "@/components";
</script>
<template>
    <Layout title="Spinner">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Spinner</BlockTitleLg>
              <BlockLeadText>DashWind includes couple of predefined spinner styles, to display loading status.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Example</BlockTitle>
            </BlockHead>
            <Card>
              <CardBody>
                <Spinner variant="light" />
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Colors</BlockTitle>
                <BlockText>The border spinner uses its border-color, meaning you can customize the color with border color utilities.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-3">
                  <Spinner variant="primary" />
                  <Spinner variant="secondary" />
                  <Spinner variant="green" />
                  <Spinner variant="red" />
                  <Spinner variant="yellow" />
                  <Spinner variant="cyan" />
                  <Spinner variant="light" />
                  <Spinner variant="dark" />
                </div>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Growing spinner</BlockTitle>
                <BlockText>If you don’t fancy a border spinner, switch to the grow spinner. While it doesn’t technically spin, it does repeatedly grow!</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <SpinnerGrow variant="light" />
              </CardBody>
            </Card>
          </Block>
          <Block>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-3">
                  <SpinnerGrow variant="primary" />
                  <SpinnerGrow variant="secondary" />
                  <SpinnerGrow variant="green" />
                  <SpinnerGrow variant="red" />
                  <SpinnerGrow variant="yellow" />
                  <SpinnerGrow variant="cyan" />
                  <SpinnerGrow variant="light" />
                  <SpinnerGrow variant="dark" />
                </div>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Size</BlockTitle>
                <BlockText>Change h-[value], w-[value] to make a smaller/larger spinner that can quickly be used within other components.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-12">
                  <div class="flex flex-wrap gap-3">
                    <Spinner variant="light" size="sm" />
                    <Spinner variant="light" size="rg" />
                    <Spinner variant="light" size="lg" />
                  </div>
                  <div class="flex flex-wrap gap-3">
                    <SpinnerGrow variant="light" size="sm" />
                    <SpinnerGrow variant="light" size="rg" />
                    <SpinnerGrow variant="light" size="lg" />
                  </div>
                </div>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>With Buttons</BlockTitle>
                <BlockText>Use spinners within buttons to indicate an action is currently processing or taking place. You may also swap the text out of the spinner element and utilize button text as needed.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-8">
                  <div class="flex flex-wrap gap-3">
                    <Button class="opacity-60" variant="primary" size="rg" icon>
                      <Spinner variant="white" size="sm" />
                    </Button>
                    <Button class="opacity-60" variant="primary" size="rg">
                      <Spinner variant="white" size="sm" />
                      <span class="ms-3">loading ...</span>
                    </Button>
                  </div>
                  <div class="flex flex-wrap gap-3">
                    <Button class="opacity-60" variant="primary" size="rg" icon>
                      <SpinnerGrow variant="white" size="sm" />
                    </Button>
                    <Button class="opacity-60" variant="primary" size="rg">
                      <SpinnerGrow variant="white" size="sm" />
                      <span class="ms-3">loading ...</span>
                    </Button>
                  </div>
                </div>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>