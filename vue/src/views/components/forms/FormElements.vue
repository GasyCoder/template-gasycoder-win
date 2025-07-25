<script setup>
import Layout from '@/layout/Main.vue'
import { 
    Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, TextOverline, Icon, 
    Form, FormGroup, FormLabel, Input, InputHint, InputIcon, InputWrap, TextArea, Select, SelectOption, SelectChoice, File
} from "@/components";
</script>
<template>
    <Layout title="Form Layouts">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Form Elements</BlockTitleLg>
              <BlockLeadText>Examples and usage guidelines for form control styles, layout options, and custom components for creating a wide variety of forms. Here’s a quick example to demonstrate form styles, so use these classes to opt into their customized displays.</BlockLeadText>
          </BlockPageHead>
          <Block>
              <BlockHead>
                  <BlockTitle>Form controls</BlockTitle>
                  <BlockText>Here is some example for default form elements</BlockText>
              </BlockHead>
              <Card>
                <CardBody>
                    <TextOverline class="mb-3">Default Style's</TextOverline>
                    <div class="grid grid-flow-dense grid-cols-12 gap-6">
                        <div class="col-span-12 sm:col-span-6">
                            <FormGroup>
                                <FormLabel class="mb-2" for="default-01">Input text Default</FormLabel>
                                <InputWrap>
                                    <Input id="default-01" placeholder="Input placeholder" autoComplete="off" />
                                </InputWrap>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <FormGroup>
                                <FormLabel class="mb-2" for="default-05">Input with Text</FormLabel>
                                <InputWrap>
                                    <InputHint>Usd</InputHint>
                                    <Input id="default-05" placeholder="Input placeholder" autoComplete="off" />
                                </InputWrap>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <FormGroup>
                                <FormLabel class="mb-2" for="default-02">Input with Icon Start</FormLabel>
                                <InputWrap>
                                    <InputIcon icon="user" start/>
                                    <Input id="default-02" icon="start" placeholder="Input placeholder" autoComplete="off" />
                                </InputWrap>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <FormGroup>
                                <FormLabel class="mb-2" for="default-03">Input with Icon End</FormLabel>
                                <InputWrap>
                                    <InputIcon icon="mail" end/>
                                    <Input id="default-03" icon="end" placeholder="Input placeholder" autoComplete="off" />
                                </InputWrap>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 sm:col-span-6 sm:row-span-2 sm:col-start-7 sm:row-start-2">
                            <FormGroup>
                                <FormLabel class="mb-2" for="default-textarea">Textarea</FormLabel>
                                <InputWrap>
                                    <TextArea id="default-textarea" autoComplete="off" defaultValue="Large text area content"/>
                                </InputWrap>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <FormGroup>
                                <FormLabel class="mb-2" for="customFile">Default File Upload</FormLabel>
                                <File id="customFile" multiple>Choose file</File>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 sm:col-span-6 sm:row-span-2">
                            <FormGroup>
                                <FormLabel class="mb-2" for="default-07">Default Select Multiple</FormLabel>
                                <InputWrap>
                                    <Select id="default-07" multiple>
                                        <SelectOption value="option_select0">Default Option</SelectOption>
                                        <SelectOption value="option_select1">Option select name</SelectOption>
                                        <SelectOption value="option_select2">Option select name</SelectOption>
                                        <SelectOption value="option_select2">Option select name</SelectOption>
                                        <SelectOption value="option_select2">Option select name</SelectOption>
                                    </Select>
                                </InputWrap>
                            </FormGroup>
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <FormGroup>
                                <FormLabel class="mb-2" for="default-06">Default Select</FormLabel>
                                <InputWrap>
                                    <Select id="default-06">
                                        <SelectOption value="default_option">Default Option</SelectOption>
                                        <SelectOption value="option_select_name">Option select name</SelectOption>
                                        <SelectOption value="option_select_name">Option select name</SelectOption>
                                    </Select>
                                </InputWrap>
                            </FormGroup>
                        </div>
                    </div>
                </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Select with ChoiceJS</BlockTitle>
                  <BlockText>
                  Take a look at this element's to replace browser default style with <a class="text-primary-500 hover:text-primary-700" target="_blank" href="https://choices-js.github.io/Choices/">ChoiceJS</a>, as its give you a customizable select box with support for searching, tagging, and many other highly used options.
                  </BlockText>
              </BlockHead>
              <Card>
                  <CardBody>
                      <div class="grid grid-flow-dense grid-cols-12 gap-6">
                          <div class="col-span-12 sm:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2">ChoiceJS Default</FormLabel>
                                  <InputWrap>
                                      <SelectChoice id="select_choice_03">
                                          <SelectOption value="default_option">Default Option</SelectOption>
                                          <SelectOption value="option_select_name_1">Option select name 1</SelectOption>
                                          <SelectOption value="option_select_name_2">Option select name 2</SelectOption>
                                      </SelectChoice>
                                  </InputWrap>
                              </FormGroup>
                          </div>
                          <div class="col-span-12 sm:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2">ChoiceJS With Search</FormLabel>
                                  <InputWrap>        
                                      <SelectChoice id="select_choice_01" :search="true" select-one>
                                          <SelectOption value="default_option">Default Option</SelectOption>
                                          <SelectOption value="option_select_name_1">Option select name 1</SelectOption>
                                          <SelectOption value="option_select_name_2">Option select name 2</SelectOption>
                                      </SelectChoice>
                                  </InputWrap>
                              </FormGroup>
                          </div>
                          <div class="col-span-12 sm:col-span-6">
                              <FormGroup>
                                  <FormLabel class="mb-2">ChoiceJS Multiple Select</FormLabel>
                                  <InputWrap>
                                      <SelectChoice id="select_choice_02" multiple placeholder="Select Multiple Options">
                                          <SelectOption value="default_option">Default Option</SelectOption>
                                          <SelectOption value="option_select_name_1">Option select name 1</SelectOption>
                                          <SelectOption value="option_select_name_2">Option select name 2</SelectOption>
                                          <SelectOption value="option_select_name_3">Option select name 3</SelectOption>
                                          <SelectOption value="option_select_name_4">Option select name 4</SelectOption>
                                          <SelectOption value="option_select_name_5">Option select name 5</SelectOption>
                                          <SelectOption value="option_select_name_6">Option select name 6</SelectOption>
                                          <SelectOption value="option_select_name_7">Option select name 7</SelectOption>
                                          <SelectOption value="option_select_name_8">Option select name 8</SelectOption>
                                          <SelectOption value="option_select_name_9">Option select name 9</SelectOption>
                                          <SelectOption value="option_select_name_10">Option select name 10</SelectOption>
                                      </SelectChoice>
                                  </InputWrap>
                              </FormGroup>
                          </div>
                      </div>
                  </CardBody>
              </Card>
          </Block>
        </div>
    </Layout>
</template>