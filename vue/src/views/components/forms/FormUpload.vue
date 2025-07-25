<script setup>
import Layout from '@/layout/Main.vue'
import { 
  Card, CardBody, Block, BlockHead, BlockTitle, BlockTitleLg, BlockText, BlockBack, BlockPageHead, BlockLeadText, 
  FormGroup, FormLabel, File, FileDropzone 
} from "@/components";
</script>
<template>
    <Layout title="Form Upload">
        <div class="lg:max-w-[960px] mx-auto">
          <BlockPageHead class="md:max-w-[720px]">
              <BlockBack to="/components">Components</BlockBack>
              <BlockTitleLg>Form Upload / Dropzone</BlockTitleLg>
              <BlockLeadText>Examples and usage guidelines for form upload fields with default file input type and with Dropzone plugin.</BlockLeadText>
          </BlockPageHead>
          <Block>
            <BlockHead>
                <BlockTitle>Default Upload Field</BlockTitle>
                <BlockText>File Upload with default input file type.</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <FormGroup>
                            <FormLabel class="mb-2" for="customFile">Default File Upload</FormLabel>
                            <File id="customFile1">Choose file</File>
                        </FormGroup>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <FormGroup>
                            <FormLabel class="mb-2" for="customMultipleFile">Multiple File Upload</FormLabel>
                            <File id="customFileMultiple1" multiple>Choose files</File>
                        </FormGroup>
                    </div>
                </div>
              </CardBody>
            </Card>
          </Block>
          <Block>
            <BlockHead>
                <BlockTitle>Dropzone Field</BlockTitle>
                <BlockText>File Upload with Dropzone .</BlockText>
            </BlockHead>
            <Card>
              <CardBody>
                <div class="grid grid-flow-dense grid-cols-12 gap-6">
                    <div class="col-span-12 sm:col-span-6">
                        <FormLabel class="mb-2">Dropzone Default</FormLabel>
                        <FileDropzone id="DropzoneDefault" />
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <FormLabel class="mb-2">Dropzone Single File</FormLabel>
                        <FileDropzone :maxFiles="1" errorText="Multiple files not supported, please upload single File"  id="DropzoneSingleFile"/>
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <FormLabel class="mb-2">Dropzone File Size Limit (4mb)</FormLabel>
                        <FileDropzone :maxSize="4194304" errorText="File size is too large, please upload file size within (4MB)" id="DropzoneFileSizeLimit"/>
                    </div>
                </div>
              </CardBody>
            </Card>
          </Block>
        </div>
    </Layout>
</template>