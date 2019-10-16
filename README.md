# PHP-base
Homework for PHP Base

## Homework_1

1. Установить программное обеспечение: веб-сервер, базу данных, интерпретатор, текстовый редактор. Проверить, что все работает правильно.

2. Выполнить примеры из методички и разобраться, как это работает.

3. Объяснить, как работает данный код:
```
<?php
    $a = 5;
    $b = '05';
    var_dump($a == $b);         // Почему true?
    var_dump((int)'012345');     // Почему 12345?
    var_dump((float)123.0 === (int)123.0); // Почему false?
    var_dump((int)0 === (int)'hello, world'); // Почему true?
?>
```

4. Используя имеющийся HTML-шаблон, сделать так, чтобы главная страница генерировалась через PHP. Создать блок переменных в начале страницы. Сделать так, чтобы h1, title и текущий год генерировались в блоке контента из созданных переменных. Сделайте шаблон 3-я способами. **ВАЖНОЕ!!!**

5. *Используя только две переменные, поменяйте их значение местами. Например, если a = 1, b = 2, надо, чтобы получилось b = 1, a = 2. Дополнительные переменные использовать нельзя. Используйте битовые операции и постарайтесь сделать выражение в одну строчку.

## Homework_2

1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
```
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
Ноль можно считать положительным числом.
```

2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.

3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.

4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

5. Соберите при помощи renderTemplate предложенный шаблон в файле engine2, сделайте генерацию 2-х страничек. При желании меню вынесите в отдельный подшаблон. **ВАЖНОЕ!!!**

6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
```
22 часа 15 минут
21 час 43 минуты
```

## Homework_3

1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.

2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
```
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.
```

3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
```
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)
```

4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк. Должны обрабатываться корректно заглавные и знаки препинания, исходный массив расширять нельзя.

5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать. **ВАЖНОЕ!!!**

7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
for (…){ // здесь пусто}

8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».

9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах).

## Homework_4

1. Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все картинки в уменьшенном виде. При клике на фотографию она должна открыться. Размер картинок можно ограничивать с помощью свойства width. Список файлов должен быть в массиве.

2. Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней. Адрес папки с изображениями можно организовать через константу.

3. *Сделать это на движке4 на шаблонах.

4. *Сделайте все пути в php-коде абсолютными (не относится к html).

## Homework_5

1. Создать галерею изображений, состоящую из двух страниц:
```
просмотр всех фотографий (уменьшенных копий);
просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
```

2. В базе данных создать таблицу, в которой будет храниться информация о картинках (имя).

3. Дамп базы данных должен загружаться автоматически при запуске приложения.

4. *На странице просмотра фотографии полного размера под картинкой должно быть указано число ее просмотров.

5. *На странице просмотра галереи список фотографий должен быть отсортирован по популярности. Популярность = число кликов по фотографии.

## Homework_6

1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление. Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега ```<select>```. Отрисуйте исходные данные после рассчета, т.е. результат вывести в виде 2+2=4.

2. Создать калькулятор, который будет определять тип выбранной пользователем операции, ориентируясь на нажатую кнопку. При желании сделайте его асинхронным.

3. Добавить функционал отзывов в имеющийся у вас проект. При желании сделать отзывы к конкретному товару.

4. Создать страницу каталога товаров: ВАЖНОЕ
```
товары хранятся в БД;
страница формируется автоматически;
по клику на товар открывается карточка товара с подробным описанием.
подумать, как лучше всего хранить изображения товаров.
```

5. *Написать CRUD-блок для управления выбранным модулем через единую функцию (doFeedbackAction()).
