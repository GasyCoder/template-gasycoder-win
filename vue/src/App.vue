<script setup>
import { watch, onMounted } from 'vue'
import { useThemeStore } from '@/stores/theme'
const theme = useThemeStore()

const changeTheme = (() => {
  const htmlTag = document.documentElement;
  theme.mode === "dark" ? htmlTag.classList.add('dark') : htmlTag.classList.remove('dark')
})

const changeDirection = (() => {
  const bodyTag = document.body;
  bodyTag.setAttribute("dir",theme.direction)
})

onMounted(() => {
  changeTheme();
  changeDirection();
})

watch(() => theme.mode, () => {
  changeTheme();
})

watch(() => theme.direction, () => {
  changeDirection();
})

</script>
<template>
  <RouterView />
</template>