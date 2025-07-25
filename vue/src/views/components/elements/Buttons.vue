<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, TextOverline, Button, Icon } from "@/components";
</script>
<template>
    <Layout title="Buttons">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Buttons</BlockTitleLg>
              <BlockLeadText>Documentation and examples of button styles for multiple sizes, variant, and more.</BlockLeadText>
          </BlockPageHead>
          <Block>
              <BlockHead>
                  <BlockTitle>Example with Variations</BlockTitle>
                  <BlockText>DashWind includes several predefined button styles, each serving its own semantic purpose, with a few extras thrown in for more control.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Regular Buttons</h5>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Primary</TextOverline>
                          <Button variant="primary" size="rg">Primary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Secondary</TextOverline>
                          <Button variant="secondary" size="rg">Secondary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Success</TextOverline>
                          <Button variant="green" size="rg">Success</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Danger</TextOverline>
                          <Button variant="red" size="rg">Danger</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Warning</TextOverline>
                          <Button variant="yellow" size="rg">Warning</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Info</TextOverline>
                          <Button variant="cyan" size="rg">Info</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Light</TextOverline>
                          <Button variant="light" size="rg">Light</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Dark</TextOverline>
                          <Button variant="dark" size="rg">Dark</Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <Card>
              <CardBody>
                  <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Pale Buttons</h5>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Primary</TextOverline>
                          <Button variant="primary-pale" size="rg">Primary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Secondary</TextOverline>
                          <Button variant="secondary-pale" size="rg">Secondary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Success</TextOverline>
                          <Button variant="green-pale" size="rg">Success</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Danger</TextOverline>
                          <Button variant="red-pale" size="rg">Danger</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Warning</TextOverline>
                          <Button variant="yellow-pale" size="rg">Warning</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Info</TextOverline>
                          <Button variant="cyan-pale" size="rg">Info</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Light</TextOverline>
                          <Button variant="light-pale" size="rg">Light</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Dark</TextOverline>
                          <Button variant="dark-pale" size="rg">Dark</Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <Card>
              <CardBody>
                  <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Outlined Buttons</h5>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Primary</TextOverline>
                          <Button variant="primary-outline" size="rg">Primary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Secondary</TextOverline>
                          <Button variant="secondary-outline" size="rg">Secondary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Success</TextOverline>
                          <Button variant="green-outline" size="rg">Success</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Danger</TextOverline>
                          <Button variant="red-outline" size="rg">Danger</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Warning</TextOverline>
                          <Button variant="yellow-outline" size="rg">Warning</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Info</TextOverline>
                          <Button variant="cyan-outline" size="rg">Info</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Light</TextOverline>
                          <Button variant="light-outline" size="rg">Light</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Dark</TextOverline>
                          <Button variant="dark-outline" size="rg">Dark</Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <Card>
              <CardBody>
                  <h5 class="font-heading font-bold text-base text-slate-700 dark:text-white mb-4">Outlined Buttons</h5>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Primary</TextOverline>
                          <Button variant="primary-pale-outline" size="rg">Primary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Secondary</TextOverline>
                          <Button variant="secondary-pale-outline" size="rg">Secondary</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Success</TextOverline>
                          <Button variant="green-pale-outline" size="rg">Success</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Danger</TextOverline>
                          <Button variant="red-pale-outline" size="rg">Danger</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Warning</TextOverline>
                          <Button variant="yellow-pale-outline" size="rg">Warning</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Info</TextOverline>
                          <Button variant="cyan-pale-outline" size="rg">Info</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Light</TextOverline>
                          <Button variant="light-pale-outline" size="rg">Light</Button>
                      </div>
                      <div class="w-1/2 md:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Dark</TextOverline>
                          <Button variant="dark-pale-outline" size="rg">Dark</Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Button Sizes</BlockTitle>
                  <BlockText>Use following <code class="text-pink-600">size</code> props to control button sizes.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Extra Large</TextOverline>
                          <Button variant="primary" size="xl">Extra Large</Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Button Large</TextOverline>
                          <Button variant="primary" size="lg">Button Large</Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Regular Button</TextOverline>
                          <Button variant="primary" size="rg">Regular Button</Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Small Button</TextOverline>
                          <Button variant="primary" size="sm">Small Button</Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <Card>
              <CardBody>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Extra Large</TextOverline>
                          <Button variant="primary" pill size="xl">Extra Large</Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Button Large</TextOverline>
                          <Button variant="primary" pill size="lg">Button Large</Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Regular Button</TextOverline>
                          <Button variant="primary" pill size="rg">Regular Button</Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Small Button</TextOverline>
                          <Button variant="primary" pill size="sm">Small Button</Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Button With Icon</BlockTitle>
                  <BlockText>Use icons inside Button.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Start Icon</TextOverline>
                          <Button variant="primary" size="rg">
                              <Icon class="text-xl leading-4.5" name="setting"></Icon>
                              <span class="ms-3">Button Start Icon</span>
                          </Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">End Icon</TextOverline>
                          <Button variant="primary" size="rg">
                              <span class="me-3">Button End Icon</span>
                              <Icon class="text-xl leading-4.5" name="setting"></Icon>
                          </Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Icon on End</TextOverline>
                          <Button variant="primary" size="rg" block>
                              <span class="me-3">Action Button</span>
                              <Icon class="text-xl leading-4.5 ms-auto rtl:-scale-x-100" name="arrow-right"></Icon>
                          </Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <Card>
              <CardBody>
                  <div class="flex flex-wrap -m-3.5">
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Start Icon</TextOverline>
                          <Button variant="primary" pill size="rg">
                              <Icon class="text-xl leading-4.5" name="setting"></Icon>
                              <span class="ms-3">Button Start Icon</span>
                          </Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">End Icon</TextOverline>
                          <Button variant="primary" pill size="rg">
                              <span class="me-3">Button End Icon</span>
                              <Icon class="text-xl leading-4.5" name="setting"></Icon>
                          </Button>
                      </div>
                      <div class="w-full sm:w-1/2 lg:w-1/4 p-3.5">
                          <TextOverline class="mb-3">Icon on End</TextOverline>
                          <Button variant="primary" pill size="rg" block>
                              <span class="me-3">Action Button</span>
                              <Icon class="text-xl leading-4.5 ms-auto rtl:-scale-x-100" name="arrow-right"></Icon>
                          </Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
          <Block>
              <BlockHead>
                  <BlockTitle>Button With Only Icon</BlockTitle>
                  <BlockText>Use the icons as a button.</BlockText>
              </BlockHead>
              <Card>
              <CardBody>
                  <div class="flex flex-wrap -m-3.5 text-center">
                      <div class="w-1/3 md:w-1/6 p-3.5">
                          <TextOverline class="mb-3">LG</TextOverline>
                          <Button variant="primary" size="lg" icon>
                              <Icon class="text-2xl leading-4.5" name="play"></Icon>
                          </Button>
                      </div>
                      <div class="w-1/3 md:w-1/6 p-3.5">
                          <TextOverline class="mb-3">RG</TextOverline>
                          <Button variant="primary" size="rg" icon>
                              <Icon class="text-xl leading-4.5" name="play"></Icon>
                          </Button>
                      </div>
                      <div class="w-1/3 md:w-1/6 p-3.5">
                          <TextOverline class="mb-3">SM</TextOverline>
                          <Button variant="primary" size="sm" icon>
                              <Icon class="text-base leading-4.5" name="play"></Icon>
                          </Button>
                      </div>
                      <div class="w-1/3 md:w-1/6 p-3.5">
                          <TextOverline class="mb-3">LG</TextOverline>
                          <Button variant="primary" size="lg" pill icon>
                              <Icon class="text-2xl leading-4.5" name="play"></Icon>
                          </Button>
                      </div>
                      <div class="w-1/3 md:w-1/6 p-3.5">
                          <TextOverline class="mb-3">RG</TextOverline>
                          <Button variant="primary" size="rg" pill icon>
                              <Icon class="text-xl leading-4.5" name="play"></Icon>
                          </Button>
                      </div>
                      <div class="w-1/3 md:w-1/6 p-3.5">
                          <TextOverline class="mb-3">SM</TextOverline>
                          <Button variant="primary" size="sm" pill icon>
                              <Icon class="text-base leading-4.5" name="play"></Icon>
                          </Button>
                      </div>
                  </div>
              </CardBody>
              </Card>
          </Block>
        </div>
    </Layout>
</template>