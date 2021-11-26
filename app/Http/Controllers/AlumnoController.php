<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller as BaseController;


class AlumnoController extends Controller
{

    public function getAll(Request $request)
    {
        return response()->json([

            'data'   =>  DB::table('table_alumno')->get()
        ]);
    }

    public function getAlumno ($id)
    {
        return response()->json([
            'succes' => true,
            'mensaje' => 'obtengo todos los alumnos desde el controller',
            'data'=> DB::table('table_alumno')->where('id',$id)->first()
        ]);

    }
    public function  insert(Request $request ){
        //name,age,email,password
        $data=$request->input();
        $request->validate([
            'name' => 'required',
            'age' => 'required|integer|digits_between.1,3'
        ]);
        DB::table('Users')->insert($data);
    }

    public function delete($id){
        $alumno=DB::table('table_alumno')->where('id',$id)->first();
        DB::table('table_alumno')->where('id',$id)->delete();
        return response()->json([
            'succes' => true,
            'mensaje' => 'borrado',
            'data'=> $alumno
        ]);
    }

    public function update(Request $request, $id){
        $data=$request->input();
        $alumno=DB::table('table_alumno')->where('id',$id)->first();

    }

}
