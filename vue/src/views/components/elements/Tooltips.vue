<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Button } from "@/components";
</script>
<template>
    <Layout title="Tooltips">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Tooltips</BlockTitleLg>
              <BlockLeadText>Examples for adding custom tooltips with custom directive.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Examples</BlockTitle>
                <BlockText>Hover over the button below to see tooltips.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-4">
                  <Button v-nk-tooltip="{content:'Tooltip on Top', placement:'top'}" size="rg" variant="primary">Tooltip on Top</Button>
                  <Button v-nk-tooltip="{content:'Tooltip on End', placement:'right', rtlPlacement:'left'}" size="rg" variant="primary">Tooltip on End</Button>
                  <Button v-nk-tooltip="{content:'Tooltip on Bottom', placement:'bottom'}" size="rg" variant="primary">Tooltip on Bottom</Button>
                  <Button v-nk-tooltip="{content:'Tooltip on Start', placement:'left', rtlPlacement:'right'}" size="rg" variant="primary">Tooltip on Start</Button>
                </div>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Inline Examples</BlockTitle>
                <BlockText>Here is an example with inline text.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <p>Your credit card <strong>already expired</strong>. Please enter a valid &amp; up-to-date 
                    <a v-nk-tooltip="{content:'Enter Valid Card', placement:'top'}" class="font-bold transition-all shadow-[0_1px_0] hover:shadow-none shadow-current whitespace-nowrap" href="#link" @click="(e)=> e.preventDefault()">credit card</a>
                   for make deposit.</p>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>