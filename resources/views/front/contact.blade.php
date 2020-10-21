@extends('front.app')

@section('header')
    @include('front.header.header')
@show

@section('content')
    <!-- Main Content -->
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
            <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
            <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
            <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
            <form name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                <label>Ваше имя</label>
                <input type="text" class="form-control" placeholder="Ваше имя" id="name" required data-validation-required-message="Введите имя">
                <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                <label>Эл.адрес</label>
                <input type="email" class="form-control" placeholder="Эл.адрес" id="email" required data-validation-required-message="введите эл.адрес">
                <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group col-xs-12 floating-label-form-group controls">
                <label>Ваш номер</label>
                <input type="tel" class="form-control" placeholder="Ваш номер" id="phone" required data-validation-required-message="Введите ваш номер">
                <p class="help-block text-danger"></p>
                </div>
            </div>
            <div class="control-group">
                <div class="form-group floating-label-form-group controls">
                <label>Сообщение</label>
                <textarea rows="5" class="form-control" placeholder="Сообщение" id="message" required data-validation-required-message="Введите свое сообщение"></textarea>
                <p class="help-block text-danger"></p>
                </div>
            </div>
            <br>
            <div id="success"></div>
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Отправить</button>
            </form>
        </div>
        </div>
    </div>
@show