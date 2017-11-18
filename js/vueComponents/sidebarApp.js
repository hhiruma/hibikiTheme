new Vue({
    el: "#sidebar",
    data: {
        visibilize: window.outerWidth > 600
    },
    mounted() {
        window.addEventListener('resize', this.onResize);
        this.visibilize = window.outerWidth > 600;
        if(this.visibilize){
            document.getElementById('sidebar').classList.remove('hideIt');
        } else {
            document.getElementById('sidebar').classList.add('hideIt');
        }
    },
    methods: {
        onResize(){
            this.visibilize = window.outerWidth > 600;
            if(this.visibilize){
                document.getElementById('sidebar').classList.remove('hideIt');
            } else {
                document.getElementById('sidebar').classList.add('hideIt');
            }
        }
    },
});