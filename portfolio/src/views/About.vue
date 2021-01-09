<template>
    <article class="about">
        <h2 class="sub-title">about</h2>
        <div class="container">
            <!-- プロフィール -->
            <fade-in>
                <div class="profile">
                    <div class="profile-image">
                        <img :src="myImage" alt="プロフィール画像">
                    </div>
                    <div class="profile-content">
                        <p class="name">田上 優太</p>
                        <p class="birth">生年月日：2000年 12月 12日</p>
                        <p class="age">年齢：20歳</p>
                        <p class="description">授業でJavaScript(jQuery)を学んだことがきっかけでwebアプリケーションに興味を持ちました。現在はphpの勉強に取り組んでおりバックエンドエンジニアを目指しています</p>
                    </div>
                </div>
            </fade-in>
            <!-- スキル -->
            <fade-in>
                <div class="skill">
                    <h3 class="skill-title language">language</h3>
                    <ul class="skill-list">
                        <li class="skill-item">
                            <div class="skill-icon">
                                <font-awesome-icon :icon="['fab', 'html5']"></font-awesome-icon>
                            </div>
                            <p class="skill-name">HTML5</p>
                            <p class="skill-description">
                                Progateや本で基礎を学びました。その後、模写コーディングに取り組みました。
                            </p>
                        </li>
                        <li class="skill-item">
                            <div class="skill-icon">
                                <font-awesome-icon :icon="['fab', 'css3-alt']"></font-awesome-icon>
                            </div>
                            <p class="skill-name">CSS3</p>
                            <p class="skill-description">
                                Progateや本で基礎を学びました。その後、模写コーディングに取り組みました。
                            </p>
                        </li>
                        <li class="skill-item">
                            <div class="skill-icon">
                                <font-awesome-icon :icon="['fab', 'js-square']"></font-awesome-icon>
                            </div>
                            <p class="skill-name">JavaScript</p>
                            <p class="skill-description">
                                Webサイトに色々な動きを付けたいと思い学びました。
                            </p>
                        </li>
                        <li class="skill-item">
                            <div class="skill-icon">
                                <font-awesome-icon :icon="['fab', 'php']"></font-awesome-icon>
                            </div>
                            <p class="skill-name">PHP</p>
                            <p class="skill-description">
                                本で基礎を学び、お問い合わせフォームや、ランキングなどを作りました。
                            </p>
                        </li>
                        <li class="skill-item">
                            <div class="skill-icon">
                                <font-awesome-icon :icon="['fab', 'java']"></font-awesome-icon>
                            </div>
                            <p class="skill-name">Java</p>
                            <p class="skill-description">
                                授業で扱っていた言語です。オブジェクト指向について学習しました。
                            </p>
                        </li>
                    </ul>
                    <h3 class="skill-title framework">framework</h3>
                    <ul class="skill-list">
                        <li class="skill-item">
                            <div class="skill-icon">
                                <font-awesome-icon :icon="['fab', 'vuejs']"></font-awesome-icon>
                            </div>
                            <p class="skill-name">Vue.js</p>
                            <p class="skill-description">
                                コンポーネント機能やディレクティブ機能で、開発を容易に高速化できるところに魅力を感じ学習しました。
                            </p>
                        </li>
                    </ul>
                </div>
            </fade-in>
        </div>
    </article>
</template>

<script>
import FadeIn from '../components/FadeIn'

export default {
    name: 'About',
    components: {
        FadeIn
    },
    data() {
        return {
            myImage: require('@/assets/img/my.png')
        }
    }
}
</script>

