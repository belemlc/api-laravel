<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nome',
        'marca',
        'preco',
        'quantidade'
    ];

    public function setPrecoAttribute($value)
    {
        $this->attributes['preco'] = str_replace(",", ".", str_replace ("."," ",$value));
    }

    public function getPrecoAttribute($value)
    {
        return number_format($value, 2, ',', '.');
    }

    /**
     * Pick up all products or searchable
     *
     * @param array $attributes
     * @return void
     */
    public static function search(array $attributes = [])
    {
        $query = parent::whereNotNull('nome');
        if (isset($attributes['q'])) {
            $keyword = $attributes['q'];
            $query->where('nome', 'like', "%{$keyword}%");
        } if (isset($attributes['filter'])) {
            $filters = explode(':', $attributes['filter']);
            list($column, $value) = $filters;
            $query->where([$column => $value]);
        } if (isset($attributes['sort'])) {
            $sort = explode(':', $attributes['sort']);
            list($column, $value) = $sort;
            $query->orderBy($column, $value);
        }

        return $query;
    }
}
