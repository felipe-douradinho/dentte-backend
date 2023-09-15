<?php

namespace Modules\User\Entities;


// use Illuminate\Contracts\Auth\MustVerifyEmail;
use EloquentFilter\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Stock\Entities\StockHistory;
use Modules\User\Database\Factories\UserFactory;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles, Filterable;

    #protected $connection = 'mysql_auth';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_secret',
        'two_factor_recovery_codes',
        'two_factor_confirmed_at',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected static function newFactory(): UserFactory
    {
        return \Modules\User\Database\Factories\UserFactory::new();
    }

    public function modelFilter()
    {
        return $this->provideFilter(\Modules\User\Http\Requests\Filters\UserFilter::class);
    }

    /**
     * Get the relationship.
     */
    public function stock_actions(): HasMany
    {
        return $this->hasMany(StockHistory::class, 'created_by');
    }

    /**
     * Get the relationship.
     */
    public function stock_authorizations(): HasMany
    {
        return $this->hasMany(StockHistory::class, 'authorized_by');
    }
}
