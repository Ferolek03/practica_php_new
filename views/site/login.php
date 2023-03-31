<style>
    .center{
        margin-top: 110px;
        display: flex;
        justify-content: center;
    }

    .blocks{
        background-color: #D9D9D9;
        width: 772px;
        height: 739px;
        display: flex;
        flex-direction: column;
        align-items: center;
        border-radius: 10px;
    }

    .block{
        background-color: #D9D9D9;
        width: 533px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top:50px;
    }

    .block > p {
        font-size: 24px;
    }

    button{
        background-color: white;
        width: 420px;
        height: 50px;
        color: grey;
        font-size: 25px;
        border-radius: 10px;
    }
    input{
        padding: 10px;
        width: 400px;
        border: 0;
        color: pink;
        border-radius: 10px;
        font-size: 20px;
    }

    h2{
        text-align: center;
    }

</style>

<h2>Авторизация</h2>
<h3><?= $message ?? ''; ?></h3>

<h3><?= app()->auth->user()->name ?? ''; ?></h3>
<?php
if (!app()->auth::check()):
    ?>
    <form method="post">

        <div class="center">
            <div class="blocks">
                <div class="block">
                    <input type="text" name="FirstnName"  placeholder="Фамилия">
                </div>
                <div class="block">
                    <input type="text" name="LastName"  placeholder="имя">
                </div>
                <div class="block">
                    <input type="password" name="password"  placeholder="password">
                </div>
                <div class="block">
                    <button>Войти</button>
                </div>
            </div>
    </form>
    </div>
<?php endif;
