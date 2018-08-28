<style>
    .footer{
        position: absolute;
        top:75%;
        left: 0;
        margin-top: 4.7%;
    }
</style>
<div class="panel__account">
    <div class="text__top">
        <p>ПАНЕЛЬ АВТОРИЗАЦИИ АККАУНТА</p>
    </div>
    <form class="auth" action="php/authorization.php" method="post">
        <div class="form__authorization">
                <input type="text" name="login" id="auth-login" placeholder="ВАШ ЛОГИН">
                <input type="password" name="password" id="auth-password" placeholder="ВАШ ПАРОЛЬ">
                <p>ЗАБЫЛИ ПАРОЛЬ?</p>
        </div>

        <div class="button__accept--authorization">
            <button>ВОЙТИ В АККАУНТ</button>
        </div>
    </form>
</div>
