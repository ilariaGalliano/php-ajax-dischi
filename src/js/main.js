import Vue from 'vue';
import axios from 'axios';

const app = new Vue({
  el: '#app',
  data: {
    artists: [],
    filterArtist: 'all',
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
  },
  methods: {

    chooseArtist(){
      const dataUlr = window.location.href + 'partials/database.php';

      axios.get(dataUlr)
        .then(response => {
          let artistList = response.data;
          console.log(response.data);

          if (this.filterArtist !== 'all') {
            artistList = artistList.filter( el => el.author.toLowerCase() === this.filterArtist );
          }

          this.artists = artistList;
        })

        .catch(error => { console.log('errore:', error); })

    }
  }
});
