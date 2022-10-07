<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\RoleMenu
 *
 * @property int $id
 * @property int $role_id
 * @property int $menu_id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu query()
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu whereMenuId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RoleMenu whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RoleMenu extends Model
{
    protected $table = 'um_role_menus';
}
