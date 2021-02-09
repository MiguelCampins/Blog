<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comentario;
use Illuminate\Support\Facades\Mail;
use App\Mail\correo;
use App\Mail\reserva;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $publicaciones = Comentario::orderBy('created_at', 'desc')->paginate(4);

        return view('Welcome', compact('publicaciones'));
    }
    
    public function biografia()
    {
        return view('biografia');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function store2(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:50',
            'email' => 'required',
            'comentario' => 'required',
        ]);

        $correo = new correo($request->all());

        Mail::to('bloggera@hotmail.com')->send($correo);
        return back()->with('mensaje', 'Mensaje enviado');
    }
    
    public function store3(Request $request)
    {
        $this->validate($request, [
            'nombre' => 'required|max:50',
            'apellido' => 'required',
            'dni' => 'required',
            'email' => 'required',
        ]);

        $correo = new reserva($request->all());

        Mail::to('bloggera@hotmail.com')->send($correo);
        return back()->with('mensaje', 'Mensaje enviado');
    }

    public function libros()
    {
        return view('libros');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titulo' => 'required|max:50',
            'comentario' => 'required',
        ]);

        Comentario::create([
            'titulo' => $request->get('titulo'),
            'comentario' => $request->get('comentario'),
        ]);

        return back()->with('mensaje', 'Has agregado un comentario');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
