<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    /**
     *  His database's table
     *
     *  @var string
     */
    protected $table = 'product';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','description','availability'];
    
    public function colors (): HasMany
    {
        return $this->hasMany(Colors::class);
    }
    public function sizes (): HasMany
    {
        return $this->hasMany(Sizes::class);
    }
    
}
