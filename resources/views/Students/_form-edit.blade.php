
<form action="{{ route('student.update', $student->id) }}" method="POST">
   @csrf
   @method('PATCH')
   
   <input class="form-control" type="text" 
   name="name" 
   value="{{ $student->name }}"
   placeholder="Nombres"
   >
   <p class="text-danger text-center "><strong>{{ $errors->first('name') }}</strong></p>

    
   <input class="form-control" type="text" 
   name="last_name" 
   value="{{ $student->last_name }}"
   placeholder="Apellidos"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('last_name') }}</strong></p>

   <input class="form-control" 
   type="number" 
   name="document" 
   value="{{ $student->document }}"
   placeholder="Documento"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('document') }}</strong></p>

   <p>Fecha de nacimiento</p>
   <input class="form-control" 
   type="date" 
   name="date_of_birth" 
   value="{{ $student->date_of_birth }}"
   placeholder="Fecha de nacimiento"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('date_of_birth') }}</strong></p>

   <input class="form-control" 
   type="email" 
   name="email" 
   value="{{ $student->email }}"
   placeholder="Email"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('email') }}</strong></p>

   <input class="form-control" 
   type="tel" 
   name="phone" 
   value="{{ $student->phone }}"
   placeholder="Teléfono"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('phone') }}</strong></p>

   <input class="form-control" 
   type="text" 
   name="country" 
   value="{{ $student->country }}"
   placeholder="Pais de residencia"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('country') }}</strong></p>

   <input class="form-control" 
   type="text" 
   name="city" 
   value="{{ $student->city }}"
   placeholder="Ciudad de residencia"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('city') }}</strong></p>

   <input class="form-control" 
   type="text" 
   name="address" 
   value="{{ $student->address }}"
   placeholder="Dirección"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('address') }}</strong></p>

   {{-- <input class="form-control" 
   type="file" 
   name="avatar" 
   value="{{ old('avatar') }}"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('avatar') }}</strong></p> --}}

   <input class="form-control" 
   type="text" 
   name="note" 
   value="{{ $student->note }}"
   placeholder="Nota "
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('note') }}</strong></p>

   <input class="form-control" 
   type="text" 
   name="coment" 
   value="{{ $student->coment }}"
   placeholder="Comentario"
   >
   <p class="text-danger text-center"><strong>{{ $errors->first('coment') }}</strong></p>

    <button class="btn btn-success btn-block" type="submit">Actaulizar datos</button>
    <a href="{{ route('student') }}" class="btn btn-danger float-right mt-1"><i class="fas fa-window-close"></i> Cancelar</a>
</form>