<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    /* protected $fillable = [
        'title',
        'description',
        'tags',
        'organization',
        'location',
        'email',
        'website'
    ]; */

    public function scopeFilter($query, array $filters)
    {
        // filter by tags
        if ($filters['tag'] ?? false) $query->where('tags', 'like', '%' . request('tag') . '%');

        // filter by search
        if ($filters['search'] ?? false)
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('description', 'like', '%' . request('search') . '%')
                ->orWhere('tags', 'like', '%' . request('search') . '%')
                ->orWhere('organization', 'like', '%' . request('search') . '%')
                ->orWhere('location', 'like', '%' . request('search') . '%');
    }
}
