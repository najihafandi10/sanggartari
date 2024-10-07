@extends('Website/Halaman_anggota/dasbord')
@section('content')
 <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-12">
               <div class="card car-transparent">
                  <div class="card-body p-0">
                     <div class="profile-image position-relative">
                        <img src="{{ asset('/icon/header_halaman.png') }}" class="img-fluid rounded w-100" alt="profile-image">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row m-sm-0 px-3">            
            <div class="col-lg-4 card-profile">
               <div class="card card-block card-stretch card-height">
                  <div class="card-body">
                     <div class="d-flex align-items-center mb-3">
                        <div class="profile-img position-relative">
                           <img src="{{ asset('/icon/21.jpg') }}" class="img-fluid rounded avatar-110" alt="profile-image">
                        </div>
                        <div class="ml-3">
                           <h4 class="mb-1">{{Session::get('nama_anggota')}}</h4>
                           <p class="mb-2"><b>Masuk Ke-</b> {{Session::get('kelompok_tari')}}</p>
                           <a href="#" class="btn btn-primary font-size-14"  data-target="#new-project-modal" data-toggle="modal">Update Password</a>
                           @include('Website/Halaman_anggota/data_profil/ubah_password')
                        </div>
                     </div>
                     <p>
                        Anda telah terdaftar sebagai anggota sanggar tari di SituBondo.
                     </p>
                     <ul class="list-inline p-0 m-0">
                        <li class="mb-2">
                           <div class="d-flex align-items-center">
                              <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                              </svg>
                              <p class="mb-0">{{Session::get('alamat')}}</p>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="d-flex align-items-center">
                              <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                              </svg>
                              <p class="mb-0">JML Team : {{Session::get('jumlah_anggota')}}</p>
                           </div>
                        </li>
                        <li class="mb-2">
                           <div class="d-flex align-items-center">
                              <svg class="svg-icon mr-3" height="16" width="16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                              </svg>
                              <p class="mb-0">{{Session::get('nohp')}}</p>
                           </div>
                        </li>
                        
                     </ul>
                  </div>
               </div>
            </div>

        </div>
    </div>
</div>
@endsection