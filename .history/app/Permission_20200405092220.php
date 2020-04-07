<?php

namespace App;

use Laratrust\Models\LaratrustPermission;

class Permission extends LaratrustPermission
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    /**
     * Scope to only include by action.
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param string $action
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAction($query, $action = 'read')
    {
        return $query->where('name', 'like', $action . '-%');
    }
}
