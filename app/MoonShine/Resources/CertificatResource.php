<?php

declare(strict_types=1);

namespace App\MoonShine\Resources;

use App\Models\Certificat;
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
 * @extends ModelResource<Certificat>
 */
class CertificatResource extends ModelResource
{
    protected string $model = Certificat::class;

    protected string $title = 'Сертификаты';

    protected string $column = 'title';

    /**
     * @return list<FieldContract>
     */
    protected function indexFields(): iterable
    {
        return [
            ID::make()->sortable(),
            Number::make('Порядок сортировки', 'order'),
            Text::make('Подпись', 'title'),
            Image::make('Изображение', 'img')->dir('certificates')
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
                Number::make('Порядок сортировки', 'order')->default(0),
                Text::make('Подпись', 'title'),
                Image::make('Изображение', 'img')->dir('certificates')
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
            Image::make('Изображение', 'img')->dir('certificates')
        ];
    }

    /**
     * @param Certificat $item
     *
     * @return array<string, string[]|string>
     * @see https://laravel.com/docs/validation#available-validation-rules
     */
    protected function rules(mixed $item): array
    {
        return [
            'title' => ['required'],
            'img' =>($item->img === "")?['required']:[],
        ];
    }
}
