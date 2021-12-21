@extends('welcome')
@section('content')
<div class="flex justify-center">
    <h2>Editar Estudiante</h2>
</div>
    <form action="{{route('student.update',['id'=>$student->id])}}" method="post">
        @method('PATCH')
        @csrf
        @include('students.student-form')
    </form>
@endsection