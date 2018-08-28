<div class="panel__account">
    <div class="text__top">
        <p>ПАНЕЛЬ АВТОРИЗАЦИИ АККАУНТА</p>
    </div>
    <form action="php/authorization.php" method="post">
        <div class="form__authorization">
                <input type="text" name="login" placeholder="ВАШ ЛОГИН">
                <input type="password" name="password" placeholder="ВАШ ПАРОЛЬ">
                <p>ЗАБЫЛИ ПАРОЛЬ?</p>
        </div>

        <div class="button__accept--authorization">
            <button>ВОЙТИ В АККАУНТ</button>
        </div>
    </form>
</div>

<style>
    .panel__account {
        margin-left: 0;
    }
</style>
