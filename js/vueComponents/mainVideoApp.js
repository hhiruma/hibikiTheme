const url = 'https://www.youtube-nocookie.com/embed/VMzIP90f86Q';

const mainVideoPlayer = {
    template: `
        <div v-if='visible'>
            <iframe
                :src="videoUrl"
                frameborder="0"
                allowfullscreen>
            </iframe>
        </div>
        <div v-else>
            <i class="fa fa-youtube-play" aria-hidden="true"></i>
        </div>
    `,
    data: function (){
        return {
            visible: true,
            videoUrl: url
        }
    }
}

new Vue({
    el: '#mainVideoContainer',
    components: { mainVideoPlayer }
})
