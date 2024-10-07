@extends('dasbord')
@section('content')
<div class="content-page">
      <div class="container-fluid">
         <div class="row">
             <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">EDIT DATA PETUGAS SANGGAR TARI</h4>
                     </div>
                  </div>
                  <div class="card-body">
                    
                           <form method="POST"  class="form-horizontal"  enctype="multipart/form-data" action="{{ route('aksi_edit_petugas', $edit_data->id) }}">
                           	@csrf
                               <div class="row">
                                 <div class="form-group col-md-12">
                                    <label for="cname">Nama Petugas:</label>
                                    <input type="text" class="form-control" id="cname" placeholder="Nama Petugas" name="name" required value="{{ $edit_data->name }}">
                                 </div>
                                 
                                
                                 <div class="form-group col-md-6">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required value="{{ $edit_data->email }}">
                                 </div>
                                 <div class="form-group col-md-6">
                                    <label for="pno">Password</label>
                                    <div class="input-group" id="show_hide_password">
                                    <input type="text" class="form-control" id="pno" placeholder="Password" name="password" required maxlength="12" value="{{ $edit_data->password }}" autocomplete="current-password">
                                    
                                 </div>

                                 </div>
   
                              <button type="submit" class="btn btn-primary btn-lg mt-3">Sumbit
                              </button>
                              <a href="{{ route('Petugas') }}" class="btn btn-danger btn-lg mt-3">Cancel</a>
                          </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div>
       </div>
@endsection