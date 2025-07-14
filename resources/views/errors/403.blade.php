@extends('layouts.error')

@section('main')
<section class="error-page">
    <div class="container">
        <h1>403</h1>
        <div class="buttons">
            <a href="{{ route('home') }}" class="button btn-primary">
                На главную
            </a>

            <a href="{{ route('services') }}" class="button btn-secondary">
                Услуги
            </a>

            <a href="{{ route('contacts') }}" class="button btn-outline">
                Связаться с нами
            </a>

        </div>
    </div>
</section>
@endsection
