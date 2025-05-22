@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Сертификаты"></x-breadcrumbs.main>
                    <h1>Сертификаты соответствия</h1>

                    <div class="certificates_list">
                        @foreach ($certificates as $item)
                            <x-cards.certificat :item="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

