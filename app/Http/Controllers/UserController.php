<?php

namespace App\Http\Controllers;

use App\Enums\UserRolesEnum;
use App\Repositories\UserRepository;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\Request;
use Spatie\Permission\Contracts\Role;

// use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    private $paginate = 10;

    public function index(User $model)
    {
        $title = 'User List';
        if(auth()->user()->isadmin == true) {
            // $users = DB::table('users')->paginate(15);
            $users = User::paginate($this->paginate);
            return view('users.index', compact('users', 'title'));
        }else
            return redirect()->back();
    }

    public function create()
    {
        $title = 'Create new user';
        if (auth()->user()->isadmin == true)
            return view('users.create', compact('title'));
        else
            return redirect()->back();
    }

    public function store(UserRequest $request, UserRepository $repository)
    {
        if (auth()->user()->isadmin == true) {
            $data = $request->validated();
            $data = $repository->createProfile($data);
            $user = $repository->createHash($data);
            // $model->create($user);
            User::create($data);

            $request->session()->flash('message', 'User created!');
            return redirect()->route('user.index');
        } else
            return redirect()->back();
    }

    public function edit(User $model, $id)
    {
        if (auth()->user()->isadmin == true) {
            $title = 'Edit this user';
            $user = $model->find($id);
            $userRole = $user->roles->pluck('name', 'name')->all();

            return view('users.edit', compact('user', 'title'));
        } else
            return redirect()->back();
    }

    public function update(User $model, UserRepository $repository, UserRequest $request, $id)
    {
        if (auth()->user()->isadmin == true) {
            $data = $request->validated();
            $current = $model->find($id);
            $data = $repository->editProfile($current, $data);
            $user = $repository->createHash($data);

            $current->update($user);

            $request->session()->flash('message', 'User updated!');

            return redirect()->route('user.index');
        } else
            return redirect()->back();
    }

    public function show(User $model, $id)
    {
        if (auth()->user()->isadmin == true) {
            $title = 'User details';
            $user = $model->find($id);

            return view('users.show', compact('title', 'user'));
        } else
            return redirect()->back();
    }

    public function destroy(User $model, Request $request, $id)
        // public function delete(User $model, $id)
    {
        if ((auth()->user()->isadmin == true) && ($id != auth()->user()->id)) {
            $current = $model->find($id);
            if (isset($current->thumbnail))
                unlink(public_path('users/') . $current->thumbnail);
            User::destroy($id);

            $request->session()->flash('message', 'User deleted!');

            return redirect()->route('user.index');
        } else
            return redirect()->back();
    }

    public function search(User $model, Request $request)
    {
        if(auth()->user()->isadmin == true) {
            $title = 'Search';
            $data = $request->all();
            $users = $model->search($data);

            return view('users.index', compact('title', 'users'));
        }else
            return redirect()->back();
    }
}
