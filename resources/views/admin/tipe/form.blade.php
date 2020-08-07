<div class="form-group {{ $errors->has('nama_produk') ? 'has-error' : ''}}">
    <label for="nama_produk" class="control-label">{{ 'Nama' }}</label>
    <input class="form-control" name="nama_produk" type="text" id="nama_produk" value="{{ isset($datas->nama_produk) ? $datas->nama_produk : ''}}">
    {!! $errors->first('nama_produk', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group {{ $errors->has('deskripsi_produk') ? 'has-error' : ''}}">
    <label for="deskripsi_produk" class="control-label">{{ 'Deskripsi Produk' }}</label>
    <input class="form-control" name="deskripsi_produk" type="text" id="deskripsi_produk" value="{{ isset($datas->deskripsi_produk) ? $datas->deskripsi_produk : ''}}" >
     {!! $errors->first('deskripsi_produk', '<p class="help-block">:message</p>') !!}
</div>

<div class="form-group {{ $errors->has('gambar') ? 'has-error' : ''}}">
    <label for="gambar" class="control-label">{{ 'gambar' }}</label>
    <input class="form-control" name="gambar" type="file" id="gambar">
    {!! $errors->first('gambar', '<p class="help-block">:message</p>') !!}
    <img src="{{ isset($datas->gambar) ? url('/images/'.$datas->gambar) : ''}}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ isset($datas->gambar) ? $datas->gambar : ''}}" />
</div>

<div class="form-group">
<input class="btn btn-primary" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
</div>