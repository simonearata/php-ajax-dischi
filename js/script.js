const app = new Vue({
  el: '#app',

  data: {
    discList: []
  },

  mounted() {
    axios.get('http://localhost:8888/php-ajax-dischi/api.php')
      .then(res => {
        this.discList = res.data;
      })
      .catch(err => {
        console.log(err);
      })
  }



})