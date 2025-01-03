<?php

$action = $_GET['action'] ?? '/';

match ($action) {
    '/' => (new HomeController)->index(),

    // Login / Logout
    'show-form-login' => (new UserLoginController)->showFormLogin(),
    'login'           => (new UserLoginController)->login(),
    'logout'          => (new UserLoginController)->logout(),

    // Register
    'register-form' => (new RegisterController)->index(),
    'register-store' => (new RegisterController)->store(),

    // Movie
    'movies-isShowing' => (new ClientMovieController)->list(),
    'movies-upcoming' => (new ClientMovieController)->list(),
    'movies-search' => (new ClientMovieController)->search(),
    'movies-detail' => (new ClientMovieController)->detail(),
    'search-page' => (new ClientMovieController)->searchPage(),
    'movies-schedule'   => (new ClientMovieController)->schedule(),

    // Đặt vé
    'picking-seat' => (new TicketController)->pickingSeat(),

    // Xử lý đặt vé
    'fndOptions' => (new TicketController)->foodAndDrinkOptions(),
    'order-detail'  => (new TicketController)->orderDetail(),

    // Xem tin tức
    'page-news' => (new NewPageController)->list(),
    'new-content' => (new NewPageController)->show(),
};
