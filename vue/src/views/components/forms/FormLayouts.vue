<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, FormGroup, FormLabel, Input, InputWrap, CheckBox, TextArea, Button, Switch, Radio } from "@/components";
</script>
<template>
    <Layout title="Form Layouts">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Form Layouts</BlockTitleLg>
              <BlockLeadText>Form is most esential part of your project. We styled out nicely so you can build your form so quickly.</BlockLeadText>
          </BlockPageHead>
          <Block>
              <BlockHead>
                  <BlockTitle>Basic Form Style - S1</BlockTitle>
                  <BlockText>Below example helps you to build your own form nice way.</BlockText>
              </BlockHead>
              <div class="grid grid-flow-dense grid-cols-12 gap-6">
                  <div class="col-span-12 lg:col-span-6">
                      <Card class="h-full">
                        <CardBody>
                            <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Customer Info</h5>
                            <Form>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="ciFullName">Full Name</FormLabel>
                                    <InputWrap>
                                        <Input id="ciFullName" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="ciEmailAddress">Email address</FormLabel>
                                    <InputWrap>
                                        <Input id="ciEmailAddress" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="ciPhoneNo">Phone No</FormLabel>
                                    <InputWrap>
                                        <Input id="ciPhoneNo" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2">Communication</FormLabel>
                                    <div class="flex flex-wrap gap-4 pt-2">
                                        <CheckBox id="ciEmail" size="sm">Email</CheckBox>
                                        <CheckBox id="ciSMS" size="sm">SMS</CheckBox>
                                        <CheckBox id="ciPhone" size="sm">Phone</CheckBox>
                                    </div>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="ciAmount">Amount</FormLabel>
                                    <InputWrap>
                                        <Input id="ciAmount" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2">Payment Methods</FormLabel>
                                    <div class="flex flex-wrap gap-4 pt-2">
                                        <CheckBox id="ciCard" size="sm">Card</CheckBox>
                                        <CheckBox id="ciBitcoin" size="sm">Bitcoin</CheckBox>
                                        <CheckBox id="ciCash" size="sm">Cash</CheckBox>
                                    </div>
                                </FormGroup>
                                <FormGroup>
                                    <Button size="lg" variant="primary">Save Informations</Button>
                                </FormGroup>
                            </Form>
                        </CardBody>
                      </Card>
                  </div>
                  <div class="col-span-12 lg:col-span-6">
                      <Card class="h-full">
                        <CardBody>
                            <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Contact Form</h5>
                            <Form action="#">
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="cfFullName">Full Name</FormLabel>
                                    <InputWrap>
                                        <Input id="cfFullName" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="cfEmailAddress">Email address</FormLabel>
                                    <InputWrap>
                                        <Input id="cfEmailAddress" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="cfPhoneNo">Phone No</FormLabel>
                                    <InputWrap>
                                        <Input id="cfPhoneNo" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="cfSubject">Subject</FormLabel>
                                    <InputWrap>
                                        <Input id="cfSubject" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <FormLabel class="mb-2" htmlFor="ciMessage">Message</FormLabel>
                                    <InputWrap>
                                        <TextArea id="ciMessage" />
                                    </InputWrap>
                                </FormGroup>
                                <FormGroup>
                                    <Button size="lg" variant="primary">Save Informations</Button>
                                </FormGroup>
                            </Form>
                        </CardBody>
                      </Card>
                  </div>
              </div>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Basic Form Style - S2</BlockTitle>
                  <BlockText>You can alow display form in column as example below.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Customer Info S2</h5>
                  <Form action="#">
                      <div class="grid grid-flow-dense grid-cols-12 gap-6">
                          <div class="col-span-12 lg:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2" for="cis2FullName">Full Name</FormLabel>
                                  <InputWrap>
                                      <Input id="cis2FullName" />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                          <div class="col-span-12 lg:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2" for="cis2EmailAddress">Email address</FormLabel>
                                  <InputWrap>
                                      <Input id="cis2EmailAddress" />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                          <div class="col-span-12 lg:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2" for="cis2PhoneNo">Phone No</FormLabel>
                                  <InputWrap>
                                      <Input id="cis2PhoneNo" />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                          <div class="col-span-12 lg:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2" for="cis2Amount">Amount</FormLabel>
                                  <InputWrap>
                                      <Input id="cis2Amount" />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                          <div class="col-span-12 lg:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2">Communication</FormLabel>
                                  <div class="flex flex-wrap gap-4">
                                      <CheckBox id="cis2Email" size="sm">Email</CheckBox>
                                      <CheckBox id="cis2SMS" size="sm">SMS</CheckBox>
                                      <CheckBox id="cis2Phone" size="sm">Phone</CheckBox>
                                  </div>
                              </FormGroup>
                          </div>
                          <div class="col-span-12 lg:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2">Payment Methods</FormLabel>
                                  <div class="flex flex-wrap gap-4">
                                      <CheckBox id="cis2Card" size="sm">Card</CheckBox>
                                      <CheckBox id="cis2Bitcoin" size="sm">Bitcoin</CheckBox>
                                      <CheckBox id="cis2Cash" size="sm">Cash</CheckBox>
                                  </div>
                              </FormGroup>
                          </div>
                          <div class="col-span-12">
                              <FormGroup>
                              <Button size="lg" variant="primary">Save Informations</Button>
                              </FormGroup>
                          </div>
                      </div>
                  </Form>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Setting Form Style</BlockTitle>
                  <BlockText>You can make style out your setting related form as per below example.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <h5 class="text-xl leading-tighter font-heading font-bold mb-5">Website Setting</h5>
                  <Form action="#" class="flex flex-col gap-y-4">
                      <div class="flex flex-wrap items-center -m-2">
                          <div class="w-full lg:w-5/12 p-2">
                              <FormGroup>
                                  <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" htmlFor="wsSiteName">Site Name</label>
                                  <span class="block italic text-xs text-slate-400">Specify the name of your website.</span>
                              </FormGroup>
                          </div>
                          <div class="w-full lg:w-7/12 p-2">
                              <FormGroup>
                                  <InputWrap>
                                      <Input id="wsSiteName" defaultValue="DashWind Admin Template" />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                      </div>
                      <div class="flex flex-wrap items-center -m-2">
                          <div class="w-full lg:w-5/12 p-2">
                              <FormGroup>
                                  <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" htmlFor="wsSiteEmail">Site Email</label>
                                  <span class="block italic text-xs text-slate-400">Specify the email address of your website.</span>
                              </FormGroup>
                          </div>
                          <div class="w-full lg:w-7/12 p-2">
                              <FormGroup>
                                  <InputWrap>
                                      <Input id="wsSiteEmail" defaultValue="info@softnio.com" />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                      </div>
                      <div class="flex flex-wrap items-center -m-2">
                          <div class="w-full lg:w-5/12 p-2">
                              <FormGroup>
                                  <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" htmlFor="wsSiteCopyright">Site Copyright</label>
                                  <span class="block italic text-xs text-slate-400">Copyright information of your website.</span>
                              </FormGroup>
                          </div>
                          <div class="w-full lg:w-7/12 p-2">
                              <FormGroup>
                                  <InputWrap>
                                      <Input id="wsSiteCopyright" defaultValue="&copy; 2023, DashWind. All Rights Reserved." />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                      </div>
                      <div class="flex flex-wrap items-center -m-2">
                          <div class="w-full lg:w-5/12 p-2">
                              <FormGroup>
                                  <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Allow Registration</label>
                                  <span class="block italic text-xs text-slate-400">Enable or disable registration from site.</span>
                              </FormGroup>
                          </div>
                          <div class="w-full lg:w-7/12 p-2">
                              <FormGroup>
                                  <div class="flex flex-wrap items-center gap-5">
                                      <Radio name="registerOption" id="registrationOptionEnable">Enable</Radio>
                                      <Radio name="registerOption" id="registrationOptionDisable">Disable</Radio>
                                      <Radio name="registerOption" id="registrationOptionOnRequest">On Request</Radio>
                                  </div>
                              </FormGroup>
                          </div>
                      </div>
                      <div class="flex flex-wrap items-center -m-2">
                          <div class="w-full lg:w-5/12 p-2">
                              <FormGroup>
                                  <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2" htmlFor="wsMainWebsite">Main Website</label>
                                  <span class="block italic text-xs text-slate-400">Specify the URL if your main website is external.</span>
                              </FormGroup>
                          </div>
                          <div class="w-full lg:w-7/12 p-2">
                              <FormGroup>
                                  <InputWrap>
                                      <Input id="wsMainWebsite" defaultValue="https://www.softnio.com" />
                                  </InputWrap>
                              </FormGroup>
                          </div>
                      </div>
                      <div class="flex flex-wrap items-center -m-2">
                          <div class="w-full lg:w-5/12 p-2">
                              <FormGroup>
                                  <label class="inline-block text-sm font-medium text-slate-700 dark:text-white mb-2">Maintanance Mode</label>
                                  <span class="block italic text-xs text-slate-400">Enable to make website make offline.</span>
                              </FormGroup>
                          </div>
                          <div class="w-full lg:w-7/12 p-2">
                              <FormGroup>
                                  <Switch id="offline">Offline</Switch>
                              </FormGroup>
                          </div>
                      </div>
                      <div class="flex flex-wrap items-center -m-2">
                          <div class="w-full lg:w-7/12 p-2 lg:ms-[calc(100%/12*5)]">
                              <FormGroup>
                                  <Button size="lg" variant="primary">Update</Button>
                              </FormGroup>
                          </div>
                      </div>
                  </Form>
              </CardBody>
              </Card>
          </Block>
        </div>
    </Layout>
</template>