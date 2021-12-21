<div class="student-form">
    <input type="text" placeholder="No. Control" name="control_number" 
    value="{{old('control_number')? old('control_number'):($student?$student->control_number:'')}}" 
    class="mt-2 @if($errors->has('control_number')) error-outline @endif">
    <input type="text" placeholder="Nombre"  name="name" value="{{old('name')? old('name') : ($student? $student->name:'')}}" 
    class="mt-2 @if($errors->has('name')) error-outline @endif">
    <input type="number" placeholder="1" name="semester" value="{{old('semester')? old('semester') : ($student?$student->semester:'')}}" 
    class="mt-2 @if($errors->has('semester')) error-outline @endif">
    <input type="text" placeholder="Carrera" name="career" value="{{old('career')? old('career') : ($student?$student->career:'')}}" 
    class="mt-2 @if($errors->has('career')) error-outline @endif">
    <input type="text" placeholder="Grupo" name="group" value="{{old('group')? old('group'):($student?$student->group:'')}}" 
    class="mt-2 @if($errors->has('group')) error-outline @endif">

    <button type="submit" class="mt-4 btn">Aceptar</button>

</div>