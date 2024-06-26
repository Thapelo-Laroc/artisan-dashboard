<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'parent_name',
        'file_path',
        'provider',
        'provider_id',
        'provider_token',
        'parent_id',

    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function teams()
{
    return $this->hasMany(Team::class);
}

public function parent()
{

    return $this->belongsTo(User::class, 'parent_id');
}

public function children()
{
    return $this->hasMany(User::class, 'parent_id');
}

public static function generateUserName($username)
{
    if($username == null){
        $username = Str::lower(Str::random(length: 8));
    }
    if(User::where('username', $username)->exists()){
        $newUsername = $username.Str::lower(Str::random(length: 3));
        $username = self::generateUserName($newUsername);
    }
    return $username;
}




}
