@extends('dasbord')

@section('content')
  <div class="content-page">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5><img src="{{ asset('/icon/file.png') }}" style="width: 40px;">TABEL DATA KEUANGAN SANGGAR TARI</h5>
                            <div class="d-flex flex-wrap align-items-center justify-content-between">
                                <div class="pl-3 border-left btn-new">
                                    <a href="{{ route('tambah_keuangan') }}" class="btn btn-primary">Tambah Data</a>
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
                                    <tr >
                                       <th>No</th>
                                       <th>Item</th>
                                       <th>Jumlah Data</th>
                                       <th>Sub Total</th>
                                       <th>Tgl Input</th>
                                       <th>Aksi</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->item_keuangan }}</td>
                                       <td>{{ $tampil->jumlah_data }}</td>
                                       <td>{{ number_format($tampil->sub_total) }}</td>
                                       <td>{{ $tampil->created_at }}</td>
                                       <td>
                                        <a href="#" data-target="#new-project-modal{{ $tampil->nomor }}" data-toggle="modal" target="_blank" class="badge bg-warning">
                                             <i class="ri-pencil-line mr-0"></i> Update
                                          </a>
                                        <form method="POST" action="{{ route('hapus_keuangan') }}">
                                            @csrf
                                            <input type="hidden" name="nomor" value="{{ $tampil->nomor }}">
                                         <button type="submit" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger btn-sm" >
                                           <i class="ri-delete-bin-line mr-0"></i> Delete</button>
                                       </form>
                                       </td>
                                    </tr>
                                    @include('Master_data/data_keuangan/edit')
                                    @endforeach
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
           
@endsection