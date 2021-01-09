<template>
  <div id="app">
    <!-- ヘッダー -->
    <header class="header">
      <!-- ナビゲーション -->
      <main-nav></main-nav>
    </header>
    <router-view/>
  </div>
</template>

<script>
import 'reset.css'
import MainNav from './views/MainNav'

export default {
  name: 'App',
  components: {
    MainNav,
  }
}
</script>

<style>
/* 共通部分 */
html {
  font-size: 62.5%;
}
body {
  color: #000;
  font-size: 1.8rem;
  font-family: "Hiragino Kaku Gothic ProN", Meiryo, sans-serif;
  letter-spacing: 1px;
}
*,*::before,*::after {
  box-sizing: border-box;
}
a:link, a:visited, a:hover, a:active {
  text-decoration: none;
  color: #000;
}
/* 各ページのタイトル */
.sub-title {
  font-size: 4.5rem;
  font-weight: bold;
  text-align: center;
  margin-top: 50px;
  margin-bottom: 120px;
  letter-spacing: 2px;
}
.sub-title::before, .sub-title::after {
  content: '';
  display: inline-block;
  width: 100px;
  height: 2px;
  vertical-align: 8px;
  background-color: #000;
}
.sub-title::before {
  margin-right: 20px;
}
.sub-title::after {
  margin-left: 20px;;
}
/* ヘッダー */
.header {
  width: 100%;
  border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}
/* #app */
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
/* タブレット横 */
@media screen and (max-width: 896px) {
  body {
    font-size: 1.6rem;
  }
  /* 各ページのタイトル */
  .sub-title {
    margin-top: 30px;
    margin-bottom: 80px;
  }
  /* スマートフォン */
  @media screen and (max-width: 480px) {
    body {
      font-size: 1.3rem;
    }
    /* 各ページのタイトル */
    .sub-title {
      font-size: 3rem;
      margin-top: 30px;
      margin-bottom: 50px;
    }
  }
}
</style>
