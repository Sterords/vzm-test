<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>VZM - Test</title>
    <link rel="icon" href="{{ asset("public/images/logo.ico") }}">
    <link rel="stylesheet" href="{{ asset("public/css/stylesheet.css") }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.js"></script>
    <script src="https://malsup.github.io/jquery.form.js"></script>
</head>

<body>

<header>
    <div class="contact">
        <p>Телефон: <a href="tel:(499) 340-94-71">(499) 340-94-71</a></p>
        <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
    </div>
    <div class="image"><img style="image-rendering: crisp-edges" width="163px" height="172px" src="public/images/logo.png" ></div>
    <div class="title"><h1>Комментарии</h1></div>
</header>

<main>

    @foreach($comment as $value_comment)
        <div>
            <p class="number">№{{$value_comment->id}}</p>
            <p class="user">{{$value_comment->name}}</p>
            <p class="time">{{$value_comment->date}}</p>
            <p class="comment">{{$value_comment->comment}}</p>
        </div>
    @endforeach


    <div class="line"></div>

        @if($errors->any())
            <div class="error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    <form id="add_comment" name="callback" method="POST" action="{{ Route('form') }}">
        @csrf
        <legend>Оставить комментарий</legend>
        <p>Ваше имя</p>
        <input class="form-user" type="text" name="name">
        <p>Ваш комментарий</p>
        <textarea name="comment"></textarea>
            <input class="btn" type="submit" value="Отправить">
    </form>

</main>
<footer>
    <div class="footer-contact">
                <p>Телефон: <a href="tel:(499) 340-94-71">(499) 340-94-71</a></p>
                <p>Email: <a href="mailto:info@future-group.ru">info@future-group.ru</a></p>
                <p>Адрес: 115088 Москва, ул. 2-я Машиностроения, д. 7 стр. 1</p>
                <p class="copyright">© 2010 - 2014 Future. Все права защищены</p>
    </div>
    <div class="footer-image"><img style="image-rendering: crisp-edges" width="101px" height="106px" src="public/images/logo.png" ></div>
</footer>



</body>

</html>
