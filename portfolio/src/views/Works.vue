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
                            <span>【概要】</span>
                            現在の自分のスキルや作品を分かりやすくまとめたものです。
                            <span>【制作理由】</span>
                            私の現在の状況を知ってもらうために制作しました。
                            <span>【苦労したこと】</span>
                            Top画面での風船が飛ぶアニメーションの実装に苦労しました。<!--
                            -->乱数を利用して毎回異なる座標に風船が出現するように実装しました。
                            <span>【工夫点】</span>
                            画像を圧縮して利用することにより、ページの表示速度を向上させています。
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
                            <span>【概要】</span>
                            タイピングでモンスターを倒したタイムを競うゲームです。
                            <span>【制作理由】</span>
                            ゲーム感覚でタイピングを楽しみながら練習して欲しいと思い制作しました。
                            <span>【苦労したこと】</span>
                            axiosを使ったPHPとの通信で、思うような結果が出ずに苦労しました。<!--
                            -->原因は、URLSearchParamsを使って送信しなくてはならないことでした。<!--
                            -->このことは、マニュアルに記述されていたことだったので、自分の読み込みの浅さを痛感させられる経験でした。
                            <span>【工夫点】</span>
                            モンスターのHPをwatchプロパティで監視することにより、途中でモンスターの画像が切り替わる演出をしています。
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
                            <a href="http://yuta-web.com/all_works/santango/public/" target="_blank" rel="noopener noreferrer">
                                <img :src="workImage3" alt="作品画像3">
                            </a>
                        </div>
                        <p class="work-title">3単語</p>
                        <p class="work-language">HTML5 / CSS / PHP</p>
                        <p class="work-description">
                            ※ ログインの際はユーザー名「root」<br />
                            パスワード「santango」を使用してみてください。
                            <span>【概要】</span>
                            毎日１つのお題と、３つの単語が与えられます。<!--
                            -->与えられた３つの単語を駆使して、お題を解決するアプリです。<!--
                            -->投稿機能によって、お互いのアイデアを共有することができます。
                            <span>【制作理由】</span>
                            新しいアイデアを生み出したい方が発想力を鍛えながら、お互いのアイデアを共有して欲しいと思い制作しました。
                            <span>【苦労したこと】</span>
                            ランダムな単語を取得するのに苦労しました。<!--
                            -->多数の単語の中からランダムに単語を取得できるようにMediaWikiを使用することで実装しました。
                            <span>【工夫点】</span>
                            ユーザー名を「root」でパスワードに「12345678」を使用してログインすることで管理者ページへ移動することができる機能を実装しました。
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
    .work-description span {
        display: block;
        font-weight: bold;
        margin: 15px 0 10px;
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
    .fade:nth-child(n + 3) {
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