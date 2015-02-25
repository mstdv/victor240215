<?php

class OrdensController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /ordens
	 *
	 * @return Response
	 */
	public function index()
	{
		return View::make('ordens.index');
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /ordens/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('ordens.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /ordens
	 *
	 * @return Response
	 */
	public function store()
	{
        $rules = array(
            'coddepartamento'     => 'required',
            'departamento'         => 'required',
            'quienreporta'        => 'required',
            'fichatrabajador'     => 'required',
            'correo'               => 'required',
            'telefono'             => 'required',
            'marca'                => 'required',
            'tipoequipo'          => 'required',
            'modelo'               => 'required',
            'servicio'             => 'required',
            'problema'             => 'required',
            'observaciones'        => 'required'
        );

        $data = Input::all();

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            $orden = new Orden;

            $orden->cod_departamento = Input::get('coddepartamento');
            $orden->departamento     = Input::get('departamento');
            $orden->quien_reporta    = Input::get('quienreporta');
            $orden->ficha_trabajador = Input::get('fichatrabajador');
            $orden->correo           = Input::get('correo');
            $orden->telefono         = Input::get('telefono');
            $orden->marca            = Input::get('marca');
            $orden->tipo_equipo      = Input::get('tipoequipo');
            $orden->modelo           = Input::get('modelo');
            $orden->servicio         = Input::get('servicio');
            $orden->problema         = Input::get('problema');
            $orden->observaciones    = Input::get('observaciones');

            $orden->save();

            return Redirect::back()->with('error_message', 'Datos guardados correctamente')->withInput()->withErrors($validator);
        } else {
            return Redirect::back()->with('error_message', 'Invalid data')->withInput()->withErrors($validator);
        }
	}

	/**
	 * Display the specified resource.
	 * GET /ordens/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return View::make('ordens.show');
	}

    public function showall()
    {
        return View::make('ordens.show');
    }

	/**
	 * Show the form for editing the specified resource.
	 * GET /ordens/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function edit($id)
    {
        //
    }

    public function printrepor($id)
    {
        $orden = Orden::where('id', $id)->get();
        $orden = $orden[0];

        $html = View::make('ordens.pdf', ['orden'=>$orden]);
        return PDF::load($html, 'A4', 'portrait')->show('PDF');
    }

	/**
	 * Update the specified resource in storage.
	 * PUT /ordens/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
        $rules = array(
            'cod_departamento'     => 'required',
            'departamento'         => 'required',
            'quien_reporta'        => 'required',
            'ficha_trabajador'     => 'required',
            'correo'               => 'required',
            'telefono'             => 'required',
            'marca'                => 'required',
            'tipo_equipo'          => 'required',
            'modelo'               => 'required',
            'servicio'             => 'required',
            'problema'             => 'required',
            'observaciones'        => 'required'
        );

        $data = Input::all();

        $validator = Validator::make($data, $rules);

        if ($validator->passes())
        {
            $orden = Orden::find($id);

            $orden->cod_departamento = Input::get('cod_departamento');
            $orden->departamento     = Input::get('departamento');
            $orden->quien_reporta    = Input::get('quien_reporta');
            $orden->ficha_trabajador = Input::get('ficha_trabajador');
            $orden->correo           = Input::get('correo');
            $orden->telefono         = Input::get('telefono');
            $orden->marca            = Input::get('marca');
            $orden->tipo_equipo      = Input::get('tipo_equipo');
            $orden->modelo           = Input::get('modelo');
            $orden->servicio         = Input::get('servicio');
            $orden->problema         = Input::get('problema');
            $orden->observaciones    = Input::get('observaciones');

            $orden->save();

            return Redirect::back()->with('error_message', 'Datos guardados correctamente')->withInput()->withErrors($validator);
        } else {
            return Redirect::back()->with('error_message', 'Invalid data')->withInput()->withErrors($validator);
        }
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /ordens/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
        $user = Oden::find($id);
        $user->delete();
        return Redirect::back();
	}

}