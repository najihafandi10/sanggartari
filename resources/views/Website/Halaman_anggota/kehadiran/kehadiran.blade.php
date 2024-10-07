@extends('Website/Halaman_anggota/dasbord')
@section('content')
<?php
$hari = date ("D");
 
   switch($hari){
      case 'Sun':
         $hari_ini = "Minggu";
      break;
 
      case 'Mon':       
         $hari_ini = "Senin";
      break;
 
      case 'Tue':
         $hari_ini = "Selasa";
      break;
 
      case 'Wed':
         $hari_ini = "Rabu";
      break;
 
      case 'Thu':
         $hari_ini = "Kamis";
      break;
 
      case 'Fri':
         $hari_ini = "Jumat";
      break;
 
      case 'Sat':
         $hari_ini = "Sabtu";
      break;
      
      default:
         $hari_ini = "Tidak di ketahui";     
      break;
   }
?>

<div class="content-page">
     <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-wrap align-items-center justify-content-between breadcrumb-content">
                            <h5>PROSES KEHADIRAN ANGGOTA TARI</h5>
                            <div class="d-flex flex-wrap align-items-center">
                                <?php 
                                $check = Session::get('id_anggota');
                                $check_jadwal1 =DB::table('tb_jadwals')
                                ->join('tb_anggotas', 'tb_jadwals.id_anggota', '=', 'tb_anggotas.id_anggota')
                                ->where('tb_jadwals.hari','like',"%".$hari_ini."%")
                                ->where('tb_jadwals.id_anggota','like',"%".$check."%")
                                ->get();
                                foreach ($check_jadwal1 as $no_urut => $check){
                                    $id_anggota = $check->id_anggota;
                                    $id_jadwal = $check->id_jadwal;
                                    $hari = $check->hari;
                                }?>
                                <?php if($hari_ini == @$hari){ ?>
                                    <a href="#" data-target="#new-project-modal" data-toggle="modal" class="btn btn-primary" data-target="#new-task-modal" data-toggle="modal">Proses Now</a>
                                
                                <?php }else{?>
                                    <span class="text-danger"> <u>Maaf Jadwal Anda Belum Di Proses</u></span>
                                <?php }?>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card card-widget task-card">
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center justify-content-between">
                                            @foreach ($tampil_data as $no_urut => $tampil)
                                            <div class="d-flex align-items-center">
                                                <div class="custom-control custom-task custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck01">
                                                    <label class="custom-control-label" for="customCheck01"></label>
                                                </div>
                                                <div>
                                                    <h5 class="mb-2">{{ $tampil->nama_anggota }}</h5>
                                                    <div class="media align-items-center">
                                                        <div class="btn bg-body mr-3"><i class="ri-align-justify mr-2"></i>JML Team / {{ $tampil->jumlah_anggota }}</div>
                                                        <div class="btn bg-body text-success"><i class="ri-survey-line mr-2"></i>{{ $tampil->hari }}</div> 

                                                        <div class="btn bg-body"><i class="ri-survey-line mr-2"></i>{{ $tampil->status_hadir }}</div>                   
                                                    </div>
                                                    <p><?php echo $tampil->keterangan ?></p>
                                                </div>
                                            </div>
                                            <div class="media align-items-center mt-md-0 mt-3">                                               
                                                <a  class="btn bg-success-light mr-3" data-toggle="modal" data-target="#exampleModalScrollable{{ $tampil->id_kehadiran }}"><i class="ri-pencil-line mr-0"></i>Edit Kehadiran</a>
                                            </div>
                                            @include('Website/Halaman_anggota/kehadiran/edit_kehadiran')
                                            @endforeach
                                            @include('Website/Halaman_anggota/kehadiran/proses_kehadiran')
                                        </div>  
                                    </div>
                                </div>                                                                                                        
                                <div class="collapse" id="collapseEdit1">                                            
                                    <div class="card card-list task-card">
                                        <div class="card-header d-flex align-items-center justify-content-between px-0 mx-3">
                                            <div class="header-title">
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck05">
                                                    <label class="custom-control-label h5" for="customCheck05">Mark as done</label>
                                                </div>
                                            </div>
                                            <div><a href="#" class="btn bg-secondary-light">Design</a></div>
                                        </div>
                                        <div class="card-body">
                                            <div class="form-group mb-3 position-relative">
                                                <input type="text" class="form-control bg-white" placeholder="Design landing page of webkit">
                                                <a href="#" class="task-edit task-simple-edit text-body"><i class="ri-edit-box-line"></i></a>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group mb-0">
                                                                <label for="exampleInputText2" class="h5">Memebers</label>
                                                                <select name="type" class="selectpicker form-control" data-style="py-0">
                                                                    <option>Memebers</option>
                                                                    <option>Kianna Septimus</option>
                                                                    <option>Jaxson Herwitz</option>
                                                                    <option>Ryan Schleifer</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group mb-0">
                                                                <label for="exampleInputText3" class="h5">Due Dates*</label>
                                                                <input type="date" class="form-control" id="exampleInputText3" value="">
                                                            </div>                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-3">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-6">                                                        
                                                            <h5 class="mb-2">Description</h5>
                                                            <p class="mb-0">Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet sint. Velit officia consequat duis enim velit mollit. Exercitation veniam consequat sunt nostrud amet.</p>
                                                        </div>
                                                        <div class="col-lg-6">                                      
                                                            <h5 class="mb-2">Checklist</h5>
                                                            <div class="row">
                                                                <div class="col-lg-6">
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                                        <label class="custom-control-label mb-1" for="customCheck1">Design mobile version</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck02">
                                                                        <label class="custom-control-label mb-1" for="customCheck02">Use images of unsplash.com</label>
                                                                    </div>
                                                                    <div class="custom-control custom-checkbox custom-control-inline mr-0">
                                                                        <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                                        <label class="custom-control-label" for="customCheck3">Vector images of small size.</label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection