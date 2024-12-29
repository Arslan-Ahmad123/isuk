<?php

namespace App\Models;

use App\Helpers\AppConstants;
use App\Models\User\EmployeeCourse;
use App\Models\User\Skill;
use App\Models\User\UserExperience;
use App\Models\User\UserReporting;
use App\Models\User\UserResignation;
use App\Models\User\UserWorkShift;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Storage;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'password',
        'first_name',
        'last_name',
        'email',
        'department_id',
        'profile_photo',
        'role_id',
        'status'

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',

    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */


    public function departments()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    protected function profilePhotoUrl(): Attribute
    {

        return Attribute::make(
            get: fn (?string $value, $attributes) => !is_null($attributes['profile_photo']) ? Storage::url(AppConstants::PROFILE_IMAGE . '/' . $attributes['profile_photo']) : Storage::url(AppConstants::PROFILE_IMAGE . '/' . 'user-profile.svg '),
        );
    }

    public function role()
    {
        return $this->hasOne(Role::class);
    }



    protected function statusTitle(): Attribute
    {
        return Attribute::make(
            get: fn (mixed $value, array $attributes) => $attributes['status'] == 1 ? 'Active' : 'Inactive'
        );
    }



    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes) => ($attributes['first_name'] ?? '') . ' ' . ($attributes['last_name'] ?? ''),
        );
    }


}
