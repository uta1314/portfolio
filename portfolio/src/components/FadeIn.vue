<template>
    <div class="fade" :class="{'fade-in': show}" :style="{visibility: hiddenStyle}">
        <slot></slot>
    </div>
</template>

<script>
export default {
    name: 'FadeIn',
    data() {
        return {
            show: false,
            hiddenStyle: 'hidden',
        }
    },
    created() {
        // スクロールイベントの追加
        window.addEventListener("scroll", this.handleScroll);
    },
    mounted() {
        // スクロールされるまえにも一度実行
        this.handleScroll();
    },
    destroyed() {
        // スクロールイベントの削除
        window.removeEventListener("scroll", this.handleScroll);
    },
    methods: {
        handleScroll() {
            if (!this.visible) {
                // 要素の位置を取得
                let top = this.$el.getBoundingClientRect().top;
                // 要素の位置とウィンドウの内部の高さと比較
                if (top < window.innerHeight + 100) {
                    this.show = true;
                    this.hiddenStyle = 'visible';
                }
            }
        },
    },
}
</script>

<style scoped>
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(50px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }
    .fade-in {
        animation: fadeIn 2s;
    }
</style>