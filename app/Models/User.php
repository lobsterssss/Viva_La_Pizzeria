<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Enums\Role;
use App\Enums\Roles;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{

    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'GB',
        'Email',
        'HASH',
        'roll'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'HASH',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'role' => Roles::class,
            'email_verified_at' => 'datetime',
            'HASH' => 'hashed',
        ];
    }
    
    public function create_user($data)
    {
        $errors = $this->validate($data);
        if(!$errors):
            $data['HASH'] = Hash::make($data['HASH']);
            $data['HASH'];
            $this->create($data);
            return "account succesfull aangemaakt";
        endif;
        return $errors;
    }
    
    public function validate($data)
    {
        $rules = [
            'GB' => 'required|string|max:255|min:1',
            'Email' => 'required|email|max:255|min:4',
            'HASH' => 'required|string|max:255|min:4',
        ];

        $validator = Validator::make($data, $rules);

        if ($validator->fails()):
            return $validator->errors();
        else:
            return [];
        endif;
    }
    
}
