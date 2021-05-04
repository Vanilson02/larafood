@include('admin.includs.alert')

<div class="form-group">
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" class="form-control" value="{{ $plan->name ?? old('name') }}" placeholder="Nome:">
</div>
<div class="form-group">
    <label for="price">Preço:</label>
    <input type="text" name="price" id="price" class="form-control" value="{{ $plan->price ?? old('price') }}" placeholder="Preço:">
</div>
<div class="form-group">
    <label for="description">Descrição:</label>
    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Descrição do Plano...">{{ $plan->description ?? old('description') }}</textarea>
</div>
<div class="form-group">
    <button type="submit" class="btn btn-dark">Enviar</button>
</div>