<template>
    <div class="p-6">
      <h1 class="text-2xl font-bold mb-4">Serviços disponíveis</h1>
  
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <div
          v-for="service in services"
          :key="service.id"
          class="bg-white shadow rounded-xl p-4"
        >
          <h2 class="text-lg font-semibold">{{ service.name }}</h2>
          <p class="text-gray-600">Duração: {{ service.duration }} minutos</p>
          <p class="text-gray-600">Valor: R$ {{ service.price }}</p>
        </div>
      </div>
    </div>
  </template>
  
  <script setup>
  defineProps({
    services: Array,
  });
  </script>
  