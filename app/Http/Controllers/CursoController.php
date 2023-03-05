<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCurso;
class CursoController extends Controller
{
    public function index()
    {
        $cursos = Curso::paginate();
        
        return view('cursos.index',compact('cursos'));
    }
    public function create()
    {
        return view('cursos.create');
    }
    public function store(StoreCurso $request)//se remplaza Request $request por StoreCurso $request
    {
        $curso = new Curso();
        /*$request->validate([//esta funcion es para validar  el nuevo registro
            'name'=>'required',
            'description'=>'required',
            'categoria'=>'required',
        ]);*/

        /*$curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save(); para ahorra codigo y  simplificar lo podemos hacer de otra 
        forma*/  
        $curso =Curso::create($request->all());

        return redirect()->route('cursos.show',$curso->id);
        //para poder utilizar este metodo debemos hacer unas modificaciones en el mnodelo
        //app/http/models/curso.php--en este archivo en la clase curso añadir
        //protected $fillable =['name','description','categoria'];indicando que solo acepte
        //los campos que indicamos aqui
}
         //return $request->all(); muestra el token del  @csrf
    

    public function edit($id)
    {
        $curso = Curso::find($id);
        return view('cursos.edit',compact('curso'));
    }

    public function show($id)
    {
        $curso = Curso::find($id);
        return view('cursos.show',compact('curso'));
    }

    public function update( Request $request,$curso)
    {
        $curso = Curso::find($curso);

        $request->validate([//esta funcion es para validar  el nuevo registro
            'name'=>'required',
            'description'=>'required',
            'categoria'=>'required',
        ]);
        //de esta forma tambien podemos 
        //$curso->update($request->all());
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->categoria = $request->categoria;
        $curso->save();
        return redirect()->route('cursos.show',$curso->id);
    
    }

    public function destroy(Curso $curso)
    {
        $curso->delete();
        return redirect()->route('cursos.index');
    }
}