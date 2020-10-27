<div class="form-group {{ $errors->has('id_produk') ? 'has-error' : ''}}">
    <label for="id_produk" class="control-label">{{ 'ID Produk' }}</label>
    <input class="form-control" name="id_produk" type="text" id="id_produk" value="{{ isset($datas->id_produk) ? $datas->id_produk : ''}}">
    {!! $errors->first('id_produk', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('ukuran') ? 'has-error' : ''}}">
    <label for="ukuran" class="control-label">{{ 'Ukuran' }}</label>
    <input class="form-control" name="ukuran" type="text" id="ukuran" value="{{ isset($datas->ukuran) ? $datas->ukuran : ''}}" >
     {!! $errors->first('ukuran', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('harga') ? 'has-error' : ''}}">
    <label for="harga" class="control-label">{{ 'Harga' }}</label>
    <input class="form-control" name="harga" type="text" id="harga" value="{{ isset($datas->harga) ? $datas->harga : ''}}" >
     {!! $errors->first('harga', '<p class="help-block">:message</p>') !!}
</div>



<div class="form-group">
<input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>