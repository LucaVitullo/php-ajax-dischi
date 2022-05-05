const app = new Vue({
    el: '#app',
    Data() {
        return {
            dischi: [],

        }

    },
    mounted() {
        axios.get('http://localhost/dischi.php').then((response) => {
            console.log(response);
        }).catch(error => console.log(error));
    }

})