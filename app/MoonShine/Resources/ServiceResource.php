<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Service;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Service>
 */
class ServiceResource extends ModelResource
{
    protected string $model = Service::class;

    protected string $title = 'Услуги';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок сортировки', 'order'),
            Text::make('Наименование', 'title'),
            Image::make('Изображение', 'img')->dir('services'),
        ];
    }

    /**
     * @return list<ComponentContract|FieldContract>
     */
    protected function formFields(): iterable
    {
        return [
            Box::make([
                ID::make(),
                Number::make('Порядок сортировки', 'order'),
                Text::make('Наименование', 'title'),
                Text::make('Подзаголовок', 'sub_title'),
                Image::make('Изображение', 'img')->dir('services'),
                TinyMce::make('Описание верхнее', 'top_description'),
                TinyMce::make('Описание основное', 'description'),
                Text::make('Цена', 'price')
            ])
        ];
    }

    /**
     * @return list<FieldContract>
     */
    protected function detailFields(): iterable
    {
        return [
            ID::make(),
            Number::make('Порядок сортировки', 'order'),
            Text::make('Наименование', 'title'),
            Text::make('Подзаголовок', 'sub_title'),
            Image::make('Изображение', 'img')->dir('services'),
            TinyMce::make('Описание верхнее', 'top_description'),
            TinyMce::make('Описание основное', 'description'),
            Text::make('Цена', 'price')
        ];
    }

    /**
     * @param Service $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'sub_title' => ['required'],
            'img' =>($item->img === "")?['required']:[],
        ];
    }
}
