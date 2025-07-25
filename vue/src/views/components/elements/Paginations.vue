<script setup>
import Layout from '@/layout/Main.vue'
import { 
  Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText,
  Pagination, PaginationPrev, PaginationNext, PaginationItem, PaginationDot
 } from "@/components";
</script>
<template>
    <Layout title="Pagination">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Pagination</BlockTitleLg>
              <BlockLeadText>The following example of basic pagination</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Basic Style</BlockTitle>
                <BlockText>Checkout our basic style for pagination</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <Pagination>
                    <PaginationPrev text="Prev"/>
                    <PaginationItem>1</PaginationItem>
                    <PaginationItem>2</PaginationItem>
                    <PaginationDot />
                    <PaginationItem>6</PaginationItem>
                    <PaginationNext text="Next"/>
                </Pagination>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Working with Icons</BlockTitle>
                <BlockText>Looking to use an icon or symbol in place of text for some pagination links? Be sure to provide proper screen reader support with aria attributes.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <Pagination>
                    <PaginationPrev icon="chevrons-left" />
                    <PaginationItem>1</PaginationItem>
                    <PaginationItem>2</PaginationItem>
                    <PaginationDot />
                    <PaginationItem>6</PaginationItem>
                    <PaginationNext icon="chevrons-right" />
                </Pagination>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Active States</BlockTitle>
                <BlockText>Use active to indicate the current page.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <Pagination>
                    <PaginationPrev icon="chevrons-left" />
                    <PaginationItem>1</PaginationItem>
                    <PaginationItem active>2</PaginationItem>
                    <PaginationDot />
                    <PaginationItem>6</PaginationItem>
                    <PaginationNext icon="chevrons-right" />
                </Pagination>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Sizing</BlockTitle>
                <BlockText>Here is some examples with diffrent size.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="flex flex-col space-y-4">
                    <Pagination>
                        <PaginationPrev size="sm" icon="chevrons-left" />
                        <PaginationItem size="sm">1</PaginationItem>
                        <PaginationItem size="sm" active>2</PaginationItem>
                        <PaginationDot size="sm" />
                        <PaginationItem size="sm">6</PaginationItem>
                        <PaginationNext size="sm" icon="chevrons-right" />
                    </Pagination>
                    <Pagination>
                        <PaginationPrev icon="chevrons-left" />
                        <PaginationItem>1</PaginationItem>
                        <PaginationItem active>2</PaginationItem>
                        <PaginationDot />
                        <PaginationItem>6</PaginationItem>
                        <PaginationNext icon="chevrons-right" />
                    </Pagination>
                    <Pagination>
                        <PaginationPrev size="lg" icon="chevrons-left" />
                        <PaginationItem size="lg">1</PaginationItem>
                        <PaginationItem size="lg" active>2</PaginationItem>
                        <PaginationDot size="lg" />
                        <PaginationItem size="lg">6</PaginationItem>
                        <PaginationNext size="lg" icon="chevrons-right" />
                    </Pagination>
                </div>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>