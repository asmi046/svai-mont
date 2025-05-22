<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Product;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Json;
use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use MoonShine\UI\Fields\Position;
use MoonShine\TinyMce\Fields\TinyMce;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<Product>
 */
class ProductResource extends ModelResource
{
    protected string $model = Product::class;

    protected string $title = 'Продукция';

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
            Image::make('Изображение', 'img')->dir('products'),
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
                Text::make('Короткое название', 'short_title'),
                Text::make('Ссылка', 'slug'),
                Image::make('Изображение', 'img')->dir('products'),
                TinyMce::make('Описание верхнее', 'top_description'),
                TinyMce::make('Описание основное', 'description'),
                TinyMce::make('Цены', 'price'),
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
            Text::make('Короткое название', 'short_title'),
            Text::make('Ссылка', 'slug'),
            Image::make('Изображение', 'img')->dir('products'),
            TinyMce::make('Описание верхнее', 'top_description'),
            TinyMce::make('Описание основное', 'description'),
            TinyMce::make('Цены', 'price'),

        ];
    }

    /**
     * @param Product $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'short_title' => ['required'],
            'img' =>($item->img === "")?['required']:[],
        ];
    }
}
