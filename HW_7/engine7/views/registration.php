<h1>Регистрация</h1>
<div>
    <form method="post">
        <label for="login">Логин</label>
        <input name="login" type="text" placeholder="Введите логин">
        <label for="password">Пароль</label>
        <input name="password" type="text" placeholder="Введите пароль">
        <input type="submit" name="registration" value="Продолжить">
    </form>
</div>
<p><?= $statusRegistration ?></p>