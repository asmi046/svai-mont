@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Цены на нашу продукцию"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Цены на нашу продукцию</h1>
                    <div class="text_styles">
                        @foreach ($prices as $key => $table)
                            <div class="price_page_item">
                                <h2>Цены на {{ get_city_text($key) }}</h2>
                                <div class="table-wrapper">
                                    {!! get_city_text($table['table']) !!}
                                </div>

                                <a href="{{ $table['lnk'] }}" class="button">Подробнее</a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

