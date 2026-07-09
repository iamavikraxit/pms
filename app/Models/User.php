<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UserFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'password_expires_at'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, HasUlids, Notifiable;

    public function permissions(): MorphToMany
    {
        return $this->morphToMany(Permission::class, 'model', 'model_has_permissions');
    }

    public function roles(): MorphToMany
    {
        return $this->morphToMany(Role::class, 'model', 'model_has_roles');
    }

    public function hasPermission(string $permissionName): bool
    {
        return $this->permissions()->where('short_name', $permissionName)->exists();
    }

    public function hasRole(string $roleName): bool
    {
        return $this->roles()->where('name', $roleName)->exists();
    }

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
