<div class="uni_breadcrumbs">
    <div class="_container">

        <div itemscope itemtype="https://schema.org/BreadcrumbList" class="breadcrumbs">
            <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a itemprop="item" href="{{route('home')}}" >
                    <span itemprop="name">Главная</span>
                    <meta itemprop="position" content="0">
                </a>
            </span>



            @if (Request::route()->named('product_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Все винтовые сваи" itemprop="item" href="{{route('products')}}">
                        <span itemprop="name">Все винтовые сваи</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $prouct }}" itemprop="item">
                        <span itemprop="name">{{ $prouct }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route()->named('service_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Все услуги нашей компании" itemprop="item" href="{{route('services')}}">
                        <span itemprop="name">Все услуги</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $service }}" itemprop="item">
                        <span itemprop="name">{{ $service }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (Request::route()->named('fondation_page'))
                <span class="sep"> / </span>
                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                    <a title="Все виды фундаментов" itemprop="item" href="{{route('fondations')}}">
                        <span itemprop="name">Все виды фундаментов</span>
                        <meta itemprop="position" content="1">
                    </a>
                </span>

                <span class="sep"> / </span>

                <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                    <span title="{{ $fondation }}" itemprop="item">
                        <span itemprop="name">{{ $fondation }}</span>
                        <meta itemprop="position" content="2">
                    </span>
                </span>
            @endif

            @if (isset($title))
                <span class="sep"> / </span>
                    <span itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem" class="finish">
                        <span title="{{ $title }}" itemprop="item">
                            <span itemprop="name">{{ $title }}</span>
                            <meta itemprop="position" content="1">
                        </span>
                    </span>
            @endif

         </div>
    </div>
</div>
