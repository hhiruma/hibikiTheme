const bgApp = {
    template: `
        <div id="framesContainer">
            <div v-for="i in frameNum" :class="'frameItem hasImg box' + i ">
                {{ i }}
            </div>
        </div>
    `,
    data: function(){
        return {
            frameNum: frameNumber,
            imgUrls: imgUrlArr
        }
    }
}

const bgAppNoImg = {
    template: `
        <div id="framesContainer">
            <div v-for="i in frameNum" :class="'frameItem noImg box' + i ">
                {{ i }}
            </div>
        </div>
    `,
    data: function(){
        return {
            frameNum: frameNumber,
            imgUrls: imgUrlArr
        }
    }
}

new Vue({
    el: '#bgContainer',
    components: { bgApp, bgAppNoImg }
})

const effectArr = ['drop', 'slide'];

jQuery(function($) {
    for(let i=1; i <= imgUrlArr.length; i++){
        if(imgUrlArr[i-1].length >= 2){
            $('.frameItem.hasImg.box'+i).bgswitcher({
                images: imgUrlArr[i-1],
                interval: 5000+Math.random()*10000,
                duration: 2000,
                effect: effectArr[Math.round(Math.random()*1)]
            });
        } else if(imgUrlArr[i-1].length == 1){
            $('.frameItem.hasImg.box'+i).css('background-image', 'url(' + imgUrlArr[i-1][0] + ')');
        }
    }
});