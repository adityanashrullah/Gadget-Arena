@extends('Admin/Admin')

@section('container')
<div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">GADGET FORM</h4>
                  <p class="card-description">
                  Informasi Gadget
                  </p>
                  <form class="forms-sample" method="POST" action="{{ url('gadget/'.$model->id) }}">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Barang</label>
                      <input name="nama_barang" value="{{ $model->nama_barang }}" type="text" class="form-control" id="exampleInputUsername1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Detail Barang</label>
                      <input name="detail_barang" value="{{ $model->detail_barang }}" type="text" class="form-control" id="exampleInputUsername1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Harga</label>
                      <input name="harga" value="{{ $model->harga }}" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gambar</label>
                      <input name="gambar" value="{{ $model->gambar }}" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection