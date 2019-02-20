<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace MaximGestor\Models{
/**
 * MaximGestor\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace MaximGestor\Models{
/**
 * MaximGestor\Models\Accounts
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts query()
 */
	class Accounts extends \Eloquent {}
}

