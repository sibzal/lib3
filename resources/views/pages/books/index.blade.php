@extends('layouts.app')

@section('title', 'Товар')

@section('content')
            <div class="master-class">
                <div class="container">
                    <h1 class="title">Товар: №1</h1>
                    <div class="card">
                        <div class="img_card">
                            <img src="{{ asset('public/assets/img/book2.jpg') }}" alt="photo">
                        </div>
                        <div class="card_texts">
                            <div class="category_view">
                                <p class="category">категория</p>
                            </div>
                            <p class="name_card">имя</p>
                            
                            <p class="description">описание</p>
                            <div class="btns_wrapper">
                                <p class="price_in_card">1200 ₽</p>
                            </div>
                            <div class="delete_edit">
                                <a href="">
                                    <img src="{{ asset('public/assets/img/edit.svg') }}" alt="edit" class="edit">
                                </a>
                                <a href="">
                                    <img src="{{ asset('public/assets/img/delete.svg') }}" alt="edit" class="edit">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?
    ?>
@endsection