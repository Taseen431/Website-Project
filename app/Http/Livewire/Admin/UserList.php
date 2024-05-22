<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Livewire\Component;

class UserList extends Component
{
    public function delete(User $user)
    {

        abort_if(!auth()->user()->is_admin, Response::HTTP_FORBIDDEN, 403);

        $user->delete();
    }

    public function render(): View
    {
        $users = User::where(function ($query) {
            $query->where('is_admin', false)
                  ->orWhereNull('is_admin'); // Assuming is_admin is a nullable column
        })
        ->paginate();

        return view('livewire.admin.user-list', [
            'users' => $users
        ]);
    }
}
