<script setup>
import Layout from '@/layout/Main.vue'
import { Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, TextOverline, Button, ButtonGroup } from "@/components";
</script>
<template>
    <Layout title="Button Group">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Buttons Group</BlockTitleLg>
              <BlockLeadText>Group a series of buttons together on a single line with the button group.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Basic Example</BlockTitle>
                <BlockText>Combine sets of button to wrap a series of buttons</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap -m-3.5">
                    <div class="w-full sm:w-1/2 p-3.5">
                        <TextOverline class="mb-3">Default Buttons</TextOverline>
                        <ButtonGroup>
                            <Button variant="primary" size="rg">Start</Button>
                            <Button variant="primary" size="rg">Middle</Button>
                            <Button variant="primary" size="rg">End</Button>
                        </ButtonGroup>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <TextOverline class="mb-3">Pale Buttons</TextOverline>
                        <ButtonGroup>
                            <Button variant="primary-pale" size="rg">Start</Button>
                            <Button variant="primary-pale" size="rg">Middle</Button>
                            <Button variant="primary-pale" size="rg">End</Button>
                        </ButtonGroup>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <TextOverline class="mb-3">Bordered Buttons</TextOverline>
                        <ButtonGroup>
                            <Button variant="primary-outline" size="rg">Start</Button>
                            <Button variant="primary-outline" size="rg">Middle</Button>
                            <Button variant="primary-outline" size="rg">End</Button>
                        </ButtonGroup>
                    </div>
                    <div class="w-full sm:w-1/2 p-3.5">
                        <TextOverline class="mb-3">Pale Bordered Buttons</TextOverline>
                        <ButtonGroup>
                            <Button variant="primary-pale-outline" size="rg">Start</Button>
                            <Button variant="primary-pale-outline" size="rg">Middle</Button>
                            <Button variant="primary-pale-outline" size="rg">End</Button>
                        </ButtonGroup>
                    </div>
                </div>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Button Toolbar</BlockTitle>
                <BlockText>Combine sets of button groups into button toolbars for more complex components.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-wrap gap-3">
                  <ButtonGroup>
                      <Button variant="primary" size="rg">1</Button>
                      <Button variant="primary" size="rg">2</Button>
                      <Button variant="primary" size="rg">3</Button>
                      <Button variant="primary" size="rg">4</Button>
                  </ButtonGroup>
                  <ButtonGroup>
                      <Button variant="primary" size="rg">5</Button>
                      <Button variant="primary" size="rg">6</Button>
                      <Button variant="primary" size="rg">7</Button>
                  </ButtonGroup>
                  <ButtonGroup>
                      <Button variant="primary" size="rg">8</Button>
                  </ButtonGroup>
                </div>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Button Sizing</BlockTitle>
                <BlockText>Use Any sized button in group button</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-col gap-4">
                    <ButtonGroup size="lg">
                        <Button variant="primary" size="lg">Start</Button>
                        <Button variant="primary" size="lg">Middle</Button>
                        <Button variant="primary" size="lg">End</Button>
                    </ButtonGroup>
                    <ButtonGroup size="rg">
                        <Button variant="primary" size="rg">Start</Button>
                        <Button variant="primary" size="rg">Middle</Button>
                        <Button variant="primary" size="rg">End</Button>
                    </ButtonGroup>
                    <ButtonGroup size="sm">
                        <Button variant="primary" size="sm">Start</Button>
                        <Button variant="primary" size="sm">Middle</Button>
                        <Button variant="primary" size="sm">End</Button>
                    </ButtonGroup>
                </div>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>