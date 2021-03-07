<?php

namespace App\Http\Livewire\Admin\Users;

use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Livewire\Admin\AdminComponent;

class ListUsers extends AdminComponent
{
    public $data = [];
    public $user;
    public $showEditModal = false;
    public $userIdBeingRemoved = null;

    /**
     * The function shows the adding new users
     * form into the database
     *
     * @return void
     */
    public function addNew()
    {
        $this->data = [];
        $this->showEditModal = false;
        $this->dispatchBrowserEvent('show-form');
    }

    /**
     * This function creates new user
     *
     * @return void
     */
    public function createUser()
    {
        $validatedData = Validator::make($this->data, [
            'name' => 'required',
            'position' => 'required',
            'nation' => 'required',
            'region' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'street' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required|regex:/^(0)[0-9]{9}$/|not_regex:/[a-z]/',
            'password' => 'required|confirmed',
        ])->validate();

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'User added successfuly!']);
    }

    /**
     * The function is for editing the user
     *
     * @return void
     */
    public function edit(User $user)
    {
        $this->showEditModal = true;

        $this->user = $user;

        $this->data = $user->toArray();

        $this->dispatchBrowserEvent('show-form');
    }

    /**
     * This function updates the user details
     *
     * @return void
     */
    public function updateUser()
    {
        $validatedData = Validator::make($this->data, [
            'name' => 'required',
            'position' => 'required',
            'nation' => 'required',
            'region' => 'required',
            'district' => 'required',
            'ward' => 'required',
            'street' => 'required',
            'address' => 'required',
            'email' => 'required|email|unique:users,email,' . $this->user->id,
            'mobile' => 'required|regex:/^(0)[0-9]{9}$/|not_regex:/[a-z]/',
            'password' => 'sometimes|confirmed',
        ])->validate();

        if (!empty($validatedData['password'])) {
            $validatedData['password'] = bcrypt($validatedData['password']);
        }

        $this->user->update($validatedData);

        $this->dispatchBrowserEvent('hide-form', ['message' => 'User updated successfuly!']);
    }

    /**
     * This function shows user delete modal
     *
     * @param  mixed $userId
     * @return void
     */
    public function confirmUserRemoval($userId)
    {
        $this->userIdBeingRemoved = $userId;
        $this->dispatchBrowserEvent('show-delete-modal');
    }

    /**
     * This function deletes the user from the database
     *
     * @return void
     */
    public function deleteUser()
    {
        $user = User::findOrFail($this->userIdBeingRemoved);
        $user->delete();
        $this->dispatchBrowserEvent('hide-delete-modal', ['message' => 'User deleted successfuly!']);
    }

    public function render()
    {
        $users = User::latest()->paginate(5);

        return view('livewire.admin.users.list-users', [
            'users' => $users,
        ]);
    }
}
