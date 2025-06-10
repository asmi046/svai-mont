@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Скидки и акции"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Скидки и акции</h1>
                    <div class="sales_wrapper">
                        @foreach ($sales as $item)
                            <x-cards.sale :item="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

