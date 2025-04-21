<template>
    <div>
      <!-- Verificando se o usuário é admin -->
      <div v-if="user && user.role === 'admin'">
        <h1>Bem-vindo, Admin!</h1>
        <p>Você tem acesso a funcionalidades exclusivas de administrador.</p>
        <!-- Adicione opções exclusivas para o admin aqui -->
      </div>
  
      <!-- Verificando se o usuário é normal -->
      <div v-else-if="user && user.role === 'user'">
        <h1>Bem-vindo, Usuário!</h1>
        <p>Aqui estão suas opções como usuário.</p>
        <!-- Adicione opções exclusivas para o usuário aqui -->
      </div>
  
      <!-- Se não houver usuário logado -->
      <div v-else>
        <h1>Carregando...</h1>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    props: {
      user: Object, // A propriedade 'user' será recebida de Inertia
    },
  };
  </script>
  
  <style scoped>
  /* Estilos do seu componente */
  </style>
  