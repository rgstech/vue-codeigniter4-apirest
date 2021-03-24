<template>
  <div>
    <div class="container">
      <ClienteForm />
      <ClienteTable />
    </div>
  </div>
</template>

<script>

import ClienteTable from "./ClienteTable";
import ClienteForm  from "./ClienteForm";


export default {

  components: { ClienteTable, ClienteForm },

    created() {
      this.$store.dispatch('loadData');
  },
  
};
</script>

<style>

</style>