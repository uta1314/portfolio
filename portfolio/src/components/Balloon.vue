<template>
    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"
        class="balloon"
        :class="setClass"
        :style="{
            transform: `translate(${x + dx}px, ${y + dy}px)`,
            transition: `transform ${duration}ms ${easing}`,
            opacity: `${show}`
        }"
        >
        <g>
            <rect x="247.027" y="398.668" class="balloon-path" width="17.946" height="113.332"></rect>
            <path class="balloon-path" d="M256.007,0C170.213,0,102.569,65.824,106.25,169.118c3.843,107.508,80.015,174.195,130.395,188.945
                l-14.211,26.225h67.132l-14.204-26.225c50.373-14.744,126.559-81.424,130.388-188.945C409.444,65.824,341.786,0,256.007,0z
                M221.274,84.154c-6.121,3.573-11.69,7.928-16.598,13.018c-10.813,11.218-18.444,25.49-22.597,42.856
                c-1.767,7.416-9.209,11.994-16.625,10.227c-7.416-1.766-12-9.216-10.233-16.631c5.11-21.526,15.047-40.577,29.581-55.632
                c6.688-6.93,14.292-12.863,22.558-17.69c6.593-3.842,15.047-1.618,18.89,4.968C230.092,71.858,227.867,80.312,221.274,84.154z"></path>
        </g>
    </svg>
</template>

<script>
// 標準のタイマーをPromise化したもの
import Time from '@/core/Time.js'

export default {
    name: 'Balloon',
    props: {
        x: {type: Number, default: 200},    // balloonのx座標
        y: {type: Number, default: 100},    // balloonのy座標
        start: {type: Number, default: 0}   // writeアニメーションの開始するための間
    },
    data() {
        return {
            dx: 0,
            dy: 0,
            setStart: this.start,
            duration: 1000,
            easing: 'ease',
            setClass: [],
            show: 0
        }
    },
    mounted() {
        let wHeight = window.innerHeight
        this.fly(wHeight + 200, 3000, this.setStart);
    },
    methods: {
        // 引数でdataオブジェクトを上書き
        // Time.waitを利用しdurationミリ秒待機
        async tween(props, duration = 1000) {
            Object.assign(this.$data, props);
            this.$data.duration = duration;
            await Time.wait(duration);
        },
        // 風船が飛ぶアニメーションを実行する
        async fly(height = 1000, duration = 3000, start = 0) {
            // 指定時間経過後にアニメーションを開始するための間
            await this.tween({easing: 'ease-in'}, start);
            // writeアニメーションを開始
            await this.tween({setClass: 'balloon-start', show: 1}, duration)
            await this.tween({dy: -height}, duration);
        }
    }
}
</script>

<style scoped>
    .balloon {
        position: absolute;
        top: 0;
        left: 0;
        width: 200px;
    }
    .balloon-start .balloon-path {
        fill: #111;
        stroke: #000;
        stroke-width: 2px;
        animation: write 3s ease-in;
    }

    @keyframes write {
        0% {
            fill: transparent;
            stroke-dasharray: 1200px;
            stroke-dashoffset: 1200px;
        }
        20% {
            stroke-dashoffset: 0;
        }
        30% {
            fill: transparent;
        }
        50% {
            fill: #111;
        }
    }
    /* レスポンシブ */
    /* パソコン */
    @media screen and (max-width: 1024px) {
        .balloon {
            width: 170px;
        }
        /* タブレット横 */
        @media screen and (max-width: 896px) {
            .balloon {
                width: 130px;
            }
            /* スマートフォン */
            @media screen and (max-width: 480px) {
                .balloon {
                    width: 80px;
                }
            }
        }
    }
</style>