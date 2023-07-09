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
                  <form class="forms-sample" method="POST" action="{{ url('gadget') }}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputUsername1">Nama Barang</label>
                      <input name="nama_barang" type="text" class="form-control" id="exampleInputUsername1" >
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">Detail Barang</label>
                      <textarea name="detail_barang" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Harga</label>
                      <input name="harga" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Gambar</label>
                      <input name="gambar" type="text" class="form-control" id="exampleInputPassword1">
                    </div>
                    <button type="submit" class="btn btn-primary me-2">Submit</button>  
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        @endsection