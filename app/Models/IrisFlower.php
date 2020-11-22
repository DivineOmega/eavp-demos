<?php

namespace App\Models;

use DivineOmega\EloquentAttributeValuePrediction\Interfaces\HasPredictableAttributes;
use DivineOmega\EloquentAttributeValuePrediction\Traits\PredictsAttributes;
use DivineOmega\Sorcery\Traits\Sorcery;
use DivineOmega\uxdm\Objects\Sources\CSVSource;
use Illuminate\Database\Eloquent\Model;

class IrisFlower extends Model implements HasPredictableAttributes
{
    use PredictsAttributes, Sorcery;

    public function getSource()
    {
        return new CsvSource(storage_path('app/data/iris.csv'));
    }

    protected $casts = [
        'sepal_length' => 'float',
        'sepal_width' => 'float',
        'petal_length' => 'float',
        'petal_width' => 'float',
        'species' => 'string',
    ];

    public function registerPredictableAttributes(): array
    {
        return [
            'species' => [
                'sepal_length',
                'sepal_width',
                'petal_length',
                'petal_width',
            ],
            'petal_width' => [
                'sepal_length',
                'sepal_width',
                'petal_length',
                'species',
            ]
        ];
    }
}
