@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Отзывы наших клиентов"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Отзывы наших клиентов</h1>

                    <div class="review_in_page">
                        @foreach ($reviews as $item)
                            <div class="reviews_card">
                                <div class="top_blk">
                                    <div class="photo">
                                        <img loading="lazy" src="{{ Storage::url($item->img) }}" alt="{{ $item->name }}">
                                    </div>
                                    <div class="person">
                                        <x-star-rating :rating="$item->score" readonly="true" />
                                        <p>{{ $item->name }}</p>
                                    </div>
                                </div>
                                <div class="text">

                                    {!! $item->description !!}
                                </div>
                                <p class="platform">Отзыв на: {{ $item->platform }}</p>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

