@extends('welcome')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif
<div class="flex justify-center">
    <a href="{{ route('student.add')}}" class="btn center">Añadir Estudiante</a>
</div>
<Table class="w-80 center">
    <Thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>No.Control</th>
            <th>Carrera</th>
            <th>Grupo</th>
            <th>Semestre</th>
            <th>Acciones</th>
        </tr>
    </Thead>
    <tbody>
        @foreach ($students as $student)


        <tr id="student">
            <th>{{$student->id}}</th>
            <th>{{$student->name}}</th>
            <th>{{$student->control_number}}</th>
            <th>{{$student->career}}</th>
            <th>{{$student->group}}</th>
            <th>{{$student->semester}}</th>
            <th>
                <div class="actions">
                    <form action="{{route('student.delete', ['id' => $student->id])}}" enctype="multipart/form-data" method="post">
                        @method('DELETE')
                        @csrf
                        <button class="mt-2">Eliminar</button>
                    </form>
                    <form action="{{route('student.edit', ['id' => $student->id])}}" enctype="multipart/form-data" method="GET">
                        @csrf
                        <button class="mt-2">Editar</button>
                    </form>
                    <form action="{{route('student.xml', ['id' => $student->id])}}" enctype="multipart/form-data" method="GET">
                        @csrf
                        <button class="mt-2">XML</button>
                    </form>
                    <form action="{{route('student.json', ['id' => $student->id])}}" enctype="multipart/form-data" method="GET">
                        @csrf
                        <button class="mt-2">JSON</button>
                    </form>
                </div>
            </th>
        </tr>
        @endforeach
    </tbody>
</Table>
@endsection