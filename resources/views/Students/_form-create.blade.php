<input class="form-control" type="text" 
   name="name" 
   value="{{ old('name') }}"
   placeholder="Nombres"
>
<p class="text-danger text-center "><strong>{{ $errors->first('name') }}</strong></p>

<input class="form-control" type="text" 
   name="last_name" 
   value="{{ old('last_name') }}"
   placeholder="Apellidos"
>
<p class="text-danger text-center"><strong>{{ $errors->first('last_name') }}</strong></p>


<input class="form-control" 
   type="number" 
   name="document" 
   value="{{ old('document') }}"
   placeholder="Número de documento"
>
<p class="text-danger text-center"><strong>{{ $errors->first('document') }}</strong></p>

<p>Fecha de nacimiento</p>
<input class="form-control" 
   type="date" 
   name="date_of_birth" 
   value="{{ old('date_of_birth') }}"
   placeholder="Fecha de nacimiento"
>
<p class="text-danger text-center"><strong>{{ $errors->first('date_of_birth') }}</strong></p>

<input class="form-control" 
   type="email" 
   name="email" 
   value="{{ old('email') }}"
   placeholder="Email"
>
<p class="text-danger text-center"><strong>{{ $errors->first('email') }}</strong></p>

<input class="form-control" 
   type="tel" 
   name="phone" 
   value="{{ old('phone') }}"
   placeholder="Teléfono"
>
<p class="text-danger text-center"><strong>{{ $errors->first('phone') }}</strong></p>

<input class="form-control" 
   type="text" 
   name="country" 
   value="{{ old('country') }}"
   placeholder="Pais de residencia"
>
<p class="text-danger text-center"><strong>{{ $errors->first('country') }}</strong></p>

<input class="form-control" 
   type="text" 
   name="city" 
   value="{{ old('city') }}"
   placeholder="Ciudad de residencia"
>
<p class="text-danger text-center"><strong>{{ $errors->first('city') }}</strong></p>

<input class="form-control" 
   type="text" 
   name="address" 
   value="{{ old('address') }}"
   placeholder="Dirección"
>
<p class="text-danger text-center"><strong>{{ $errors->first('address') }}</strong></p>

{{-- <input class="form-control" 
   type="file" 
   name="avatar" 
   value="{{ old('avatar') }}"
   placeholder="Foto de perfil"
>
<p class="text-danger text-center"><strong>{{ $errors->first('avatar') }}</strong></p> --}}

<input class="form-control" 
   type="text" 
   name="note" 
   value="{{ old('note') }}"
   placeholder="Nota "
>
<p class="text-danger text-center"><strong>{{ $errors->first('note') }}</strong></p>

<input class="form-control" 
   type="text" 
   name="coment" 
   value="{{ old('coment') }}"
   placeholder="Comentario"
>
<p class="text-danger text-center"><strong>{{ $errors->first('coment') }}</strong></p>
