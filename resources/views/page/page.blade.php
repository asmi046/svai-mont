@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main :title="get_city_text($page->title)"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">{{ get_city_text($page->title) }}</h1>
                    <div class="text_styles">
                        {!! get_city_text($page->description) !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

