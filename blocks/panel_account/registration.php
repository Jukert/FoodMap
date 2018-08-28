
<div class="panel__account">
    <div class="text__top">
        <p>ПАНЕЛЬ РЕГИСТРАЦИИ АККАУНТА</p>
    </div>
    <form action="php/registration.php" method="post">

        <div class="form__registration">
                <input type="text" name="login" placeholder="ВАШ ЛОГИН">
                <input type="password" name="password" placeholder="ВАШ ПАРОЛЬ">
                <input type="password" name="repeat_pass" placeholder="ПОВТОРИТЕ ПАРОЛЬ">
                <input type="email" name="email" placeholder="ВАША ПОЧТА">
                <input type="text" name="name" placeholder="ВАШЕ ИМЯ">
                <input type="tel" name="phone" placeholder="ВАШ ТЕЛЕФОН">
        </div>

        <div class="button__accept--registration">
            <button>ЗАРЕГИСТРИРОВАТЬСЯ</button>
        </div>
    </form>
</div>