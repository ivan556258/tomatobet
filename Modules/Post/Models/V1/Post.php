<?php

namespace Modules\Post\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titleText',
        'h1Text',
        'keywordsText',
        'prevText',
        'DescText',
        'eDataHtml',
        'eDataOrigin',
        'smallPicture',
        'bigPicture',
        'oneHashTag',
        'twoHashTag',
        'threeHashTag',
        'fooHashTag',
        'fiveHashTag',
        'type_sport_id',
        'public',
    ];

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

}
