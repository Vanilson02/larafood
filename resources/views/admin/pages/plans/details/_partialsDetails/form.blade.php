@include('admin.includs.alert')

@csrf

<div class="form-group">
   <label for="name">Nome:</label>
   <input type="text" name="name" id="name" placeholder="Nome" value="{{ $detail->name ?? old('name') }}" class="form-control">
</div>
<div class="form-group">
    <button type="submit" class="btn btn-info">Enviar</button>
</div>
            