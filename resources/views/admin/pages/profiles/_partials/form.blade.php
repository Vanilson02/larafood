@csrf

<div class="form-group">
   <label for="name">Nome:</label>
   <input type="text" name="name" id="name" class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}"  placeholder="Nome" value="{{ $profile->name ?? old('name') }}">
    @if ($errors->has('name'))
        <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
    @endif
</div>
<div class="form-group">
    <label for="description">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Descrição...">{{ $profile->description ?? old('description') }}</textarea>
    @if ($errors->has('description'))
        <strong class="invalid-feedback">{{ $errors->first('description') }}</strong>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Enviar</button>
</div>
       