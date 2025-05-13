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
                MenuResource::class,
                MoonShineUserResource::class,
                MoonShineUserRoleResource::class,
                ContactResource::class,
                ParametrResource::class,
                QuestionResource::class,
                ReviewResource::class,
            ])
            ->pages([
                ...$config->getPages(),
            ])
        ;
    }
}
