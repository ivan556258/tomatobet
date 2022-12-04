<?php

namespace Modules\Post\Models\V1;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Modules\Post\Models\V1\Post;

class TypeSport extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'type_sport';

    public function posts()
    {
      return $this->hasMany(Post::class);
    }
}
