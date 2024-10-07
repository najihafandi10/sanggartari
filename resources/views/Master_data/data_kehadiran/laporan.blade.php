<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Laporan</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/paper-css/0.4.1/paper.css" rel="nofollow">
<style>
    @page { size: A4 }
  
    h1 {
        font-weight: bold;
        font-size: 20pt;
        text-align: center;
    }
  
    table {
        border-collapse: collapse;
        width: 100%;
    }
  
    .table th {
        padding: 8px 8px;
        border:1px solid #000000;
        text-align: center;
    }
  
    .table td {
        padding: 3px 3px;
        border:1px solid #000000;
    }
  
    .text-center {
        text-align: center;
    }
</style>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #3a6d91;
  color: white;
}

.myDiv {
  border: 5px outset ;
  text-align: center;
}
hr{
height: 10px;
border: 0;
box-shadow: 0 10px 10px -10px #8c8c8c inset;
}
</style>
</head>
<body class="elegan">
    <section class="sheet padding-10mm">
<div id="container">
   <table>
      <tr><td style="width:10px"></td>
         <td style="width: 10px">
          <img src="{{ asset('/icon/logo.webp') }}" style="width: 60px;"></td>
         <td align="center">
            <h1 align="center">   
                <strong style="font-family:'Times New Roman', Times, serif">      
              LAPORAN DATA KEHADIRAN ANGGOTA SANGGAR TARI</strong>
              
            </h1>
         </td>
      </tr>
   </table>
  <hr>
  <div id="body">
                    <table class="table" id="customers" >
                    			<thead>
                                    <tr >
                                       <th>No</th>
                                       <th>Anggota</th> 
                                       <th>Item Kehadiran</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <?php foreach ($tampil_data as $no_urut => $tampil){ 
                                        $id_anggota = $tampil->id_anggota;
                                    ?>
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>
                                        <table class="table data-table table-striped">
                                            <tr>
                                                <td>Hari</td>
                                                <td>Tgl Hadir</td>
                                                <td>Keterangan</td>
                                                <td>Status</td>
                                            </tr>
                                            <?php 
                                            $tampil_kehadiran =DB::table('tb_kehadirans')
                                            ->join('tb_anggotas', 'tb_kehadirans.id_anggota', '=', 'tb_anggotas.id_anggota')
                                            // ->join('tb_jadwals', 'tb_kehadirans.id_anggota', '=', 'tb_jadwals.id_anggota')
                                            ->where('tb_kehadirans.id_anggota','like',"%".@$id_anggota."%")
                                            ->get();
                                            // 
                                            // hitung kehadiran
                                                $jumlah_aktif =DB::table('tb_kehadirans')
                                                ->where('tb_kehadirans.status_hadir','like',"Aktif")
                                                ->where('tb_kehadirans.id_anggota','like',"%".@$id_anggota."%")
                                                ->count();
                                                $jumlah_tidak =DB::table('tb_kehadirans')
                                                ->where('tb_kehadirans.status_hadir','like',"Tidak Aktif")
                                                ->where('tb_kehadirans.id_anggota','like',"%".@$id_anggota."%")
                                                ->count();
                                            foreach ($tampil_kehadiran as $no_urut => $data){
                                            ?>
                                            <tr>
                                                <td><?php echo $data->hari; ?></td>
                                                <td><?php echo $data->tgl_hadir; ?></td>
                                                <td><?php echo $data->keterangan; ?></td>
                                                <td><?php echo $data->status_hadir; ?></td>
                                                
                                            </tr>
                                            <?php }?>
                                            <tr class="table-primary">
                                                <td>Jumlah Ketidak Hadiran</td>
                                                <td>Aktif : <span class="badge bg-primary">{{ $jumlah_aktif }}</span></td>
                                                <td>Tidak Aktif : <span class="badge bg-warning">{{ $jumlah_tidak }}</span></td>
                                            </tr>
                                        </table>
                                       </td>
                                    </tr>
                                    <?php }?>
                                 </tbody>
                              </table>
           <div align="right">
                      <h4>Data, <?php echo date('d-F-Y'); ?></h4><br><br>
                      <h4>(.........................)</h4>
                    </div>
                 
   </section>
   <script type="text/javascript">print();</script>
</body>
</html>