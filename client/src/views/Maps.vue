<template>
  <div class="maps">
    <h1>This is a maps page</h1>
    <div v-bind="content"></div>
  </div>
</template>
<script lang="ts">
import axios from "axios";

export default class Maps {
  content: any;
  created() {
    try {
      axios
        .get("http://127.0.0.1:8000/maps")
        .then((response) => (this.content = response));
    } catch (error) {
      console.log(error);
    }
  }
}
</script>

