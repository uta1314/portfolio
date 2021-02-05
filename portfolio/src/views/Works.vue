<template>
    <article class="works">
        <h2 class="sub-title">works</h2>
        <div class="container">
            <ul class="work-list">
                <fade-in>
                    <li class="work-item">
                        <div class="work-image">
                            <a href="./" target="_blank" rel="noopener noreferrer">
                                <img :src="workImage1" alt="作品画像1">
                            </a>
                        </div>
                        <p class="work-title">ポートフォリオ</p>
                        <p class="work-language">HTML5 / CSS3 / Vue.js / PHP</p>
                        <p class="work-description">
                            自己紹介のためのサイトです。<!--
                            -->Vue Routerを使ってSPAを作ってみたいと思い、制作しました。<!--
                            -->こだわったポイントはcontactページです。<!--
                            -->セキュリティを考慮して、入力フォームの検証をVue.jsのみではなく、PHPでも実施しています。
                        </p>
                        <button class="button" type="button">
                            <a href="https://github.com/uta1314/portfolio/" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </button>
                    </li>
                </fade-in>
                <fade-in>
                    <li class="work-item">
                        <div class="work-image">
                            <a href="http://webfantasy.stars.ne.jp/" target="_blank" rel="noopener noreferrer">
                                <img :src="workImage2" alt="作品画像2">
                            </a>
                        </div>
                        <p class="work-title">タイピングゲーム</p>
                        <p class="work-language">HTML5 / CSS3 / Vue.js / PHP</p>
                        <p class="work-description">
                            モンスターを倒したタイムを競うゲームです。<!--
                            -->プログラミングを学んで行くうちに、自分でも何かゲームが作れるのではないかと考え制作しました。<!--
                            -->そして、私が得意だったこともありタイピングゲームの制作に取り組みました。<!--
                            -->Vuexやaxiosについて学ぶ良い機会になりました。
                        </p>
                        <button class="button" type="button">
                            <a href="https://github.com/uta1314/typing/" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </button>
                        <p class="work-note">PCでのみプレイ可能です</p>
                    </li>
                </fade-in>
                <fade-in>
                    <li class="work-item">
                        <div class="work-image">
                            <a href="http://yuta-web.com/all_works/rpg/" target="_blank" rel="noopener noreferrer">
                                <img :src="workImage3" alt="作品画像3">
                            </a>
                        </div>
                        <p class="work-title">RPG</p>
                        <p class="work-language">HTML5 / JavaScript</p>
                        <p class="work-description">
                            ポケモン風のRPGです。<!--
                            -->CanvasとJavaScriptを使い制作しました。<!--
                            -->RPGの作り方をyoutubeで見て、自分なりのRPGを作ってみたいと思い、夏休みのほとんどを使い制作しました。<!--
                            -->友人達をゲームに登場させ、オリジナルのストーリーも考えました。<!--
                            -->しかし、クソゲー認定されてしまいました(笑)。<!--
                            -->人を楽しませるものを作るのは難しいなと、考えさせられる経験でした。
                        </p>
                        <button class="button" type="button">
                            <a href="https://github.com/uta1314/RPG" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </button>
                        <p class="work-note">PCでのみプレイ可能です</p>
                    </li>
                </fade-in>
                <fade-in>
                    <li class="work-item">
                        <div class="work-image">
                            <a href="http://yuta-web.com/all_works/santango/public/" target="_blank" rel="noopener noreferrer">
                                <img :src="workImage4" alt="作品画像4">
                            </a>
                        </div>
                        <p class="work-title">3単語</p>
                        <p class="work-language">HTML5 / CSS / PHP</p>
                        <p class="work-description">
                            毎日1つのお題と、3つの単語が与えられます。<!--
                            -->与えられた3つの単語を駆使して、お題を解決していくアプリです。<!--
                            -->投稿機能によって、発想力を鍛えながら、お互いのアイデアを共有することができます。<!--
                            -->制作するうえで苦労したのは、1日ごとにランダムな3つの単語を取得する処理です。<!--
                            -->データースとMediaWiki APIを利用することによって実現することができました。<!--
                            -->初めてのPHPの作品だったので、苦労することは多かったですが、データベースやAPIなど多くのことを学ぶことができました。
                        </p>
                        <button class="button" type="button">
                            <a href="https://github.com/uta1314/santango" target="_blank" rel="noopener noreferrer">GitHub</a>
                        </button>
                    </li>
                </fade-in>
            </ul>
        </div>
    </article>
