<script setup>
import {
    Button,
    Form,
    Input,
    InputWrap,
    FileDropzone,
    FormGroup,
    FormLabel,
} from '@/components';
import SimpleBar from 'simplebar-vue';
const show = defineModel('show');
</script>

<template>
    <div
        id="pageAside"
        :class="{
            'peer fixed end-0 top-0 z-[1010] min-h-screen w-[400px] max-w-[calc(100%-2.5rem)] flex-shrink-0 translate-x-full border-s border-gray-300 bg-white transition-transform duration-500 rtl:-translate-x-full dark:border-gray-900 dark:bg-gray-950 [&.active]:transform-none': true,
            active: show,
        }"
    >
        <SimpleBar class="mt-16 max-h-[calc(100vh-theme(spacing.16))]">
            <div class="p-5 sm:p-6">
                <div class="relative mb-5">
                    <h5
                        class="font-heading -tracking-snug mb-2 text-xl/6 font-bold text-slate-700 dark:text-white"
                    >
                        New Product
                    </h5>
                    <p>Add information and add new product.</p>
                </div>
                <div class="grid grid-flow-dense grid-cols-12 gap-7">
                    <div class="col-span-12">
                        <FormGroup>
                            <FormLabel class="mb-2" htmlFor="product-title"
                                >Product Title</FormLabel
                            >
                            <InputWrap>
                                <Input id="product-title" />
                            </InputWrap>
                        </FormGroup>
                    </div>
                    <div class="xs:col-span-6 col-span-12">
                        <FormGroup>
                            <FormLabel class="mb-2" htmlFor="regular-price"
                                >Regular Price</FormLabel
                            >
                            <InputWrap>
                                <Input type="number" id="regular-price" />
                            </InputWrap>
                        </FormGroup>
                    </div>
                    <div class="xs:col-span-6 col-span-12">
                        <FormGroup>
                            <FormLabel class="mb-2" htmlFor="sale-price"
                                >Sale Price</FormLabel
                            >
                            <InputWrap>
                                <Input type="number" id="sale-price" />
                            </InputWrap>
                        </FormGroup>
                    </div>
                    <div class="xs:col-span-6 col-span-12">
                        <FormGroup>
                            <FormLabel class="mb-2" htmlFor="stock"
                                >Stock</FormLabel
                            >
                            <InputWrap>
                                <Input id="stock" />
                            </InputWrap>
                        </FormGroup>
                    </div>
                    <div class="xs:col-span-6 col-span-12">
                        <FormGroup>
                            <FormLabel class="mb-2" htmlFor="SKU"
                                >SKU</FormLabel
                            >
                            <InputWrap>
                                <Input id="SKU" />
                            </InputWrap>
                        </FormGroup>
                    </div>
                    <div class="col-span-12">
                        <FormGroup>
                            <FormLabel class="mb-2" htmlFor="category"
                                >Category</FormLabel
                            >
                            <InputWrap>
                                <Input id="category" />
                            </InputWrap>
                        </FormGroup>
                    </div>
                    <div class="col-span-12">
                        <FormGroup>
                            <FormLabel class="mb-2" htmlFor="tags"
                                >Tags</FormLabel
                            >
                            <InputWrap>
                                <Input id="tags" />
                            </InputWrap>
                        </FormGroup>
                    </div>
                    <div class="col-span-12">
                        <FileDropzone
                            id="DropzoneDefault"
                            class="!bg-gray-50 dark:!bg-gray-900"
                        >
                            <div class="dz-message !my-3">
                                <span class="block text-sm text-slate-400"
                                    >Drag and drop file</span
                                >
                            </div>
                        </FileDropzone>
                    </div>
                    <div class="col-span-12">
                        <Button variant="primary" size="rg">
                            <em class="ni ni-plus text-xl leading-4.5"></em>
                            <span class="ms-3">Add New</span>
                        </Button>
                    </div>
                </div>
            </div>
        </SimpleBar>
    </div>
    <div
        class="bg-opacity-20 invisible fixed inset-0 z-[1009] bg-slate-950 opacity-0 peer-[.active]:visible peer-[.active]:opacity-100"
        @click="
            () => {
                show = false;
            }
        "
    ></div>
</template>
