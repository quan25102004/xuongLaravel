<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use App\Models\Passport;
use App\Models\Student;
use App\Models\StudentSubject;
use App\Models\Subject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
            $search = $request->input('search');
            if($search){
                $data = Student::with(['passport', 'classroom', 'subjects'])
                ->join('classrooms as c', 'c.id', '=', 'students.classroom_id')
                ->where('students.name','LIKE','%'.$search.'%')
                ->orWhere('c.name','LIKE','%'.$search.'%')->select('students.*')->paginate(5);
            }else{
                $data = Student::with(['passport', 'classroom', 'subjects'])->latest('id')->paginate(5);
            }
        // dd($data);
        return view('students.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $classrooms = Classroom::query()->pluck('name', 'id')->all();
        $subjects = Subject::query()->pluck('name', 'id')->all();
        return view('students.create', compact('classrooms', 'subjects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => ['required', 'max:255', Rule::unique('students')],
            'classroom_id' => 'required',
        ]);
        $dataPassport = $request->validate([
            'passport_number'   =>['required', Rule::unique('passports')],
            'issued_date'       =>['required', 'date', 'before_or_equal:today'],
            'expiry_date'       =>['required', 'date', 'after_or_equal:today'],

        ]);
        try {
            $student = Student::query()->create($data);
            $student->subjects()->attach($request->subjects);
            $passport= new Passport($dataPassport);
            $student->passport()->save($passport);
            return redirect()->route('students.index')->with('succes', true);
        } catch (\Throwable $th) {
            return back()->with('succes', false)->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        $student->load(['passport', 'classroom', 'subjects']);
        // dd($student);
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        $student->load(['passport', 'classroom', 'subjects']);
        $classrooms = Classroom::query()->pluck('name', 'id')->all();
        $subjects = Subject::query()->pluck('name', 'id')->all();
        $studentSubject = $student->subjects->pluck('id')->all();
        // dd($student->email);
        return view('students.edit', compact('student','classrooms', 'subjects','studentSubject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        
        $data = $request->validate([
            'name' => 'required|max:255',
            'email' => [
                'required',
                'max:255',
                Rule::unique('students')->ignore($student->id),
            ],
            'classroom_id' => 'required',
        ]);
        $dataPassport = $request->validate([
            'passport_number'   => [
                'required',
                Rule::unique('passports')->ignore($student->passport->id)
            ],
            'issued_date'       =>['required', 'date', 'before_or_equal:today'],
            'expiry_date'       =>['required', 'date', 'after_or_equal:today'],
        ]);
        try {
            $student ->update($data);
            $student->subjects()->sync($request->subjects);

        if ($student->passport) {
            $student->passport->update($dataPassport);
        } else {
            $passport = new Passport($dataPassport);
            $student->passport()->save($passport);
        }
            return back()->with('succes', true);
        } catch (\Throwable $th) {
            return redirect()->route('students.index')->with('succes', false)->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        try {
            if($student->passport){
                return back()->with('succes', false);
            }else{
                $student->forceDelete();
                return back()->with('succes', true);
            }
        } catch (\Throwable $th) {
            return back()->with('succes', false)->with('error', $th->getMessage());
        }
       
    }
}
