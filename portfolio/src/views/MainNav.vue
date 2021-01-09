<template>
    <nav class="nav">
        <ul class="nav-list">
            <li class="nav-item"><router-link to="/">top</router-link></li>
            <li class="nav-item"><router-link to="/about">about</router-link></li>
            <li class="nav-item"><router-link to="/works">works</router-link></li>
            <li class="nav-item"><router-link to="/contact">contact</router-link></li>
        </ul>
    </nav>
</template>

<style scoped>
    .nav {
        width: 1000px;
        margin: 0 auto;
        padding: 20px 0 30px;
    }
    .nav-list {
        display: flex;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    .nav-item {
        width: 100px;
    }
    .nav-item::after {
        content: '';
        display: block;
        width: 100%;
        height: 1px;
        margin: 4px auto 0;
        background-color: #000;
    }
    .nav-item:hover::after {
        animation: border 0.6s ease-out;
    }
    .nav-item a {
        display: block;
        width: 100%;
        height: 100%;
        font-size: 2.2rem;
        opacity: 0.9;
    }

    @keyframes border {
        0% {
            width: 100%;
        }
        30% {
            width: 0;
        }
        100% {
            width: 100%;
        }
    }
    /* レスポンシブ */
    /* パソコン */
    @media screen and (max-width: 1024px) {
        .nav {
            width: 800px;
        }
        /* タブレット横 */
        @media screen and (max-width: 896px) {
            .nav {
                position: fixed;
                bottom: 10px;
                left: 50%;
                transform: translateX(-50%);
                z-index: 9999;
                width: 90%;
                padding: 10px 0 10px;
                border-radius: 10px;
                background-color: rgb(65, 65, 65);
                box-shadow: 0 0 5px rgb(49, 49, 49);
            }
            .nav-list {
                justify-content: flex-start;
            }
            .nav-item {
                width: calc(100% / 4);
                border-right: 1px solid #fff;
            }
            .nav-item:nth-of-type(4) {
                border-right: none;
            }
            .nav-item::after  {
                display: none;
            }
            .nav-item a {
                color: #fff;
            }
            /* スマートフォン */
            @media screen and (max-width: 480px) {
                .nav-item a {
                    font-size: 1.8rem;
                }
                .nav {
                    padding: 5px 0 5px;
                }
            }
        }
    }
</style>