
@csrf

<div class="form-group">
   <label for="name">Nome <i class="text-danger fas fa-asterisk" title="Preenchimento obrigatório!"></i></label>
   <input type="text" name="name" id="name" class="form-control {{ ($errors->has('name') ? 'is-invalid' : '') }}"  placeholder="Nome" value="{{ $detail->name ?? old('name') }}">
    @if ($errors->has('name'))
        <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Enviar</button>
</div>
            