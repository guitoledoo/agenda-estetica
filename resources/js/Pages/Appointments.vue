<template>
    <div class="p-6">
      <h1 class="text-2xl font-bold mb-4">Meus Agendamentos</h1>
  
      <div v-if="appointments.length">
        <div
          v-for="appointment in appointments"
          :key="appointment.id"
          class="bg-white rounded-xl shadow p-4 mb-4"
        >
          <h2 class="text-lg font-semibold">{{ appointment.service.name }}</h2>
          <p>Data: {{ appointment.date }}</p>
          <p>Hora: {{ appointment.time }}</p>
          <p>Status: {{ appointment.status }}</p>
          <p v-if="appointment.user">Cliente: {{ appointment.user.name }}</p>
        </div>
      </div>
      <div v-else>
        Nenhum agendamento encontrado.
      </div>
    </div>
  </template>
  
  <script setup>
  defineProps({
    appointments: Array
  });
  </script>
  