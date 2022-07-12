const app = new Vue({
    el: "#app",
    data: {
        albumsList: []
    },
    mounted() {
        axios
        .get("api/albums.php")
        .then(resp =>  {
            this.albumsList = resp.data.albums;
        });
    }
});