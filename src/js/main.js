import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
  el: '#app',
  data: {
    artists: [],
    authors: [],
    filterArtist: 'all',
  },
  created(){
    const dataUlr = window.location.href + 'partials/database.php';

    axios.get(dataUlr)
    .then(response => {
      // handle success
      console.log(response.data);
      this.artists = response.data;
      this.authors = response.data;
    })
    .catch(error => {
      // handle error
      console.log(error);
    });
  },
  methods: {

    chooseArtist(){

      const dataUlr = window.location.href + 'partials/database.php';

      axios.get(dataUlr, {
            params: {
              author: this.filterArtist,
            }
      })
          .then(response => {
            this.artists = response.data;
          })

          .catch(error => { console.log('errore:', error); })

    }
  }
});
