<script setup>
import { MenuItem } from '@headlessui/vue'
import Layout from '@/layout/Main.vue'
import { 
  Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, Dropdown, Icon, FormGroup, FormLabel, Input, InputGroup, InputAddon, TextArea, CheckBox, Radio, Button, Select, SelectOption, File
} from "@/components";
</script>
<template>
    <Layout title="Input Group">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Input Group</BlockTitleLg>
              <BlockLeadText>Examples and usage guidelines for input group. Extend form controls by adding text, buttons, or button groups on either side of text inputs, custom selects, and custom file inputs.</BlockLeadText>
          </BlockPageHead>
          <Block>
              <BlockHead>
                  <BlockTitle>Basic example</BlockTitle>
                  <BlockText>Place one add-on or button on either side of an input. You may also place one on both sides of an input. We do not support multiple form-controls in a single input group and <code class="text-primary-600">&lt;label&gt;</code>s must come outside the input group.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon> @ </InputAddon>
                                  <Input id="default-01" placeholder="Username" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup responsive="xs">
                                  <Input id="default-02" placeholder="Recipient's username" />
                                  <InputAddon>@example.com</InputAddon>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <FormLabel class="mb-2" for="default-03">Your URL</FormLabel>
                              <InputGroup responsive="xs">
                                  <InputAddon>https://example.com/users/</InputAddon>
                                  <Input id="default-03" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon>$</InputAddon>
                                  <Input id="default-04" placeholder="Username" />
                                  <InputAddon>.00</InputAddon>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup responsive="xs">
                                  <InputAddon size="lg"> <div class="whitespace-nowrap">With textarea</div> </InputAddon>
                                  <TextArea id="default-textarea"></TextArea>
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Sizing</BlockTitle>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon size="sm"> Small </InputAddon>
                                  <Input size="sm" id="size-01" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon> Default </InputAddon>
                                  <Input id="size-02" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon size="lg"> Large </InputAddon>
                                  <Input size="lg" id="size-03" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Checkboxes and radios</BlockTitle>
                  <BlockText>Place any checkbox or radio option within an input group’s addon instead of text.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon>
                                    <CheckBox size="sm" id="customCheck1" />
                                  </InputAddon>
                                  <Input id="check-01" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon>
                                    <Radio size="sm" id="customRadio1" />
                                  </InputAddon>
                                  <Input id="radio-01" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Multiple inputs</BlockTitle>
                  <BlockText>While multiple <code class="text-primary-600">&lt;input&gt;</code>s are supported visually, validation styles are only available for input groups with a single <code class="text-primary-600">&lt;input&gt;</code>.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup responsive="sm">
                                  <InputAddon> <div class="whitespace-nowrap">First and last name</div> </InputAddon>
                                  <Input id="default-05-1" />
                                  <Input id="default-05-2" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Multiple addons</BlockTitle>
                  <BlockText>Multiple add-ons are supported and can be mixed with checkbox and radio input versions.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon>$</InputAddon>
                                  <InputAddon>0.00</InputAddon>
                                  <Input id="default-06" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Input id="default-07" />
                                  <InputAddon>$</InputAddon>
                                  <InputAddon>0.00</InputAddon>
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Button addons</BlockTitle>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Button size="rg" variant="primary-pale-outline">Button</Button>
                                  <Input id="default-08" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Input id="default-09" />
                                  <Button size="rg" variant="primary-pale-outline">Button</Button>
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Buttons with dropdowns</BlockTitle>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                <Dropdown placement="bottom-start" rtlPlacement="bottom-end" class="rounded" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]" buttonClass="rounded-[inherit]" >
                                    <template #button>
                                      <Button size="rg" variant="primary-pale-outline" class="rounded-[inherit]">
                                        Drop <Icon class="ms-1 -me-1 text-xl leading-4.5" name="chevron-down" />
                                      </Button>
                                    </template>
                                    <template #content>
                                      <ul class="py-2">
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>List Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Another Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>More Action</span>
                                            </MenuItem>
                                          </li>
                                      </ul>
                                    </template>
                                </Dropdown>
                                  <Input id="default-08" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Input id="default-09" />
                                  <Dropdown placement="bottom-end" rtlPlacement="bottom-start" class="rounded" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]" buttonClass="rounded-[inherit]" >
                                    <template #button>
                                      <Button size="rg" variant="primary-pale-outline" class="rounded-[inherit]">
                                        Drop <Icon class="ms-1 -me-1 text-xl leading-4.5" name="chevron-down" />
                                      </Button>
                                    </template>
                                    <template #content>
                                      <ul class="py-2">
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>List Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Another Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>More Action</span>
                                            </MenuItem>
                                          </li>
                                      </ul>
                                    </template>
                                </Dropdown>
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Segmented buttons</BlockTitle>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Button size="rg" variant="primary-pale-outline">Action</Button>
                                  <Dropdown placement="bottom-start" rtlPlacement="bottom-end" class="rounded" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]" buttonClass="rounded-[inherit]" >
                                    <template #button>
                                      <Button size="rg" variant="primary-pale-outline" class="rounded-[inherit]">
                                        Drop <Icon class="ms-1 -me-1 text-xl leading-4.5" name="chevron-down" />
                                      </Button>
                                    </template>
                                    <template #content>
                                      <ul class="py-2">
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>List Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Another Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>More Action</span>
                                            </MenuItem>
                                          </li>
                                      </ul>
                                    </template>
                                </Dropdown>
                                  <Input id="default-08" />
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Input id="default-09" />
                                  <Button size="rg" variant="primary-pale-outline">Action</Button>
                                  <Dropdown placement="bottom-end" rtlPlacement="bottom-start" class="rounded" contentClass="border border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-950 rounded-md shadow min-w-[180px]" buttonClass="rounded-[inherit]" >
                                    <template #button>
                                      <Button size="rg" variant="primary-pale-outline" class="rounded-[inherit]">
                                        Drop <Icon class="ms-1 -me-1 text-xl leading-4.5" name="chevron-down" />
                                      </Button>
                                    </template>
                                    <template #content>
                                      <ul class="py-2">
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>List Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>Another Action</span>
                                            </MenuItem>
                                          </li>
                                          <li>
                                            <MenuItem as="button" class="w-full relative px-5 py-2.5 flex items-center rounded-[inherit] text-xs leading-5 font-medium text-slate-600 dark:text-slate-300 hover:text-primary-600 hover:bg-slate-50 hover:dark:bg-gray-900 transition-all duration-300">
                                              <span>More Action</span>
                                            </MenuItem>
                                          </li>
                                      </ul>
                                    </template>
                                </Dropdown>
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Custom select</BlockTitle>
                  <BlockText>Input groups include support for custom selects inputs. Browser default versions of these are not supported.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon>Options</InputAddon>
                                  <Select id="default-10">
                                      <SelectOption value="default_option">Default Option</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                  </Select>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Select id="default-11">
                                      <SelectOption value="default_option">Default Option</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                  </Select>
                                  <InputAddon>Options</InputAddon>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Button size="rg" variant="primary-pale-outline">Button</Button>
                                  <Select id="default-12">
                                      <SelectOption value="default_option">Default Option</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                  </Select>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Select id="default-13">
                                      <SelectOption value="default_option">Default Option</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                      <SelectOption value="option_select_name">Option select name</SelectOption>
                                  </Select>
                                  <Button size="rg" variant="primary-pale-outline">Button</Button>
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Custom file input</BlockTitle>
                  <BlockText>Input groups include support for custom file inputs. Browser default versions of these are not supported.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="grid grid-flow-dense grid-cols-12 gap-6">
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <InputAddon class="z-[3]">Upload</InputAddon>
                                  <File id="customFile1">Choose file</File>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <File id="customFile2">Choose file</File>
                                  <InputAddon class="z-[3]">Upload</InputAddon>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <Button size="rg" variant="primary-pale-outline" class="z-[3]">Button</Button>
                                  <File id="customFile3">Choose file</File>
                              </InputGroup>
                          </FormGroup>
                      </div>
                      <div class="col-span-12">
                          <FormGroup>
                              <InputGroup>
                                  <File id="customFile4">Choose file</File>
                                  <Button size="rg" variant="primary-pale-outline" class="z-[3]">Button</Button>
                              </InputGroup>
                          </FormGroup>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
        </div>
    </Layout>
</template>