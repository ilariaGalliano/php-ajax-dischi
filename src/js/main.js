import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
  el: '#app',
  data: {
    artists: [],
  },
  created(){
    const dataUlr = window.location.href + 'partials/database.php';

    axios.get(dataUlr)
    .then(response => {
      // handle success
      console.log(response.data);
      this.artists = response.data;
    })
    .catch(error => {
      // handle error
      console.log(error);
    });
  }
});
