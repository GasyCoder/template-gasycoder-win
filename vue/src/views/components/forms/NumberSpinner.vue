<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, FormGroup, FormLabel, NumberSpinner } from "@/components";
</script>
<template>
    <Layout title="Number Spinner">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Number Spinner</BlockTitleLg>
              <BlockLeadText>Examples and usage guidelines for number spinner with basic number type input.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Number Spinner</BlockTitle>
                <BlockText>With number spinner input you can use <code class="text-pink-600">min, max, step</code> same as <code class="text-pink-600">input[type="number"]</code>.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <FormGroup>
                            <FormLabel class="mb-2">Number Spinner Basic</FormLabel>
                            <NumberSpinner :defaultValue="5" variant="white-outline" />
                        </FormGroup> 
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <FormGroup>
                            <FormLabel class="mb-2">Number Spinner Step (10)</FormLabel>
                            <NumberSpinner :defaultValue="50" :step="10" variant="white-outline" />
                        </FormGroup> 
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <FormGroup>
                            <FormLabel class="mb-2">Number Spinner Min Max (15 - 80)</FormLabel>
                            <NumberSpinner :defaultValue="20" :min="15" :max="80" variant="white-outline" />
                        </FormGroup> 
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <FormGroup>
                            <FormLabel class="mb-2">Number Spinner with Primary Button</FormLabel>
                            <NumberSpinner :defaultValue="20" variant="primary" />
                        </FormGroup> 
                    </div>
                </div>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>