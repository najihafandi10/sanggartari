@extends('dasbord')
@section('content')
<div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA PETUGAS</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                    <a href="{{ route('tambah_petugas') }}" class="btn btn-primary">Tambah Data</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <div class="row">
            <div class="col-sm-12">
               <div class="card">
                  <div class="card-body">                    
                     <div class="table-responsive">
                        <table id="datatable" class="table data-table table-striped">
                      <thead>
                        <tr class="headings">
                              	<td>No</td>
                                 <td>Nama Petugas</td>
                                 <td>E-mail</td>
                                 <td>Password</td>
                                 <td>Aksi</td>
                              </tr>
                           </thead>
                           <tbody>
                           	@foreach ($tampil_data as $no_urut => $tampil)
                              <tr>
                                 <td>{{ $no_urut+1 }}</td>
                                 <td>{{ $tampil->name }}</td>
   			                     <td>{{ $tampil->email }}</td>
   			                     <td>{{ $tampil->password }}</td>
   			                     <td>
   			                     	<a href="{{ route('edit_petugas', $tampil->id)}}" onclick="return confirm('Yakin ingin mengubah data')" class="btn btn-info  btn-sm" >
                           			<i class="icon icon-pencil"></i> Update</a>
   			                      <a href="{{ route('hapus_petugas', $tampil->id)}}" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
   			                        <i class="icon icon-trash"></i> Delete</a>  
   			                     </td>
                              </tr>
                             @endforeach
                           </tbody>
                        </table>
                      
                       </div>
                   </div>
               </div>
             </div>
           </div>
         </div>

@endsection