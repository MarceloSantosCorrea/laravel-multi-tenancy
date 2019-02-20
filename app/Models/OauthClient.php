<?php

namespace MaximGestor\Models;

use Illuminate\Database\Eloquent\Model;

class OauthClient extends Model
{
    protected $fillable = [
        "name", "secret", "redirect", "personal_access_client", "password_client", "revoked",
    ];
}
