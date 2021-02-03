<template>
    <article class="contact">
        <h2 class="sub-title">contact</h2>
        <div class="container">
            <div class="connection" :class="setClass">{{connection}}</div>
            <div class="form">
                <dl>
                    <dt>メールアドレス<span class="notes">*</span></dt>
                    <dd>
                        <div :class="{delete: inputData}">
                            <input type="text" name="mail" placeholder="hogehoge@example.com" class="mail" v-model="mail" maxlength="32" />
                        </div>
                        <div :class="{delete: makeSure}" class="check-item">{{mail}}</div>
                        <p class="error">{{mailMiss()}}</p>
                    </dd>
                    <dt>お名前<span class="notes">*</span></dt>
                    <dd>
                        <div :class="{delete: inputData}">
                            <input type="text" name="name" placeholder="山田 太郎" class="name" v-model="name" maxlength="11" />
                        </div>
                        <div :class="{delete: makeSure}" class="check-item">{{name}}</div>
                        <p class="error">{{nameMiss()}}</p>
                    </dd>
                    <dt>テキストボックス</dt>
                    <dd>
                        <div :class="{delete: inputData}">
                            <textarea name="tex-box" class="text-box" v-model="textBox" maxlength="300"></textarea>
                        </div>
                        <div :class="{delete: makeSure}" class="check-item text-box">{{textBox}}</div>
                    </dd>
                </dl>
                <div :class="{delete: inputData}">
                    <button class="button check" @click="clickBtn()">確認</button>
                </div>
                <div :class="{delete: makeSure}">
                    <button class="button back" @click="clickBtnBack()">戻る</button>
                    <button class="button send" @click="clickBtnSend()">送信</button>
                </div>
            </div>
        </div>
    </article>
</template>

<script>
import axios from 'axios'
// 下記の値がfalseの場合にのみメールを送信可能にする
var mailError = true;
var nameError = true;

export default {
    name: 'Contact',
    data() {
        return {
            mail: '',
            name: '',
            textBox: '',
            inputData: false,
            makeSure: true,
            postUrl: 'http://webfantasy.stars.ne.jp/php/Mail.php',
            connection: '',
            setClass: []
        }
    },
    methods: {
        // メールの入力内容の確認
        mailMiss() {
            let mail = this.mail;
            mailError = true;
            if (!mail) {
                return '*メールアドレスを入力してください';
            } else if (!mail.match(/^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/)) {
                return '*メールアドレスが間違っています';
            } else {
                mailError = false;
            }
        },
        // 名前の入力内容の確認
        nameMiss() {
            let name = this.name;
            nameError = true;
            if (!name) {
                return '*お名前を入力してください';
            } else {
                nameError = false;
            }
        },
        // 確認ボタンの押下時
        clickBtn() {
            this.inputData = true;
            this.makeSure = false;
        },
        // 戻るボタンの押下時
        clickBtnBack() {
            this.connection = '';
            this.inputData = false;
            this.makeSure = true;
        },
        // 送信ボタンの押下時
        clickBtnSend() {
            if (mailError === false && nameError === false) {
                this.connection = '送信中です';
                this.setClass = 'sending';
                let params = new URLSearchParams();
                params.append('mail', this.mail);
                params.append('name', this.name);
                params.append('textBox', this.textBox);

                axios.post(this.postUrl, params)
                .then((response) => {
                    this.setClass = [];
                    this.connection = response.data;
                })
                .catch((error) => {
                    this.setClass = [];
                    this.connection = '送信に失敗しました。申し訳ございませんが、時間をおいてからもう一度、送信をお願いいたします。';
                })
            } else {
                this.connection = '送信できませんでした。入力内容の確認をお願いいたします。';
            }
        }
    }
}
</script>

<style scoped>
    .contact {
        padding-bottom: 80px;
    }
    .container {
        width: 800px;
        margin: 0 auto;
    }
    .form dl {
        padding: 0 30px;
    }
    .form dt {
        text-align: left;
        margin-bottom: 15px;
        margin-left: 5px;
    }
    .form dd {
        margin-bottom: 30px;
    }
    .form dd:nth-of-type(3) {
        margin-bottom: 80px;
    }
    .form .error {
        font-size: 1.5rem;
        color: rgb(255, 19, 19);
        text-align: left;
        height: 20px;
        margin-top: 5px;
        margin-left: 5px;
    }
    .form input, .form textarea {
        font-size: 2rem;
        width: 100%;
        padding: 10px;
    }
    .form input {
        text-align: center;
    }
    .form textarea {
        font-size: 1.8rem;
        height: 200px;
        padding: 20px;
    }
    .button {
        font-size: 2rem;
        font-weight: bold;
        width: 120px;
        height: 40px;
        padding: 0;
        margin: 0 auto;
        background-color: #fff;
        border: 1px solid #000;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.4s;
    }
    .button.back {
        margin-right: 20px;
    }
    .button:hover {
        opacity: 0.8;
    }
    .delete {
        position: absolute;
        left: -9999px;
    }
    .notes {
        color: rgb(255, 19, 19);
    }
    /* 確認画面 */
    .check-item {
        padding: 15px 0;
        height: 50px;
        border-top: 1px solid #000;
        border-bottom: 1px solid #000;
        background-color: rgb(236, 236, 236);
    }
    .check-item.text-box {
        font-size: 1.8rem;
        height: 200px;
        text-align: left;
        padding: 20px;
        overflow-y: auto;
    }
    .connection {
        color: rgb(255, 19, 19);
        margin-bottom: 50px;
        padding: 0 40px;
        line-height: 1.5;
    }
    .sending {
        animation: sending 1.3s infinite;
    }
    /* 送信中のアニメーション */
    @keyframes sending {
        0% {
            opacity: 0;
        }
        100% {
            opacity: 1;
        }
    }
    /* タブレット横 */
    @media screen and (max-width: 896px) {
        .container {
            width: 400px;
        }
        .form .error {
            font-size: 1.3rem;
        }
        /* スマートフォン */
            @media screen and (max-width: 480px) {
                .container {
                    width: 300px;
                }
                .form input, .form textarea {
                    font-size: 1.5rem;
                    width: 100%;
                    padding: 10px;
                }
                .form .error {
                    font-size: 0.8rem;
                }
                .form dt {
                    margin-bottom: 10px;
                }
                .form dd {
                    margin-bottom: 10px;
                }
                .form dd:nth-of-type(3) {
                    margin-bottom: 50px;
                }
                .button {
                    font-size: 1.8rem;
                    width: 100px;
                    height: 40px;
                }
                /* 確認画面 */
                .check-item.text-box {
                    font-size: 1.6rem;
                    padding: 10px;
                }
                .connection {
                    margin-bottom: 30px;
                }
            }
    }
</style>