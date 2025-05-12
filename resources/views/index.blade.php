@extends('layouts.all')

@php
    $title = "";
    $description = "";
@endphp

@section('title', $title)
@section('description', $description)

@section('main')
    <x-main-banner></x-main-banner>
    <x-adv-section></x-adv-section>
    <x-faq-in-main></x-faq-in-main>
    <x-pay-methods></x-pay-methods>
@endsection

