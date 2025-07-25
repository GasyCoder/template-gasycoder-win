<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText,
  DatePicker, DateRangePicker, TimePicker, FormGroup, FormLabel, Input, InputWrap, InputIcon } from "@/components"
</script>
<template>
    <Layout title="Date & Time Picker">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Date & Time Picker</BlockTitleLg>
              <BlockLeadText>Examples and usage guidelines for date and time picker for Form</BlockLeadText>
          </BlockPageHead>
          <Block>
              <BlockHead>
                  <BlockTitle>Date Picker</BlockTitle>
                  <BlockText>Custom datepicker with <a class="text-primary-600 hover:text-primary-700" target="_blank" href="https://mymth.github.io/vanillajs-datepicker">'vanillajs-datepicker</a>. and time picker from nioapp custom script</BlockText>
              </BlockHead>
              <Card>
                <CardBody>
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <FormGroup>
                                <FormLabel htmlFor="datePicker1" class="mb-2">Datepicker</FormLabel>
                                <DatePicker id="datePicker1" placeholder="mm/dd/yyyy" />
                                <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <FormGroup>
                                <FormLabel htmlFor="datePicker2" class="mb-2">Datepicker Alt</FormLabel>
                                <DatePicker :startView="2" id="datePicker2" placeholder="mm/dd/yyyy" />
                                <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <FormGroup>
                                <FormLabel htmlFor="datePicker3" class="mb-2">Datepicker with Start Icon</FormLabel>
                                <InputWrap>
                                    <InputIcon icon="calendar" start/>
                                    <DatePicker id="datePicker3" placeholder="mm/dd/yyyy" icon="start" />
                                </InputWrap>
                                <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <FormGroup>
                                <FormLabel htmlFor="datePicker4" class="mb-2">Datepicker with End Icon</FormLabel>
                                <InputWrap>
                                    <InputIcon icon="calendar-alt" end/>
                                    <DatePicker id="datePicker4" placeholder="mm/dd/yyyy" icon="end" />
                                </InputWrap>
                                <div class="block text-xs text-slate-400 italic mt-2">Date format <code class="text-pink-400">mm/dd/yyyy</code></div>
                            </FormGroup>
                        </div>
                    </div>
                </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Date Range Picker</BlockTitle>
                  <BlockText>Here is an  example for date range picker</BlockText>
              </BlockHead>
              <Card>
                <CardBody>
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <FormGroup>
                                <FormLabel class="mb-2">Datepicker Range</FormLabel>
                                <DateRangePicker id="dateRangePicker1" placeholder="mm/dd/yyyy" />
                            </FormGroup>
                        </div>
                    </div>
                </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Time Picker</BlockTitle>
                  <BlockText>Use <code class="text-pink-400">PickerTime</code> for time Picker</BlockText>
              </BlockHead>
              <Card>
                <CardBody>
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 md:col-span-6">
                            <FormGroup>
                                <FormLabel htmlFor="timePicker1" class="mb-2">Time Picker</FormLabel>
                                <TimePicker id="timePicker1" placeholder="hh:mm" />
                            </FormGroup>
                        </div>
                        <div class="col-span-12 md:col-span-6">
                            <FormGroup>
                                <FormLabel htmlFor="timePicker2" class="mb-2">Time Picker (24hour)</FormLabel>
                                <TimePicker id="timePicker2" :format="24" placeholder="hh:mm" />
                            </FormGroup>
                        </div>
                    </div>
                </CardBody>
              </Card>
          </Block>
        </div>
    </Layout>
</template>