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
              LAPORAN DATA ADMINISTRASI SANGGAR TARI</strong>
              
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
                                       <th>Jenis Pembayaran</th>
                                       <th>Nama Anggota</th>
                                       <th>Jumlah Bayar Pendaftaran</th>
                                       <th>Bayar</th>
                                       <th>Tgl Pembayaran</th>
                                       <th>Tgl Input</th>
                                       <th>Status Bayar</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($tampil_data as $no_urut => $tampil)
                                    <tr>
                                       <td>{{ $no_urut+1 }}</td>
                                       <td>{{ $tampil->jenis }}</td>
                                       <td>{{ $tampil->nama_anggota }}</td>
                                       <td>Rp. {{ number_format($tampil->jumlah_pendaftaran) }}</td>
                                       <td>Rp. {{ number_format($tampil->bayar) }}</td>
                                       <td>{{ $tampil->tgl_pembayaran }}</td>
                                       <td>{{ $tampil->created_at }}</td>
                                       <td>{{ $tampil->status_bayar }}</td>
                    		</tr>
                    		@endforeach
                    	</thead>
                    </table>
           <div align="right">
                      <h4>Data, <?php echo date('d-F-Y'); ?></h4><br><br>
                      <h4>(.........................)</h4>
                    </div>
                 
   </section>
   <script type="text/javascript">print();</script>
</body>
</html>