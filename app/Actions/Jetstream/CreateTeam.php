<?php
namespace App\Actions\Jetstream;

use App\Models\User;  // Make sure this User model extends Illuminate\Foundation\Auth\User
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Laravel\Jetstream\Contracts\CreatesTeams;
use Laravel\Jetstream\Events\AddingTeam;
use Laravel\Jetstream\Jetstream;
use Illuminate\Contracts\Auth\Authenticatable as UserContract;

class CreateTeam implements CreatesTeams
{
    /**
     * Validate and create a new team for the given user.
     *
     * @param UserContract $user  // Change User to UserContract if User extends Authenticatable
     * @param array<string, string> $input
     */
    public function create(UserContract $user, array $input)
    {
        Gate::forUser($user)->authorize('create', Jetstream::newTeamModel());

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
        ])->validateWithBag('createTeam');

        AddingTeam::dispatch($user);

        $user->switchTeam($team = $user->ownedTeams()->create([
            'name'          => $input['name'],
            'personal_team' => true,
        ]));

        return $team;
    }
}