</template>

<script>
import FadeIn from '../components/FadeIn'

export default {
    name: 'Works',
    components: {
        FadeIn,
    },
    data() {
        return {
            workImage1: require('@/assets/img/work1.png'),
            workImage2: require('@/assets/img/work2.png'),
            workImage3: require('@/assets/img/work3.png'),
            workImage4: require('@/assets/img/work4.png'),
        }
    }
}
</script>

<style scoped>
    .works {
        margin-bottom: 100px;
    }
    .container {
        width: 1100px;
        margin: 0 auto;
    }
    .work-list {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
    }
    .work-item {
        position: relative;
        width: 100%;
    }
    .work-image {
        width: 100%;
        height: 400px;
        border: 2px solid #000;
        overflow: hidden;
    }
    .work-image:hover img {
        transform: scale(1.2);
    }
    .work-image a {
        display: block;
        width: 100%;
        height: 100%;
    }
    .work-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: all 0.5s;
    }
    .work-title {
        font-size: 2.5rem;
        font-weight: bold;
        margin: 20px auto 10px;
    }
    .work-language {
        font-size: 2rem;
        margin: 0 auto 30px;
    }
    .work-description {
        line-height: 1.1;
        text-align: left;
        height: 100px;
        padding: 0 20px 0;
        overflow-y: auto;
    }
    .work-note {
        position: absolute;
        bottom: 10px;
        left: 20px;
        font-size: 1.3rem;
        color: rgb(255, 19, 19);
    }
    .work-note::before {
        content: '※';
        display: inline-block;
        margin-right: 5px;
    }
    .button {
        width: 100px;
        height: 30px;
        padding: 0;
        margin: 30px auto 30px;
        background-color: #fff;
        border: 1px solid #000;
    }
    .button a {
        display: block;
        font-size: 1.7rem;
        width: 100%;
        height: 100%;
        line-height: 30px;
    }
    /* fadeInコンポーネントのスタイル */
    .fade {
        width: calc(100% / 2 - 20px);
        padding: 10px 10px 0;
        margin-right: 40px;
        margin-bottom: 120px;
        box-shadow: 0 0 8px rgb(158, 156, 156);
    }
    .fade:nth-child(2n) {
        margin-right: 0;
    }
    .fade:nth-child(n + 5) {
        margin-bottom: 0;
    }
    /* レスポンシブ */
    /* パソコン */
    @media screen and (max-width: 1024px) {
        .container {
            width: 800px;
        }
        /* タブレット横 */
        @media screen and (max-width: 896px) {
            .container {
                width: 450px;
            }
            .work-list {
                display: block;
            }
            .work-image {
                height: 300px;
            }
            /* fadeInコンポーネントのスタイル */
            .fade {
                width: 100%;
                margin-right: 0;
            }
            .fade:nth-child(n + 4) {
                margin-bottom: 0;
            }
            /* スマートフォン */
            @media screen and (max-width: 480px) {
                .container {
                    width: 350px;
                }
                .work-image {
                    height: 200px;
                }
                .work-title {
                    font-size: 2rem;
                }
                .work-language {
                    font-size: 1.5rem;
                    margin: 0 auto 20px;
                }
                .work-note {
                    bottom: 5px;
                    left: 20px;
                    font-size: 0.8rem;
                }
                .button {
                    margin: 10px auto 25px;
                }
                .button a {
                    font-size: 1.4rem;
                }
                /* fadeInコンポーネントのスタイル */
                .fade {
                    margin-bottom: 50px;
                }
            }
        }
    }
</style>