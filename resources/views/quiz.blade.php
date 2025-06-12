@extends('layouts.all')

@section('main')
    <section class="quiz_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Калькулятор"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Расчет стоимости винтовых свай</h1>

                    <div id="quiz_app" class="quiz_wrapper">
                        <quiz></quiz>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

