<?php 
         try{
             \DB::connection()->getPDO();
              dump('DB:' . \DB::connection()->getDatabaseName());
        }
        catch(\Exception $e) {
            dump('DB: '. 'None');
        }
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-white ">
    <div class="container-fluid" style>
      <a class="navbar-brand  text-dark" href="home">IT-Skills</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active  text-dark" aria-current="page" href="home">Главная</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active  text-dark" aria-current="page" href="authors">Преподаватели</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="catalog">Каталог курсов</a>
          </li>
          <li class="nav-item">
            <a class="nav-link  text-dark" href="reviews">Отзывы</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="поиск..." aria-label="Search">
          <button class="btn btn-outline-secondary" type="submit">Поиск</button>
          <button class="btn btn-success" type="submit" style = "margin-left: 5px" ><a href="login">Вход</a></button>
          <button class="btn btn-outline-success" type="submit" style = "margin-left: 5px" href="registration">Регистрация</button>
        </form>
      </div>
    </div>
  </nav>

  <div class="conteiner">
    <!--Вывод текста после -->
@yield('main_content')
</div>
<!-- Footer -->

<div class="container">
  <footer class="py-5">
    <div class="row">
      <div class="col-6 col-md-2 mb-3">
        <h5>Навигация</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Главная</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Преподаватели</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Каталог</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Отзывы</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">О нас</a></li>
        </ul>
      </div>

      <div class="col-6 col-md-2 mb-3">
        <h5>Новостной раздел</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">О программировании</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Android-разработка</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Актуальные специальности IT</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FullStack-разработчик</a></li>
        </ul>
      </div>

      <div class="col-md-5 offset-md-1 mb-3">
        <form>
          <h5>Подписывайтесь на нашу новостную рассылку</h5>
          <p>Ежемесячный дайджест всего нового и интересного от нас.</p>
          <div class="d-flex flex-column flex-sm-row w-100 gap-2">
            <label for="newsletter1" class="visually-hidden">Адрес электронной почты</label>
            <input id="newsletter1" type="text" class="form-control" placeholder="Адрес электронной почты">
            <button class="btn btn-primary" type="button">Подписаться</button>
          </div>
        </form>
      </div>
    </div>

    <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
      <p>© 2023 Компания. Все права защищены.</p>
      <ul class="list-unstyled d-flex">
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#twitter"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"></use></svg></a></li>
        <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24"><use xlink:href="#facebook"></use></svg></a></li>
      </ul>
    </div>
  </footer>
</div>


</body>
</html>