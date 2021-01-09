<template>
    <article class="top">
        <h1 class="main-title">yuta tanoue</h1>
        <balloon v-for="item in balloons" :x="item.x" :y="item.y" :key="item.id"></balloon>
        <div class="main-bg">
            <img :src="bg" alt="背景画像">
        </div>
    </article>
</template>

<script>
import Balloon from '../components/Balloon'

export default {
    name: 'Top',
    components: {
        Balloon
    },
    data() {
        return {
            wWidth: 0,  // window内表示領域の幅
            wHeight: 0, // windowない表示領域の高さ
            balloonSpaceSt: 10, // 風船の最初の表示間隔
            balloonSpace: 90,  // 風船の表示間隔
            balloonHighSp: 20,  // 風船の表示領域の上の間隔
            balloonLowSp: 100,  // 風船の表示領域の下の間隔
            bg: require('@/assets/img/main_bg.png') // 背景画像
        }
    },
    created() {
        this.wWidth = window.innerWidth;
        this.wHeight = window.innerHeight;
    },
    computed: {
        // 風船のx, y座標を返す
        balloons() {
            let balloonsList = [];
            let min = this.balloonHighSp;
            let max = this.wHeight - this.balloonLowSp;
            let x = 0;
            let y = 0;
            let id = 0;
            for (let i = this.balloonSpaceSt, j = 0; i < this.wWidth - this.balloonSpace + 10; i = i + this.balloonSpace, j++) {
                id++;
                x = i;
                // min ~ maxの間の乱数を生成
                y = Math.floor(Math.random() * (max + 1 - min)) + min;
                balloonsList[j] = {id, x, y};
            }
            return balloonsList;
        }
    },
    watch: {
        wWidth() {
            if (this.wWidth > 1024) {
                this.balloonSpaceSt = 100;
                this.balloonSpace = 210;
                this.balloonHighSp = 20;
                this.balloonLowSp = 300;
            } else if (this.wWidth > 896) {
                this.balloonSpaceSt = 70;
                this.balloonSpace = 180;
                this.balloonHighSp = 20;
                this.balloonLowSp = 270;
            } else if (this.wWidth > 480) {
                this.balloonSpaceSt = 30;
                this.balloonSpace = 140;
                this.balloonHighSp = 20;
                this.balloonLowSp = 200;
            }
        }
    }
}
</script>

<style scoped>
    .top {
        position: relative;
        width: 100%;
        height: 80vh;
    }
    .main-title {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 1;
        transform: translate(-50%, -100%);
        width: 600px;
        height: 110px;
        font-size: 10rem;
        font-weight: bold;
        color: #000;
        text-shadow: rgb(167, 166, 166) 4px 4px;
    }
    .main-bg {
        position: fixed;
        top: 0;
        left: 0;
        z-index: -9999;
        width: 100%;
        height: 100%;
    }
    .main-bg img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center bottom;
    }
    /* レスポンシブ */
    /* タブレット横 */
    @media screen and (max-width: 896px) {
        .main-title {
            font-size: 7rem;
            width: 450px;
            height: 80px;
        }
        /* スマートフォン */
        @media screen and (max-width: 480px) {
            .main-title {
                font-size: 6rem;
                width: 350px;
                height: 65px;
            }
        }
    }
</style>