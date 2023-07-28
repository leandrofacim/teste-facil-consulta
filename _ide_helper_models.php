<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Cidade
 *
 * @property int $id
 * @property string $nome
 * @property string $estado
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade query()
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade whereEstado($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Cidade whereUpdatedAt($value)
 */
	class Cidade extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Medico
 *
 * @property int $id
 * @property string $nome
 * @property string $especialidade
 * @property int $cidade_id
 * @property int $user_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Cidade $cidade
 * @method static \Database\Factories\MedicoFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|Medico newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medico newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Medico query()
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereCidadeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereEspecialidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Medico whereUserId($value)
 */
	class Medico extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Paciente
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $celular
 * @property int $user_id
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente query()
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereCelular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Paciente whereUserId($value)
 */
	class Paciente extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

