const url = 'https://www.youtube-nocookie.com/embed/VMzIP90f86Q';

const stagesTab = {
    template: `
        <div>
            <ul class="stagesTabRow">
                <template v-for="year in activeYears">
                    <li v-if="selectedYear == year" class="selectedTab" style="cursor: pointer">
                        {{ year + '年度'}}
                    </li>
                    <li v-else class="unselectedTab" @click.prevent="selectYear(year)">
                        {{ year + '年度'}}
                    </li>
                </template>
            </ul>

            <div class="stagesTabBoxContainer">
                <div v-for="postData in postsData" class="stagesTabBox" v-if="filterPostByDate(postData)">
                    <div v-html="fixContent(postData['content'])" class="stagesTabBoxDesc"></div>

                    <div class="stagesTabBoxVideoContainer">
                        <iframe
                            class="stagesTabBoxVideo"
                            :src='getVideoUrl(postData)'
                            frameborder="0"
                            allowfullscreen>
                        </iframe>

                        <a class="videoShowButton" @click="toggleModalVis(postData)" style="cursor: pointer;">
                            <i class="fa fa-arrows-alt fa-lg"></i>
                        </a>

                        <div class="videoShowModal" :class="{showVideo: postData['modalVis']}">
                            <iframe
                                class="modalVideo"
                                :src='getVideoUrl(postData)'
                                frameborder="0"
                                allowfullscreen>
                            </iframe>
                        </div>
                        <div class="modalBackground" :class="{showVideo: postData['modalVis']}" @click="toggleModalVis(postData)"></div>
                    </div>
                </div>
            </div>
        </div>
    `,

    data: function(){
        return {
            postsData: stagePosts,
            activeYears: [], //年度
            selectedYear: 0
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
        },

        selectYear(activeYear){
            this.selectedYear = activeYear;
        },

        filterPostByDate(post){
            return this.getActiveYear(post['date']) === this.selectedYear;
        },

        getActiveYear(date) {
            let dataParse = date.split('-');
            let activeYear;
            if (dataParse[1] >= 4 && dataParse[1] <= 12) {
                activeYear = dataParse[0];
            } else if (dataParse[1] >= 1 && dataParse[1] <= 3) {
                activeYear = Number(dataParse[0]) - 1;
            } else {
                activeYear = -1;
            }
            return activeYear;
        },

        pushAllYears(posts){
            let latest = Number(this.getActiveYear(posts[0]['date']));
            let oldest = Number(this.getActiveYear(posts[posts.length-1]['date']));

            for(let i = latest; i>=oldest; i--){
                this.activeYears.push(i);
            }
        },

        toggleModalVis(post){
            console.log(post);
            post['modalVis'] = !post['modalVis'];
            console.log(post);
        }
    },

    created: function(){
        if(this.activeYears.length === 0){
            this.pushAllYears(this.postsData);
        }

        //set activeYears value
        for(post of this.postsData){
            this.activeYears.push(post['date'].split('-')[0]);
        }
        this.activeYears.sort(function(a, b){ return b-a;})
        this.activeYears = [...new Set(this.activeYears)];

        //initialize selectedYear
        this.selectedYear = this.activeYears[0];
    }
}

new Vue({
    el: '#stagesContainer',
    components: { stagesTab }
})