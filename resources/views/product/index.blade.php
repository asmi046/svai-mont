@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content product_page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Винтовые сваи в {{get_city_text('[city|pp]')}}"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Винтовые сваи в {{get_city_text('[city|pp]')}}</h1>
                    <div class="uni_list product_list">
                        @foreach ($products as $item)
                            <x-cards.product :item="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

