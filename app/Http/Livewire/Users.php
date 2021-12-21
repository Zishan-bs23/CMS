<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\Livewire;

class Users extends Component
{
    public $index = null;
    public $field = null;
    public $users = [];
    public $sbus,$partners,$hrs,$techs;

    public function mount() {
        $this->sbus = User::all()->pluck('sbu')->unique()->toArray();
        $this->partners = User::all()->pluck('partner')->unique()->toArray();
        $this->hrs = User::all()->pluck('hr')->unique()->toArray();
    }

    protected $listeners = [
        'refresh' => '$refresh'
    ];

    protected $rules = [
        'users.*.name' => 'required',
        'users.*.email' => 'required'
    ];

    protected $validationAttributes = [
        'users.*.name' => 'name',
        'users.*.email' => 'email'
    ];

    public function edit($idx, $field) {
        $this->field = $idx.'.'.$field ;
    }

    public function save($idx) {
        $this->validate();

        $user = $this->users[$idx] ?? NULL;

        if(! is_null($user)) {
            User::find($user['id'])?->update($user);
        }

        $this->index = null;
        $this->field = null;
    }

    public function delete($idx) {
        $user = $this->users[$idx] ?? NULL;

        if(! is_null($user)) {
            User::find($user['id'])?->delete();
        }
    }

    public function render()
    {
        $this->users = User::all()->toArray();

        return view('livewire.users', [
            'users' => $this->users,
            'partners' => $this->partners,
            'sbus' => $this->sbus,
            'hrs' => $this->hrs
        ]);
    }
}
