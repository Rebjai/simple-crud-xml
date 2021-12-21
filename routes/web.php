<?php

use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $students = Student::all();
    return view('students.student-list',compact('students'));
})->name('student.list');
Route::get('/student/add', function () {
    $student = new Student();
    return view('students.student-add',compact('student'));
})->name('student.add');
Route::get('/student', function (Request $request) {
    return redirect('/');
})->name('student.route');
Route::post('/student', function (Request $request) {
    $request->validate(Student::$rules);
    Student::create($request->except('_token'));
    return redirect(route('student.list'),302)->with('success', 'Alumno creado exitosamente');
})->name('student.store');
Route::delete('/student/{id}', function ($id) {
    $student = Student::find($id);
    $student->delete();
    return redirect(route('student.list'))->with('success','Se eliminó al estudiante');
})->name('student.delete');
Route::get('/student/edit/{id}', function ($id) {
    $student = Student::find($id);
    // dd($student);
    return view('students.student-edit',compact('student'));
})->name('student.edit');
Route::patch('/student/{id}', function ($id) {
    $student = Student::find($id);

    dd($student);
    return redirect(route('student.list'))->with('success','Se actualizó al estudiante correctamente');
})->name('student.update');
Route::get('/student/xml/{id}', function ($id) {
    $student = Student::find($id);
    // dd($student);
    return response()->xml($student, 200, [], 'student');
})->name('student.xml');
Route::get('/student/json/{id}', function ($id) {
    $student = Student::find($id);
    // dd($student);
    return response()->json($student);
})->name('student.json');
