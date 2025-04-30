<template>
  <div>Redirecionando para o seu painel...</div>
</template>

<script setup>
import { router } from '@inertiajs/vue3'
import { onMounted } from 'vue'
import { usePage } from '@inertiajs/vue3'

const { props } = usePage()

onMounted(() => {
  const role = props.auth.user.role

  if (role === 'admin') {
    router.visit('/admin/dashboard')
  } else if (role === 'user') {
    router.visit('/user/dashboard')
  }
})
</script>