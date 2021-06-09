const app = new Vue({
  el: '#app',

  data: {
    discList: [],
    genres: [],
    genreToSearch: 'all',
    apiURL: 'http://localhost:8888/php-intro/php-ajax-dischi/api.php'
  },

  methods: {

    getAPI(){
      axios.get(this.apiURL,{
        params: {
          genre: this.genreToSearch
        }
      })
      .then(res => {
        this.discList = res.data.albums;
        this.genres = res.data.genres;
        console.log(this.genres);

      })
      .catch(err => {
        console.log(err);
      })
    }
  },

  created(){
    this.getAPI();
  }



});