@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content fondation_page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main fondation="{{ get_city_text($fondation->title) }}"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">{{ get_city_text($fondation->title) }}</h1>
                    <div class="text_styles">
                        <div class="img_wrapper img_wrapper_opot">
                            <img src="{{ Storage::url($fondation->img) }}" alt="{{ $fondation->title }}" class="img-fluid">
                        </div>
                        {{-- <div class="inner_page_top">
                            <div class="img_wrapper">
                                <img src="{{ Storage::url($fondation->img) }}" alt="{{ $fondation->title }}" class="img-fluid">
                            </div>

                            <div class="text">
                                {!! get_city_text($fondation->top_description) !!}
                            </div>
                        </div>
                         --}}
                        {!! get_city_text($fondation->description) !!}

                        <x-page-cta/>

                        <h2 class="in_page_h2">Цены</h2>
                        <div class="table-wrapper">
                            {!! get_city_text($fondation->price) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

