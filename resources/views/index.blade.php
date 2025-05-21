@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-main-banner/>
    <x-adv-section/>
    <x-about-in-main/>

    <x-service-in-main/>
    <x-price-in-main/>


    <x-faq-in-main/>
    <x-pay-methods/>
    <x-galery-in-main/>



    <section class="rew_section">
        <div class="container" id="review_app">
            <review></review>
        </div>
    </section>
@endsection

