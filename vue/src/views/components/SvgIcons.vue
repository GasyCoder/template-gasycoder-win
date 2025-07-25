<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText } from "@/components"
import { useIconDataStore } from '@/stores/icondata'
const icondata = useIconDataStore()
</script>
<template>
    <Layout title="SvgIcons">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Custom SVG Icons</BlockTitleLg>
              <BlockLeadText>
                <strong>Softnio</strong> team design some beautiful and eyecatching custom icons that helps much in your dashboard. All the icons are in SVG format so it never blury in retina device and you can update color easily be edit SVG code.
              </BlockLeadText>
          </BlockPageHead>
          <Block>
            <div class="grid grid-flow-dense grid-cols-12 gap-7">
              <div v-for="(item, index) in icondata.svgIcons" class="col-span-6 sm:col-span-4 lg:col-span-3" :key="index">
                <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                    <div class="mb-3 h-24 [&>svg]:h-full [&>svg]:mx-auto" v-html="item.svg"></div>
                    <span class="text-xxs text-slate-400">{{item.name}}</span>
                </div>
              </div>
            </div>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>File Manager Icons</BlockTitle>
                <BlockText>All the icons used in file manager app</BlockText>
            </BlockHead>
            <div class="grid grid-flow-dense grid-cols-12 gap-7">
                <div v-for="(item, index) in icondata.fileManagerIcons" class="col-span-6 sm:col-span-4 lg:col-span-3" :key="index">
                  <div class="border rounded-md bg-white dark:bg-gray-950 border-gray-300 dark:border-gray-900 h-full text-center px-4 py-5">
                      <div class="mb-3 h-24 [&>svg]:h-full [&>svg]:mx-auto" v-html="item.svg"></div>
                      <span class="text-xxs text-slate-400">{{item.name}}</span>
                  </div>
                </div>
            </div>
          </Block>
        </div>
    </Layout>
</template>