<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
     * @var string[]
     */
    protected $fillable = [
        'name',
        'npm',
        'birth_date',
        'place_of_birth',
        'phone',
        'nation',
        'gender',
        'id_medsos',
        'no_idcard',
        'scan_idcard',
        'email',
        'password',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
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
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function getcontact()
    {
        return $this->hasOne(Contact::class, 'id', 'id');
    }
    public function getacademic()
    {
        return $this->hasOne(Academic::class, 'id', 'id');
    }
    public function getmedic()
    {
        return $this->hasOne(Medic::class, 'id', 'id');
    }
    public function getmbkm()
    {
        return $this->hasOne(MbkmProgram::class, 'id', 'id');
    }
    public function getla()
    {
        return $this->hasOne(LearningAggrement::class, 'id', 'id');
    }
    public function getps()
    {
        return $this->hasOne(PersonalStatement::class, 'id', 'id');
    }
}
