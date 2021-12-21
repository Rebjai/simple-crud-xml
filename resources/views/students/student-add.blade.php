@extends('welcome')
@section('content')
<div class="flex justify-center">
    <h2>Nuevo Estudiante</h2>
</div>
    <form action="{{route('student.store')}}" method="post">
        @csrf
        @include('students.student-form')
    </form>
@endsection