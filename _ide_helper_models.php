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
 * @property string $uid
 * @property string $firstname
 * @property string|null $lastname
 * @property string $name
 * @property string $email
 * @property string|null $email_verified_at
 * @property string $password
 * @property string|null $avatar
 * @property int $active
 * @property int $account_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereAccountId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereAvatar($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereFirstname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereLastname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereUid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace MaximGestor\Models{
/**
 * MaximGestor\Models\OauthClient
 *
 * @property int $id
 * @property int|null $user_id
 * @property string $name
 * @property string $secret
 * @property string $redirect
 * @property int $personal_access_client
 * @property int $password_client
 * @property int $revoked
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient query()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient wherePasswordClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient wherePersonalAccessClient($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereRedirect($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereRevoked($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\OauthClient whereUserId($value)
 */
	class OauthClient extends \Eloquent {}
}

namespace MaximGestor\Models{
/**
 * MaximGestor\Models\Accounts
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts query()
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\MaximGestor\Models\Accounts whereUpdatedAt($value)
 */
	class Accounts extends \Eloquent {}
}

