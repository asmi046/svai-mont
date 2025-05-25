@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Ответы на часто задаваемые вопросы"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">FAQ</h1>

                    <div class="faq faq_in_page">
                        @foreach ($faq as $item)
                            <x-cards.faq :item="$item" />
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection

