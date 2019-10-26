<? if (!$allow): ?>
    Войти | <a href="/registration/">Зарегистрироваться</a>
    <form action="/auth/login/" method="post">
        <input type='text' name='login' placeholder='Логин'>
        <input type='password' name='password' placeholder='Пароль'>
        Запомнить? <input type='checkbox' name='save'>
        <input type='submit' name='send' value="Войти">
    </form>
<? else: ?>
    Добро пожаловать, <?= $user ?> <a href='/auth/logout/'>Выход</a><br>
<? endif; ?>
<nav>
    <a href="/">Главная</a>
    <a href="/goods/">Каталог</a>
    <a href="/gallery/">Галерея</a>
    <a href="/news/">Новости</a>
    <a href="/feedback/">Отзывы</a>
    <a href="/basket/">Корзина <span id="count"><?= $count ?></span></a>
    <? if (is_admin()): ?>
        <a href="/admin/">Администратор</a>
    <? endif; ?>
</nav>