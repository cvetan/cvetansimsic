<?php

namespace App\Models;

use Astrotomic\Translatable\Translatable;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Laracasts\Presenter\PresentableTrait;

class User extends Authenticatable
{
    use Notifiable, Sluggable, Translatable, PresentableTrait;

    /**
     * @var array
     */
    public $translatedAttributes = [
        'title_tag',
        'description_tag'
    ];

    /**
     * @var array
     */
    protected $guarded = [
        'id', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'is_admin'          => 'boolean'
    ];

    /**
     * @var string
     */
    protected $presenter = 'App\Presenters\UserPresenter';

    /**
     * @param string $password
     */
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'username'
            ]
        ];
    }

    /**
     * @return string
     */
    public function name(): string
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    /**
     * Returns user avatar image path.
     *
     * @return string
     */
    public function avatarImage(): string
    {
        if ($this->avatar !== null) {
            return asset($this->avatar);
        }

        return asset('images/users/user-no-image.png');
    }
}
