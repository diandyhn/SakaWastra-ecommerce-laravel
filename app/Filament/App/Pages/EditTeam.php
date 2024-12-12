<?php

namespace App\Filament\App\Pages;

use App\Models\Team;
use App\Models\User;
use Filament\Facades\Filament;
use Filament\Forms\Components\TextInput;
use Filament\Pages\Tenancy\EditTenantProfile;
use Illuminate\Support\Facades\Auth;

class EditTeam extends EditTenantProfile
{
    protected static string $view = 'filament.pages.edit-team';

    public $name = '';

    public static function getLabel(): string
    {
        return 'Edit Store';
    }

    protected function getFormSchema(): array
    {
        return [
            TextInput::make('name')
                ->label('Team Name')
                ->required()
                ->maxLength(255),
        ];
    }

    public function submit()
    {
        $this->validate();

        $team = Team::forceCreate([
            'user_id'       => Filament::auth()->id(),
            'name'          => $this->name,
            'personal_team' => false,
        ]);

        $this->user()->teams()->attach($team, ['role' => 'admin']);
        $this->user()->switchTeam($team);

        return redirect()->route('filament.pages.edit-team', ['team' => $team]);
    }

    private function user(): User
    {
        return Filament::auth()->user();
    }

    protected function getViewData(): array
    {
        return [
            'team' => Filament::getTenant(),
        ];
    }
}
