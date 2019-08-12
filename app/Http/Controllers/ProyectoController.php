<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Proyecto;
use DB;
use Image;

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
            'nombre' => 'required|max:191',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:1999',
            'estado' => 'required'
        ]);

        $nombreImagen = '';
        if ($request->imagen) {
            $originalImage= $request->file('imagen');
            $nombreImagen = time().$originalImage->getClientOriginalName();
            Image::make($request->imagen)->save('public/img/proyectos/'.$nombreImagen);
        } else {
            $nombreImagen = 'default.png';
        }

        // Create Proyecto
        $proyecto = new Proyecto;
        $proyecto->nombre = $request->input('nombre');
        $proyecto->descripcion = $request->input('descripcion');
        $proyecto->imagen = $nombreImagen;
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
            'nombre' => 'required|max:191',
            'descripcion' => 'required',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:1999'
        ]);

        $nombreImagen = '';
        $proyecto = Proyecto::find($id);
        $currentImagen = $proyecto->imagen;
        if ($request->imagen != $currentImagen) {
            $originalImage= $request->file('imagen');
            $nombreImagen = time().$originalImage->getClientOriginalName();
            Image::make($request->imagen)->save(public_path('img/proyectos/').$nombreImagen);
            $proyectoImagen = public_path('img/proyectos/').$currentImagen;
            if (file_exists($proyectoImagen)) {
                if ($currentImagen != 'default.png') {
                    @unlink($proyectoImagen);
                }
            }
        } else {
            $nombreImagen = $currentImagen;
        }

        // Create Proyecto
        $proyecto = Proyecto::find($id);
        $proyecto->nombre = $request->input('nombre');
        $proyecto->descripcion = $request->input('descripcion');
        if($request->hasFile('imagen')){
            $proyecto->imagen = $nombreImagen;
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

        $currentImagen = $proyecto->imagen;
        $proyectoImagen = public_path('img/proyectos/').$currentImagen;
        if (file_exists($proyectoImagen)) {
            if ($currentImagen != 'default.png') {
                @unlink($proyectoImagen);
            }
        }

        
        $proyecto->delete();
        return redirect('/proyectos')->with('success', 'Proyecto eliminado!');
    }
}
