@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-main-banner/>
    <x-fondation-in-main/>
    <x-about-in-main/>
    <x-service-in-main/>
    <x-price-in-main/>
    <x-adv-section/>
    <x-galery-in-main/>
    <x-faq-in-main/>
    <x-pay-methods/>

    <section class="rew_section">
        <div class="container" id="review_app">
            <review></review>
        </div>
    </section>
@endsection

