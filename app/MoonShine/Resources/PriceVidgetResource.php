<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\PriceVidget;
use MoonShine\UI\Fields\ID;

use MoonShine\UI\Fields\Text;
use MoonShine\UI\Fields\Image;
use MoonShine\UI\Fields\Number;
use Illuminate\Database\Eloquent\Model;
use MoonShine\UI\Components\Layout\Box;
use MoonShine\Contracts\UI\FieldContract;
use MoonShine\Contracts\UI\ComponentContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<PriceVidget>
 */
class PriceVidgetResource extends ModelResource
{
    protected string $model = PriceVidget::class;

    protected string $title = 'Цены на главной';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Number::make('Размер сваи', 'size'),
            Image::make('Изображение', 'img')->dir('price'),
            Text::make('Цена', 'price'),
            Text::make('Цена монтажа', 'price_mont'),
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
                Number::make('Размер сваи', 'size'),
                Number::make('Порядок вывода', 'order'),
                Image::make('Изображение', 'img')->dir('price'),
                Text::make('Цена', 'price'),
                Text::make('Цена монтажа', 'price_mont'),
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
            Number::make('Размер сваи', 'size'),
            Number::make('Порядок вывода', 'order'),
            Image::make('Изображение', 'img')->dir('price'),
            Text::make('Цена', 'price'),
            Text::make('Цена монтажа', 'price_mont'),
        ];
    }

    /**
     * @param PriceVidget $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'size' => ['required'],
            'img' =>($item->img === "")?['required']:[],
            'price' => ['required', 'numeric'],
            'price_mont' => ['required', 'numeric'],
        ];
    }
}
