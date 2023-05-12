<body>
@extends('layout')
@section('title')Авторизация @endsection
@section('main_content')

<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
              <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Вход в личный кабинет</p>
        <form method="POST" action="login" style="text-align: center; margin: auto;">
        @csrf
<div>
    Email
    <input style="margin: 10px;" type="email" name="email" value="{{ old('email') }}">
  </div>

  <div>
    Пароль
    <input style="margin: 10px;" type="password" name="password" id="password">
  </div>

  <div>
    <input style="margin: 10px;" type="checkbox" name="remember"> Запомнить меня
  </div>

  <div>
    <button style="margin: 10px;" type="submit">Вход</button>
  </div>
</form>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>

  
<!--<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Вход в личный кабинет</p>

                <form class="mx-1 mx-md-4">

                  <div class="d-flex flex-row align-items-center mb-4">
                  <form method="POST" action="login" style="text-align: center; margin: auto;">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    @csrf
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" id="form3Example1c" class="form-control" />
                      <label class="form-label" for="form3Example1c">Логин</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control" />
                      <label class="form-label" for="form3Example4c">Пароль</label>
                    </div>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="button" class="btn btn-primary btn-lg">Войти</button>
                  </div>
                  <div class="form-check d-flex justify-content-center mb-5">
                    <label class="form-check-label" for="form2Example3">
                      Нет аккаунта?<a href="registration"> Зарегистрируйтесь</a>
                    </label>
                  </div>
                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://farnedo.ru/news/wp-content/uploads/2022/11/girl-on-computer-02-.png"
                  class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
@endsection
</body>
