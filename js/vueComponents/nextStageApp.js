const nextStage = {
    template: `
        <div>
            <div class="sidebarDiv hvr-underline-from-center" @click="nextStageVis=!nextStageVis" style="cursor: pointer">
                Next Stage
            </div>

            <div class="nextStageModal" :class="{showNextStage: nextStageVis}">
                <div v-html="nextStageObj['content']"></div>
            </div>
            <div class="modalBackground" :class="{showNextStage: nextStageVis}" @click="nextStageVis=!nextStageVis"></div>
        </div>
    `,
    data: function(){
        return {
            visible: true,
            nextStageVis: false,
            nextStageObj: nextStagePost
        };
    },
    methods: {
        sideBarDivEnter() {
            this.visible = true;
        },
        sideBarDivLeave(){
            this.visible = false;
        }
    }
}

new Vue({
    el: '#nextStage',
    components: { nextStage }
});