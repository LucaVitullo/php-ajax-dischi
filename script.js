const app = new Vue({
    el: '#app',
    data: {

        dischi: [],



    },
    mounted() {
        axios.get('http://localhost/PHP-AJAX-DISCHI/apiDischi.php').then((response) => {
            this.dischi = response.data
        }).catch(error => console.log(error));
    }

})