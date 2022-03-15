<?php

namespace App\Http\Controllers;

use App\Http\Resources\UserResource;
use Request;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    // protected $property;

    // public function __construct($property)
    // {
    //     $this->property = $property;
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return UserResource::collection(User::all());

         return Inertia::render('Users/Index', [
             'users' => UserResource::collection(User::query()->when(Request::input('search'), function ($query, $search) {
                    $query->where('name', 'like', "%{$search}%");
                })->paginate(50)->withQueryString()),
            // 'users' => User::query()
            //     ->when(Request::input('search'), function ($query, $search) {
            //         $query->where('name', 'like', "%{$search}%");
            //     })
            //     ->paginate(50)
            //     ->withQueryString()
            //     ->through(fn($user) => [
            //         'id' => $user->id,
            //         'name' => $user->name,
            //         'can' => [
            //             'edit' => Auth::user()->can('edit', $user)
            //         ]
            //     ]),
            'filters' => Request::only(['search']),
            'can' => [
                'createUser' => Auth::user()->can('create', User::class)
            ]
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Inertia::render('Users/Create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = Request::validate([
            'name' => 'required',
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        User::create($attributes);

        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return Inertia::render('Users/Show', [
            // 'user' => $user->only(['id', 'name', 'email', 'created_at'])
            'user' => UserResource::make($user)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
