
<h2>Создание профиля пациента</h2>

<h3><?= $message ?? ''; ?></h3>
<div class="center">
    <form method="post">
        <div class="blocks">
            <div class="block">
                <input type="text" name="FirstName"required placeholder="Фамилия">
            </div>
            <div class="block">
                <input type="text" name="LastName" required placeholder="Имя">
            </div>
            <div class="block">
                <input type="text"name="MiddleName" required placeholder="Отчество">
            </div>
            <div class="block">
                <input type="text"name="Birthday" required placeholder="Дата рождения">
            </div>
            <div class="block">
                <input type="text"name="Room_ID" required placeholder="Помещение">
            </div>



            <div class="block_">
                <button>CБРОС</button>
                <button>РЕГИСТРАЦИЯ</button>
            </div>
        </div>
    </form>
</div>
<style>
    .block_{
        display: flex;
        background-color: #D9B5B5;
        width: 420px;
        margin: 50px;
        border-radius: 30px;
    }

    h2{
        text-align: center;
    }

    .center{
        margin-top: 50px;
        display: flex;
        justify-content: center;
    }

    .signup{
        color: #fff;
        font-size: 20px;
    }
    button{
        background-color: grey;
        width: 420px;
        height: 50px;
        color: pink;
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
    .blocks{
        background-color: #D9B5B5;
        width: 772px;
        height: 739px;
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: 0;
        border-radius: 30px;
        /* justify-content: center; */
    }

    .block{
        background-color: #D9D9D9;
        width: 450px;
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
        border-radius: 20px;
    }

    .block > p {
        font-size: 24px;
    }
</style>