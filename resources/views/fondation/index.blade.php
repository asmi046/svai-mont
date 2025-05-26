@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content fondations_page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Виды фундаментов монтируемые в {{get_city_text('[city|pp]')}}"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Виды фундаментов монтируемые в {{get_city_text('[city|pp]')}}</h1>
                    <div class="uni_list product_list">
                        @foreach ($fondations as $item)
                            <x-cards.fondation-page :item="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

