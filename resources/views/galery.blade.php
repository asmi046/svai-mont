@extends('layouts.all')

@section('main')
    <section class="page_section">
        <div class="container">
            <div class="page_content">
                <x-page-sidebar></x-page-sidebar>
                <div class="content">
                    <x-breadcrumbs.main title="Галерея наших работ"></x-breadcrumbs.main>
                    <h1 class="inner_page_h1">Галерея наших работ</h1>
                    <div class="galery galery_in_page">
                        @foreach ($galery as $item)
                            <x-cards.galery :item="$item" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

