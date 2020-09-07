<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\UserRequest;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    private $paginate = 200;

    public function index(User $model)
    {
        $title = 'User List';
        // $users = DB::table('users')->paginate(15);
        $users = User::paginate($this->paginate);
        //  dd($users->links());
        // return view('users.index', ['users' => $model->paginate($this->paginate)], compact('title'));
        return view('users.index', compact('users', 'title'));
    }

    public function create()
    {
        $title = 'Create new user';
        return view('users.create', compact('title'));
    }

    public function store(User $model, UserRequest $request, UserRepository $repository)
    {
        $data = $request->validated();
        $data = $repository->createProfile($data);
        $user = $repository->createHash($data);
        $model->create($user);

        return redirect()->route('user.index');
    }

    public function edit(User $model, $id)
    {
        $title = 'Edit this user';
        $user = $model->find($id);

        return view('users.edit', compact('user', 'title'));
    }

    public function update(User $model, UserRepository $repository, UserRequest $request, $id)
    {
        $data = $request->validated();
        $current = $model->find($id);
        $data = $repository->editProfile($current, $data);
        $user = $repository->createHash($data);

        $current->update($user);

        $request->session()->flash('alert-success', 'Usuário cadastrado eh isso!!', 'alert-danger', 'Oops! não foi possível cadastrar!');

        return redirect()->route('user.index');
    }

    public function show(User $model, $id)
    {
        $title = 'User details';
        $user = $model->find($id);

        return view('users.show', compact('title', 'user'));
    }

    public function destroy(User $model, $id)
    {
        $current = $model->find($id);
        if(isset($current->thumbnail))
            unlink(public_path('users/') . $current->thumbnail);

        User::destroy($id);

        return redirect()->route('user.index');
    }
}
