<?php

namespace App\Http\Controllers;
use App\Models\Students;
use App\Http\Requests\StoreStudentsRequest;
use App\Http\Requests\UpdateStudentsRequest;
use Illuminate\Validation\Rules\Unique;
use Illuminate\Http\Response;

  class StudentsController extends Controller
{
    public function __construct()

    {
        $this->middleware("auth");
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
       
        return view('students.index', ['students'=> Students::orderBy("id", "desc") ->get()]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreStudentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreStudentsRequest $request)
    {
      //return  dd($request->all());
      Students::create([
        'name'=> $request->name,  
       'address' => $request->address,
      'country' => $request ->country,
      'state' =>  $request -> state,
       'lg' =>  $request -> lg,
       'zip' =>  $request -> zip,
       'birthdate' =>  $request -> date,
      'gender' =>  $request -> gender,
       'photo' =>   $this->storeImage($request),
       'p_mobile' =>  $request -> p_mobile,
       'p_email' =>  $request -> p_email,
        'p_address' =>  $request -> p_address,
        'admision' =>  $request -> admision,
        'class' =>  $request -> class,
        'status'=> $request -> status,
        'section' =>  $request -> section,
      ]);

      return redirect ('students/create')
      ->with('success',' Student Created Successifly');
      // ('success','Student Created Successifly');
         // ->with('','');
      

    }

    /**
     * Display the specified resource redirect.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
   // public function show(Students $students)
    public function show($id)
       
    {
        //$student = Students::findorfall($id);
        return view('students.show', [ 'students' => Students::findorfail($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function edit(Students $students)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateStudentsRequest  $request
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateStudentsRequest $request, Students $students)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Students  $students
     * @return \Illuminate\Http\Response
     */

     public function destroy($id)
       
     {
        students::destroy($id);
        return redirect ('students')
      ->with('success',' Student Deleted Successifly');
     }

    private function storeImage($request) 
    {
        $newImage = uniqid() . '-' . $request->admision. '.' . $request->photo->extension();
           //$file = $request->file('');
           return $request->photo->move(('images'), $newImage);
    }

   
}

