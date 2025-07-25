<script setup>
import { Button, Form, Input, InputWrap, FileDropzone, FormGroup, FormLabel } from '@/components'
import SimpleBar from 'simplebar-vue'
const show = defineModel('show')
</script>

<template>
  <div id="pageAside" :class="{'peer max-w-[calc(100%-2.5rem)] w-[400px] min-h-screen bg-white dark:bg-gray-950 border-s border-gray-300 dark:border-gray-900 flex-shrink-0 fixed top-0 end-0 z-[1010] transition-transform duration-500 translate-x-full rtl:-translate-x-full [&.active]:transform-none':true, 'active': show}">
      <SimpleBar class="mt-16 max-h-[calc(100vh-theme(spacing.16))]">
          <div class="p-5 sm:p-6">
              <div class="relative mb-5">
                  <h5 class="text-xl/6 text-slate-700 dark:text-white font-heading font-bold -tracking-snug mb-2">New Product</h5>
                  <p>Add information and add new product.</p>
              </div>
              <div class="grid grid-flow-dense grid-cols-12 gap-7">
                  <div class="col-span-12">
                      <FormGroup>
                          <FormLabel class="mb-2" htmlFor="product-title">Product Title</FormLabel>
                          <InputWrap>
                              <Input id="product-title" />
                          </InputWrap>
                      </FormGroup>
                  </div>
                  <div class="col-span-12 xs:col-span-6">
                      <FormGroup>
                          <FormLabel class="mb-2" htmlFor="regular-price">Regular Price</FormLabel>
                          <InputWrap>
                              <Input type="number" id="regular-price" />
                          </InputWrap>
                      </FormGroup>
                  </div>
                  <div class="col-span-12 xs:col-span-6">
                      <FormGroup>
                          <FormLabel class="mb-2" htmlFor="sale-price">Sale Price</FormLabel>
                          <InputWrap>
                              <Input type="number" id="sale-price" />
                          </InputWrap>
                      </FormGroup>
                  </div>
                  <div class="col-span-12 xs:col-span-6">
                      <FormGroup>
                          <FormLabel class="mb-2" htmlFor="stock">Stock</FormLabel>
                          <InputWrap>
                              <Input id="stock" />
                          </InputWrap>
                      </FormGroup>
                  </div>
                  <div class="col-span-12 xs:col-span-6">
                      <FormGroup>
                          <FormLabel class="mb-2" htmlFor="SKU">SKU</FormLabel>
                          <InputWrap>
                              <Input id="SKU" />
                          </InputWrap>
                      </FormGroup>
                  </div>
                  <div class="col-span-12">
                      <FormGroup>
                          <FormLabel class="mb-2" htmlFor="category">Category</FormLabel>
                          <InputWrap>
                              <Input id="category" />
                          </InputWrap>
                      </FormGroup>
                  </div>
                  <div class="col-span-12">
                      <FormGroup>
                          <FormLabel class="mb-2" htmlFor="tags">Tags</FormLabel>
                          <InputWrap>
                              <Input id="tags" />
                          </InputWrap>
                      </FormGroup>
                  </div>
                  <div class="col-span-12">
                      <FileDropzone id="DropzoneDefault" class="!bg-gray-50 dark:!bg-gray-900">
                          <div class="dz-message !my-3">
                              <span class="block text-sm text-slate-400">Drag and drop file</span>
                          </div>
                      </FileDropzone>
                  </div>
                  <div class="col-span-12">
                      <Button variant="primary" size="rg">
                          <em class="text-xl leading-4.5 ni ni-plus"></em>
                          <span class="ms-3">Add New</span>
                      </Button>
                  </div>
              </div>
          </div>
      </SimpleBar>
  </div>
  <div class="fixed inset-0 bg-slate-950 bg-opacity-20 z-[1009] opacity-0 invisible peer-[.active]:opacity-100 peer-[.active]:visible"  @click="()=>{  show = false}"></div>
</template>
