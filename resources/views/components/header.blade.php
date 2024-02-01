<header>
    <div class="container">
        <div class="header-content">
            <div class="logo">
                <a href="{{ route('index.index') }}" class="logo">libRead</a>
            </div>
            <nav>
                <a href="{{ route('index.index') }}" class="header-link">Главная</a>
                <a href="" class="header-link">Каталог</a>
                <a href="" class="header-link">Категории</a>
            </nav>
            <div class="header-btns">
                <a href="{{ route('user.loginPage') }}" class="btn">Вход</a>
                <a href="{{ route('user.registerPage') }}" class="btn">Регистрация</a>
            </div>
        </div>
    </div>
</header>