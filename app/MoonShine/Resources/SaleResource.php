<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Sale;
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
 * @extends ModelResource<Sale>
 */
class SaleResource extends ModelResource
{
    protected string $model = Sale::class;

    protected string $title = 'Sales';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Text::make('Подпись', 'title'),
            Text::make('Подпись доп.', 'sub_title'),
            Image::make('Изображение', 'img')->dir('sale'),
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
                Text::make('Подпись', 'title'),
                Text::make('Подпись доп.', 'sub_title'),
                Image::make('Изображение', 'img')->dir('sale'),
                TinyMce::make('Описание', 'description'),
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
            Text::make('Подпись', 'title'),
            Text::make('Подпись доп.', 'sub_title'),
            Image::make('Изображение', 'img')->dir('sale'),
            TinyMce::make('Описание', 'description'),
        ];
    }

    /**
     * @param Sale $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'sub_title' => ['required'],
            'description' => ['required'],
            'img' =>($item->img === "")?['required']:[],
        ];
    }
}
