@extends('layouts.app')
@section('content')

<div class="container">
    <form class="well form-horizontal" action=" " method="post"  id="contact_form">
<fieldset>

<!-- Form Name -->
<legend>Form Pesanan</legend></br>
<legend>Data Diri</legend>

<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label">E-Mail</label>  
      <div class="col-md-4 inputGroupContainer">
      <div class="input-group">
          <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
    <input name="email" placeholder="Alamat E-mail" class="form-control"  type="text">
      </div>
    </div>
  </div>  

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Nama Lengkap</label>  
  <div class="col-md-4 inputGroupContainer">
  <div class="input-group">
  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
  <input  name="full_name" placeholder="Nama Lengkap" class="form-control"  type="text">
    </div>
  </div>
</div>

<!-- Text input-->
       
<div class="form-group">
  <label class="col-md-4 control-label">Nomor Telepon</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="+62888888888" class="form-control" type="text">
    </div>
  </div>
</div>

<!-- Text input-->
      
<div class="form-group">
    <label class="col-md-4 control-label">Tanggal Lahir</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input  name="birthdate" placeholder="Tanggal Lahir" class="form-control"  type="text">
      </div>
    </div>
  </div>

<!-- Text input-->
 
<div class="form-group">
  <label class="col-md-4 control-label">Alamat</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="address" placeholder="Alamat Tempat Tinggal Sekarang" class="form-control"  type="text">
    </div>
  </div>
</div>


<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label">Tanggal Wisata</label>  
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
  <input name="date" placeholder="Tanggal Wisata" class="form-control"  type="text">
    </div>
</div>
</div>

<!-- radio checks -->
 <div class="form-group">
  <label class="col-md-4 control-label">Buat Grup/Join Grup?</label>
  <div class="col-md-4">
      <div class="radio">
          <label>
              <input type="radio" name="group" value="make_group" /> Buat Grup
          </label>
      </div>
      <div class="radio">
          <label>
              <input type="radio" name="group" value="join_group" /> Join Grup
          </label>
      </div>
  </div>
</div>

<!-- Text area -->
  
<div class="form-group">
  <label class="col-md-4 control-label">Project Description</label>
    <div class="col-md-4 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
        	<textarea class="form-control" name="comment" placeholder="Project Description"></textarea>
  </div>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label"></label>
  <div class="col-md-4">
    <a href="/sukses" class="btn btn-warning">Pesan Sekarang</a>
  </div>
</div>
</fieldset>
</form>
</div>
    </div><!-- /.container -->
@endsection