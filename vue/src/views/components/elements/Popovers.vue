<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Popover, Button } from "@/components";
</script>
<template>
    <Layout title="Popovers">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Popovers</BlockTitleLg>
              <BlockLeadText>We are using  <a target="_blank" class="text-primary-600 hover:text-primary-800" href="https://headlessui.com/v1/vue/popover">HeadlessUI Popover</a> component.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Basic Examples</BlockTitle>
                <BlockText>Click the following button to see the basic example of popover.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <Popover placement="right" rtlPlacement="left">
                  <template #button>
                    <Button class="!font-body" variant="primary" size="lg">Click to toggle popover</Button>
                  </template>
                  <template #content>
                    <h3 class="px-3 py-2 border-b border-gray-300 dark:border-gray-900 bg-gray-100 dark:bg-gray-900 text-base leading-5 font-bold font-heading text-slate-700 dark:text-white rounded-t-[inherit]">Popover title</h3>
                    <div class="px-3 py-2 text-sm leading-6">And here's some amazing content. It's very engaging. Right?</div>
                  </template>
                </Popover>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Directional Examples</BlockTitle>
                <BlockText>Click the following buttons to see directional example of popover.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-4">
                    <Popover placement="top" >
                      <template #button>
                        <Button class="!font-body" variant="primary" size="lg">Popover on top</Button>
                      </template>
                      <template #content>
                        <div class="px-3 py-2 text-sm leading-6">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
                      </template>
                    </Popover>
                    <Popover placement="right" rtlPlacement="left" >
                      <template #button>
                        <Button class="!font-body" variant="primary" size="lg">Popover on End</Button>
                      </template>
                      <template #content>
                        <div class="px-3 py-2 text-sm leading-6">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
                      </template>
                    </Popover>
                    <Popover placement="bottom" >
                      <template #button>
                        <Button class="!font-body" variant="primary" size="lg">Popover on bottom</Button>
                      </template>
                      <template #content>
                        <div class="px-3 py-2 text-sm leading-6">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
                      </template>
                    </Popover>
                    <Popover placement="left" rtlPlacement="right" >
                      <template #button>
                        <Button class="!font-body" variant="primary" size="lg">Popover on Start</Button>
                      </template>
                      <template #content>
                        <div class="px-3 py-2 text-sm leading-6">Vivamus sagittis lacus vel augue laoreet rutrum faucibus.</div>
                      </template>
                    </Popover>
                </div>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>