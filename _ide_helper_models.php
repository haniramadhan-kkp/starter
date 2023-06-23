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
 * App\Models\Inovation
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $tahun
 * @property string $pemberi
 * @property int $user_id
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation wherePemberi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Inovation whereUserId($value)
 */
	class Inovation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Publication
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $judul
 * @property string $tahun
 * @property string $penerbit
 * @property int $user_id
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication query()
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereJudul($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication wherePenerbit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereTahun($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Publication whereUserId($value)
 */
	class Publication extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Registration
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nama_lengkap
 * @property string|null $gelar_depan
 * @property string|null $gelar_belakang
 * @property string $tempat_lahir
 * @property string $alamat_domisili
 * @property string $kabupaten_domisili
 * @property string $provinsi_domisili
 * @property string $pekerjaan
 * @property string $bidang_keahlian
 * @property int $is_lama
 * @property int|null $is_approved
 * @property int $user_id
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Registration newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration query()
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereAlamatDomisili($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereBidangKeahlian($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereGelarBelakang($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereGelarDepan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereIsApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereIsLama($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereKabupatenDomisili($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereNamaLengkap($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration wherePekerjaan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereProvinsiDomisili($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereTempatLahir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Registration whereUserId($value)
 */
	class Registration extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
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
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Inovation> $inovations
 * @property-read int|null $inovations_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Publication> $publications
 * @property-read int|null $publications_count
 * @property-read \App\Models\Registration|null $registration
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
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

