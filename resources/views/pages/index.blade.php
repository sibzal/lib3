@extends('layouts.app')

@section('title', 'Главная страница')

@section('content')
    <!-- баннер -->
    <div class="banner">
            <div class="container">
                <div class="banner-content">
                    <div class="banner-texts">
                        <p class="name-shop">libRead</p>
                        <p class="descr-shop">Продажа интересных книг для любителей</p>
                        <p class="name-shop">лучшие книги по доступным ценам!</p>
                        <div class="banner-btn">
                            <a href="" class="btn">Посмотреть книги</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- баннер -->

    </div>
    <!-- градиент -->

    <!-- каталог -->
    <div class="catalog" id="catalog">
        <div class="container">
            <div class="title-wrapper">
                <div class="line1"> </div>
                <h1 class="title">Каталог</h1>
                <div class="line2"></div>
            </div>
            <div class="category-wrapper">
                <a href="" class="category">шины</a>
                <a href="" class="category">масла</a>
                <a href="" class="category">ароматизаторы</a>
            </div>
            <div class="catalog-content">
                <div class="catalog-item">
                    <div class="catalog-item-img">
                        <img src="{{ asset('public/assets/img/book2.jpg') }}" alt="tovar" class="catalog__image">
                    </div>
                    <div class="descr-tovar">
                        <p class="name-tovar">Шина зимняя</p>
                        <div class="price-btn">
                            <p class="price">1000 ₽</p>
                            <a href="" class="btn-arrow">
                                <img src="{{ asset('public/assets/img/arrow.svg') }}" alt="arrow" class="arrow">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- каталог -->


@endsection