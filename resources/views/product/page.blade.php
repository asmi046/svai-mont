@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content product_page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main prouct="{{ get_city_text($product->title) }}"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">{{ get_city_text($product->title) }}</h1>
                    <div class="text_styles">
                        <div class="img_wrapper img_wrapper_opot">
                            <img src="{{ Storage::url($product->img) }}" alt="{{ $product->title }}" class="img-fluid">
                        </div>
                        {{-- <div class="inner_page_top">
                            <div class="img_wrapper">
                                <img src="{{ Storage::url($product->img) }}" alt="{{ $product->title }}" class="img-fluid">
                            </div>

                            <div class="text">
                                {!! get_city_text($product->top_description) !!}
                            </div>
                        </div> --}}
                        {!! get_city_text($product->description) !!}

                        <x-page-cta/>

                        <h2 class="in_page_h2">Цены</h2>
                        <div class="table-wrapper">
                            {!! get_city_text($product->price) !!}
                        </div>

                    </div>

                    <x-pay-methods-in-page/>
                </div>
            </div>
        </div>
    </section>
@endsection

