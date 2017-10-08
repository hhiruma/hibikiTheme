const url = 'https://www.youtube-nocookie.com/embed/VMzIP90f86Q';

const stagesTab = {
    template: `
        <div> 
            <div v-for="postData in postsData" class="stagesTabBox">
                <div v-html="fixContent(postData['content'])" class="stagesTabBoxDesc"></div>

                <iframe 
                    class="stagesTabBoxVideo"
                    :src='getVideoUrl(postData)'
                    frameborder="0" 
                    allowfullscreen
                    height="100%"
                    width="100%">
                </iframe>
            </div>
        </div>
    `,
    data: function(){
        return { 
            postsData: stagePosts
        }
    },
    methods: {
        getVideoUrl(postData){
            return 'https://www.youtube.com/embed/' + postData['content'].match(/...........$/);
        },
        fixContent(content){
            let result = content
                .replace('<div style="border-bottom: #c0c0c0 3px double; margin: 1.62em auto !important; width: 100% !important;"></div>', '')
                .replace(/<h3 class="widget-title">[^>]*>/, '')
                .replace('<span style="font-size: 12pt;">', '<br><br><span style="font-size: 12pt;">')
                .replace('【日時】', '<br>【日時】')
                .replace('【場所】', '<br>【場所】')
                .replace('<span style="font-size: 14pt;"', '<span style="font-size: 10pt;"')
                .replace('<span style="font-size: 14pt;"', '<span style="font-size: 10pt;"')
                .replace(/https:.+$/,'');
            return result;
       }
    }
}

new Vue({
    el: '#stagesContainer',
    components: { stagesTab }
})
