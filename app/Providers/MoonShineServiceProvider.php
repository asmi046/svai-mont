<?php

declare(strict_types=1);

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\MoonShine\Resources\MenuResource;
use App\MoonShine\Resources\MoonShineUserResource;
use MoonShine\Laravel\DependencyInjection\MoonShine;
use App\MoonShine\Resources\MoonShineUserRoleResource;
use MoonShine\Contracts\Core\DependencyInjection\CoreContract;
use MoonShine\Laravel\DependencyInjection\MoonShineConfigurator;
use MoonShine\Contracts\Core\DependencyInjection\ConfiguratorContract;
use App\MoonShine\Resources\ContactResource;
use App\MoonShine\Resources\ParametrResource;
use App\MoonShine\Resources\QuestionResource;
use App\MoonShine\Resources\ReviewResource;
use App\MoonShine\Resources\GaleryResource;
use App\MoonShine\Resources\CertificatResource;
use App\MoonShine\Resources\ProductResource;
use App\MoonShine\Resources\ServiceResource;
use App\MoonShine\Resources\PriceVidgetResource;
use App\MoonShine\Resources\PageResource;
use App\MoonShine\Resources\FondationResource;
use App\MoonShine\Resources\SeoDataResource;
use App\MoonShine\Resources\CityResource;

class MoonShineServiceProvider extends ServiceProvider
{
    /**
     * @param  MoonShine  $core
     * @param  MoonShineConfigurator  $config
     *
     */
    public function boot(CoreContract $core, ConfiguratorContract $config): void
    {
        // $config->authEnable();

        $core
            ->resources([
                SeoDataResource::class,
                MenuResource::class,
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                ContactResource::class,
                ParametrResource::class,
                QuestionResource::class,
                ReviewResource::class,
                GaleryResource::class,
                CertificatResource::class,
                ProductResource::class,
                ServiceResource::class,
                PriceVidgetResource::class,
                PageResource::class,
                FondationResource::class,
                CityResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
