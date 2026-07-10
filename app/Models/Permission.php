<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphToMany;

class Permission extends Model
{
    use HasFactory, HasUlids;

    protected $guarded = [];


    public function users(): MorphToMany
    {
        return $this->MorphToMany(User::class, 'model', 'model_has_permissions');
    }

    public function scopeSearch(Builder $query, ?string $term): Builder
    {
        $search = trim((string) $term);

        return $query->when($search !== '', function (Builder $query) use ($search) {
            $term = '%' . mb_strtolower($search, 'UTF-8') . '%';

            $query->whereRaw('LOWER(name) LIKE ?', [$term]);
        });
    }
}