<style scoped>
    .about {
        margin-bottom: 100px;
    }
    .container {
        width: 1000px;
        margin: 0 auto;
    }
    /* プロフィール */
    .profile {
        position: relative;
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
        padding: 50px 30px 30px;
        margin-bottom: 200px;
        box-shadow: 0 0 8px rgb(158, 156, 156);
    }
    .profile::after {
        content: 'profile';
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(-50%, -50%);
        font-size: 4rem;
        font-weight: bold;
        letter-spacing: 2px;
        text-shadow: 0 0 6px rgb(158, 156, 156);
    }
    .profile-image {
        width: 200px;
        height: 200px;
        box-shadow: 0 0 8px rgb(77, 75, 75);
        border-radius: 50%;
        overflow: hidden;
    }
    .profile-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .profile-content {
        width: 710px;
        padding-right: 20px;
        padding-left: 20px;
    }
    .profile-content p {
        font-size: 2rem;
        margin-bottom: 30px;
    }
    .profile-content p:nth-child(4) {
        margin-bottom: 0;
    }
    .profile-content .name {
        font-size: 3rem;
        font-weight: bold;
        letter-spacing: 5px;
    }
    .profile-content .name::after {
        content: '（たのうえ ゆうた）';
        display: inline-block;
        margin-left: 2px;
    }
    .profile-content .birth {
        text-align: left;
    }
    .profile-content .age {
        text-align: left;
    }
    .profile-content .description {
        line-height: 1.5;
        text-align: left;
    }
    /* スキル */
    .skill {
        position: relative;
        padding: 20px 50px 0;
        box-shadow: 0 0 8px rgb(158, 156, 156);
    }
    .skill::after {
        content: 'skill';
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(-50%, -50%);
        font-size: 4rem;
        font-weight: bold;
        letter-spacing: 2px;
        text-shadow: 0 0 6px rgb(158, 156, 156);
    }
    .skill-title {
        position: relative;
        font-size: 3rem;
        font-weight: bold;
        width: 200px;
        height: 40px;
        margin: 80px auto 80px;
    }
    .skill-title.language {
        margin-top: 30px;
    }
    .skill-title::after {
        position: absolute;
        bottom: 0;
        left: 0;
        content: '';
        width: 100%;
        height: 1px;
        background-color: #000;
    }
    .skill-list {
        display: flex;
        justify-content: flex-start;
        flex-wrap: wrap;
    }
    .skill-item {
        width: calc(100% / 3 - 10px);
        padding: 20px 0 20px;
        margin-right: 15px;
        margin-bottom: 50px;
        background-color: rgb(247, 247, 247);
        border-radius: 10px;
    }
    .skill-item:nth-child(3n) {
        margin-right: 0;
    }
    .skill-item:nth-child(n + 4) {
        margin-bottom: 0;
    }
    .skill-icon {
        font-size: 10rem;
        margin-bottom: 20px;
    }
    .skill-name {
        font-size: 2.5rem;
        font-weight: bold;
        margin-bottom: 20px;
    }
    .skill-description {
        line-height: 1.2;
        padding: 0 20px 0;
    }
    /* レスポンシブ */
    /* パソコン */
    @media screen and (max-width: 1024px) {
        .container {
            width: 700px;
        }
        /* プロフィール */
        .profile-image {
            width: 150px;
            height: 150px;
        }
        .profile-content {
            width: 460px;
            padding-right: 10px;
            padding-left: 10px;
        }
        .profile {
            align-items: center;
        }
        .profile-content p {
            font-size: 1.8rem;
        }
        .profile-content .name {
            font-size: 2.8rem;
        }
        /* スキル */
        .skill-item {
            width: calc(100% / 2 - 15px);
            margin-right: 30px;
        }
        .skill-item:nth-child(3n) {
            margin-right: 15px;
        }
        .skill-item:nth-child(n + 4) {
            margin-bottom: 50px;
        }
        .skill-item:nth-child(2n) {
            margin-right: 0;
        }
        .skill-item:nth-child(n + 5) {
            margin-bottom: 0;
        }
        /* タブレット横 */
        @media screen and (max-width: 896px) {
            /* 各ページのタイトル */
            .sub-title {
                margin-bottom: 100px;
            }
            .container {
                width: 450px;
            }
            /* プロフィール */
            .profile {
                display: block;
                margin-bottom: 150px;
            }
            .profile::after {
                left: 50%;
                transform: translate(-50%, -120%);
            }
            .profile-image {
               margin: 0 auto 20px;
            }
            .profile-content {
                width: 100%;
                padding-right: 10px;
                padding-left: 10px;
            }
            /* スキル */
            .skill::after {
                left: 50%;
                transform: translate(-50%, -120%);
            }
            .skill-title {
                font-size: 3rem;
                margin-bottom: 50px;
            }
            .skill-item {
                width: 100%;
                margin-right: 0;
            }
            .skill-item:nth-child(3n) {
                margin-right: 0;
            }
            .skill-icon {
                font-size: 8rem;
                margin-bottom: 10px;
            }
            .skill-name {
                font-size: 2.3rem;
            }
            /* スマートフォン */
            @media screen and (max-width: 480px) {
                /* 各ページのタイトル */
                .sub-title {
                    margin-bottom: 80px;
                }
                .container {
                    width: 300px;
                }
                /* プロフィール */
                .profile {
                    margin-bottom: 100px;
                    padding: 20px 20px 20px 20px;
                }
                .profile::after {
                    font-size: 2.8rem;
                }
                .profile-image {
                    width: 100px;
                    height: 100px;
                }
                .profile-content p {
                    font-size: 1.3rem;
                    margin-bottom: 20px;
                }
                .profile-content .name {
                    font-size: 2rem;
                }
                /* スキル */
                .skill::after {
                    font-size: 2.8rem;
                }
                .skill-title {
                    font-size: 2.5rem;
                    width: 150px;
                    height: 30px;
                    margin: 30px auto 20px;
                }
                .skill-title.language {
                    margin-top: 10px;
                }
                .skill-icon {
                    font-size: 6rem;
                    margin-bottom: 10px;
                }
                .skill-name {
                    font-size: 2rem;
                }
            }
        }
    }
</style>