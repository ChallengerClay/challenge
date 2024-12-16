<?php

namespace App\Models;

use App\Rules\Genre as RulesGenre;
use Illuminate\Database\Eloquent\Model;


class Genre extends Model
{
    protected $fillable = [
        'name'
    ];

    public static function rules(): array{
        return [
            'name'  => ['required','string','max:50',new RulesGenre],
        ];
    }
}
