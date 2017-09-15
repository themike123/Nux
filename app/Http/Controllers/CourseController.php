<?php

namespace App\Http\Controllers;
use App\Course;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;
use Auth;
use Carbon\Carbon;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('courses.index');
    }

    public function getCourses()
    {
      //$dogs = Dogs::orderBy('id', 'desc')->take(5)->get

      //Model::orderBy('created_at','asc')->take(3);
      //Model::orderBy('created_at','asc')->take(3);

      $courses = Course::orderBy('id', 'desc')->get();
      return response()->json([
           'status' => 'success',
           'code' => 200,
           'courses'=> $courses,
           'message' => 'Obtención exitosa de los cursos'
       ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //$course = new Course;
      //return view('courses.create')->with(['course'=>$course]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

      $this->validate($request,[
        'title' => 'required|max:255',
         'description' => 'required',
         'image' => 'required|image'
      ]);

      if ($request->hasFile('image') ) {

        $course = new Course;
        $course->title=$request->get('title');
        $course->status='0';
        $course->score='0';
        $course->description=$request->get('description');
        $course->image='';
        $course->save();

        $image = $request->file('image');
        $name = $course->id.'_'.time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/images/courses');
        $image->move($destinationPath, $name);
        $course->image=$name;
        $course->update(['image'=>$name]);

        $date = Carbon::now();
        $course->users()->attach(Auth::user()->id, array('start' => $date,'end'=>'' ));

        return response()->json([
             'status' => 'success',
             'code' => 200,
             'data'=> $course,
             'message' => 'El curso se ha creado de forma exitosa.'
         ]);

        //$course->users()->save($article);

        //Remover la relacion
        //$user->parks()->detach($park->id);

        // Se ligan los alumnos 1, 2, 3 y 4 a la materia
        //$materia->alumnos()->sync(array(1, 2, 3, 4));

        //$materia->alumnos()->detach(3, array('fecha' => date()));

        //A la relación, le agregamos el id del alumno, que es el 3.
        //$materia->alumnos()->attach(3)
      }else {
        return response()->json([
             'status' => 'error',
             'code'  => 501,
             'data' => null,
             'message' => 'Error contacte al departameto de desarrollo'
         ]);
      }

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
