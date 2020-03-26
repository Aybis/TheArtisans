<?php

namespace App\View\Components\modules\users\data;

use App\User;
use Illuminate\View\Component;

class ListData extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.modules.users.data.list-data');
    }

    public function list()
    {
        $user = User::all();
        return $user;
    }
}
