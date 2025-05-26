@extends('layouts.all')

@section('main')
<section class="page_section">
        <div class="container">
            <div class="page_content service_page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Услуги по монтажу винтовых свай в {{get_city_text('[city|pp]')}}"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Наши услуги в {{get_city_text('[city|pp]')}}</h1>
                    <div class="uni_list product_list">
                        @foreach ($services as $item)
                            <x-cards.service-page :item="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

