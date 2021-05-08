
<div class="form-group">
    <label for="name">Nome<i class="text-danger fas fa-asterisk" title="Preenchimento obrigatório!"></i></label>
    <input type="text" name="name" id="name" class="form-control {{ ($errors->has('name') ? 'is-invalid': '') }}" value="{{ $plan->name ?? old('name') }}" placeholder="Nome:">
    @if ($errors->has('name'))
        <strong class="invalid-feedback">{{ $errors->first('name') }}</strong>
    @endif
</div>
<div class="form-group">
    <label for="price">Preço<i class="text-danger fas fa-asterisk" title="Preenchimento obrigatório!"></i></label>
    <input type="text" name="price" id="price" class="form-control {{ ($errors->has('price') ? 'is-invalid': '') }}" value="{{ $plan->price ?? old('price') }}" placeholder="Preço:">
    @if ($errors->has('price'))
        <strong class="invalid-feedback">{{ $errors->first('price') }}</strong>
    @endif
</div>
<div class="form-group">
    <label for="description">Descrição:</label>
    <textarea class="form-control {{ ($errors->has('description') ? 'is-invalid': '') }}" name="description" id="description" rows="3" placeholder="Descrição do Plano...">{{ $plan->description ?? old('description') }}</textarea>
    @if ($errors->has('description'))
        <strong class="invalid-feedback">{{ $errors->first('description') }}</strong>
    @endif
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>