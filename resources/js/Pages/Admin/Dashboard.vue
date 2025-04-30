<template>
    <div>
      <h1>Admin Dashboard</h1>
      <p>Bem-vindo, Admin!</p>
      <!-- Adicionar conteúdo específico do admin aqui -->
      <ul>
        <li><a href="/agendamentos">Visualizar Agendamentos</a></li>
        <li><a href="/servicos">Gerenciar Serviços</a></li>
        <li><a href="/users">Gerenciar Usuários</a></li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    props: {
    }
  };
  </script>
  
  <style scoped>
  /* Adicionar estilos específicos para o Dashboard do Admin */
  </style>
  