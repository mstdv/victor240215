<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('users.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /users/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = array(
            'usuario'     => 'required|unique:users',
            'password'  => 'required|min:3'
        );

        $data = Input::all();

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            $user = new User;

            $user->usuario = Input::get('usuario');
            $user->password = Hash::make(Input::get('password'));

            $user->save();

            return Redirect::back()->with('error_message', 'Datos guardados correctamente');
        } else {
            return Redirect::back()->with('error_message', 'Invalid data');
        }
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $rules = array(
            'usuario'     => 'required|unique:users',
            'password'  => 'required|min:3'
        );

        $data = Input::all();

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            $user = User::find($id);

            $user->usuario = Input::get('usuario');
            $user->password = Hash::make(Input::get('password'));

            $user->save();

            return Redirect::back()->with('error_message'.$id, 'Datos guardados correctamente');
        } else {
            return Redirect::back()->with('error_message'.$id, 'Invalid data');
        }

	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = User::find($id);
        $user->delete();
        return Redirect::back();
	}

}