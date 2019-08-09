<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Proyecto;
use DB;

class ProyectoController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proyectos = Proyecto::all();
        return view('proyectos.index')->with('proyectos', $proyectos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $options = [
            '0' => 'Ejecutado',
            '1' => 'En Desarrollo'
        ];
        return view('proyectos.create')->with('options', $options);
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
            'nombre' => 'required',
            'descripcion' => 'required',
            'imagen' => 'image|nullable|max:1999',
            'estado' => 'required'
        ]);

        // Handle File Upload
        if($request->hasFile('imagen')){
            // Get filename with the extension
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagen')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('imagen')->storeAs('public/img/proyectos', $fileNameToStore);
        } else {
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Proyecto
        $proyecto = new Proyecto;
        $proyecto->nombre = $request->input('nombre');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->imagen = $fileNameToStore;
        $proyecto->estado = $request->input('estado');
        $proyecto->save();

        return redirect('/proyectos')->with('success', 'Proyecto Creado!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $proyecto = Proyecto::find($id);
        return view('proyectos.show')->with('proyecto', $proyecto);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proyecto = Proyecto::find($id);
        
        //Check if proyecto exists before editing
        if (!isset($proyecto)){
            return redirect('/proyectos')->with('error', 'Proyecto no Existe!');
        }
        $options = [
            '0' => 'Ejecutado',
            '1' => 'En Desarrollo'
        ];
        return view('proyectos.edit')->with('proyecto', $proyecto)->with('options', $options);
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
        $this->validate($request, [
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

         // Handle File Upload
        if($request->hasFile('imagen')){
            // Get filename with the extension
            $filenameWithExt = $request->file('imagen')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('imagen')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('imagen')->storeAs('public/img/proyectos', $fileNameToStore);
        }

        // Create Proyecto
        $proyecto = Proyecto::find($id);
        $proyecto->nombre = $request->input('nombre');
        $proyecto->descripcion = $request->input('descsripcion');
        if($request->hasFile('imagen')){
            $proyecto->imagen = $fileNameToStore;
        }
        $proyecto->estado = $request->input('estado');
        $proyecto->save();

        return redirect('/proyectos')->with('success', 'Proyecto actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proyecto = Proyecto::find($id);
        
        //Check if proyecto exists before deleting
        if (!isset($proyecto)){
            return redirect('/proyectos')->with('error', 'No existe este Proyecto');
        }

        if($proyecto->imagen != 'noimage.jpg'){
            // Delete Image
            Storage::delete('public/img/proyectos/'.$proyecto->imagen);
        }
        
        $proyecto->delete();
        return redirect('/proyectos')->with('success', 'Proyecto eliminado!');
    }
}
