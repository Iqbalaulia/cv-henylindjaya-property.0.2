
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="/css/galeri.css">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="/js/jquery.js"></script>
  <script src="/js/bootstrap.min.js" ></script>
  <script src="/js/galeri.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Cinzel|Fugaz+One|Russo+One|IBM+Plex+Serif" rel="stylesheet">


  <title>Galeri</title>

</head>
<?php echo $__env->make('/halaman/header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<body>
  <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12 col-lg-12 konten">
      <div class=" konten-s container">
        <div class="konten-h col-md-6 col-sm-6">
          <h1>galeri</h1>
        </div>
      </div>
    </div>
  </div>
  <br>
  <main class="mitgliederliste">
    <figure class="einzel">
      <img alt="Mitglieder" id="img1" src="<?php echo e(asset('img/webibu/1.jpeg')); ?>" style="width: 400px; height: 400px;">
      <div class="kotak kotak1">
        <p>Klik Tombol di Bawah Jika Anda Berminat</p>
        <a class="btn button-three " data-toggle="modal" href='#modal-id'>CLICK</a>
        <div class="modal fade " id="modal-id">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title title">
                  <div class="modal-contact" style="font-size: 15px;">
                    Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
                  </div>
                </h4>
              </div>
              <div class="modal-body">
                <img alt="Mitglieder" class="" src="<?php echo e(asset('img/webibu/1.jpeg')); ?>" style="width: 600px; height: 500px;">
                <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
                  <div class="form-group" id="warning_nama">
                   <p>Nama :</p>
                   <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
                 </div>

                 <div class="form-group" id="warning_wa">
                  <p>Nomor WA :</p>
                  <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
                </div>
                <div class="form-group" id="warning_email">
                 <p>Email :</p>
                 <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
               </div>
             </form>
           </div>
           <div class="modal-footer">

            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img2" src="<?php echo e(asset('img/webibu/2.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak2">
   <p>Klik Tombol di Bawah Jika Anda Berminat</p>
   <a class="btn button-three " data-toggle="modal" href='#modal-id1'>CLICK</a>
   <div class="modal fade" id="modal-id1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title title">
            <div class="modal-contact" style="font-size: 15px;">
              Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
            </div>
          </h4>
        </div>
        <div class="modal-body">
         <img alt="Mitglieder" id="img2" src="<?php echo e(asset('img/webibu/2.jpeg')); ?>" style="width: 600px; height: 500px;">
         <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
          <div class="form-group" id="warning_nama">
           <p>Nama :</p>
           <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
         </div>
         <div class="form-group" id="warning_wa">
          <p>Nomor WA :</p>
          <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group" id="warning_email">
         <p>Email :</p>
         <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
       </div>
     </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img3" src="<?php echo e(asset('img/webibu/3.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak3">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id2'>CLICK</a>
    <div class="modal fade" id="modal-id2">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img3" src="<?php echo e(asset('img/webibu/3.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img4" src="<?php echo e(asset('img/webibu/4.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak4">
   <p>Klik Tombol di Bawah Jika Anda Berminat</p>
   <a class="btn button-three " data-toggle="modal" href='#modal-id3'>CLICK</a>
   <div class="modal fade" id="modal-id3">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title title">
            <div class="modal-contact" style="font-size: 15px;">
              Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
            </div>
          </h4>
        </div>
        <div class="modal-body">
         <img alt="Mitglieder" id="img4" src="<?php echo e(asset('img/webibu/4.jpeg')); ?>" style="width: 600px; height: 500px;">
         <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
          <div class="form-group" id="warning_nama">
           <p>Nama :</p>
           <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
         </div>
         <div class="form-group" id="warning_wa">
          <p>Nomor WA :</p>
          <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group" id="warning_email">
         <p>Email :</p>
         <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
       </div>
     </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/5.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak5">
   <p>Klik Tombol di Bawah Jika Anda Berminat</p>
   <a class="btn button-three " data-toggle="modal" href='#modal-id4'>CLICK</a>
   <div class="modal fade" id="modal-id4">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title title">
            <div class="modal-contact" style="font-size: 15px;">
              Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
            </div>
          </h4>
        </div>
        <div class="modal-body">
         <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/5.jpeg')); ?>" style="width: 600px; height: 500px;">
         <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
          <div class="form-group" id="warning_nama">
           <p>Nama :</p>
           <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
         </div>
         <div class="form-group" id="warning_wa">
          <p>Nomor WA :</p>
          <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group" id="warning_email">
         <p>Email :</p>
         <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
       </div>
     </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img6" src="<?php echo e(asset('img/webibu/6.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak6">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id5'>CLICK</a>
    <div class="modal fade" id="modal-id5">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/6.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img7" src="<?php echo e(asset('img/webibu/7.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak7">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id6'>CLICK</a>
    <div class="modal fade" id="modal-id6">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/7.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img8" src="<?php echo e(asset('img/webibu/8.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak8">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id7'>CLICK</a>
    <div class="modal fade" id="modal-id7">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/8.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img9" src="<?php echo e(asset('img/webibu/9.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak9">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id8'>CLICK</a>
    <div class="modal fade" id="modal-id8">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/9.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img10" src="<?php echo e(asset('img/webibu/10.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak10">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id9'>CLICK</a>
    <div class="modal fade" id="modal-id9">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/10.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img11" src="<?php echo e(asset('img/webibu/11.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak11">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id10'>CLICK</a>
    <div class="modal fade" id="modal-id10">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/11.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img12" src="<?php echo e(asset('img/webibu/12.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak12">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id11'>CLICK</a>
    <div class="modal fade" id="modal-id11">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/12.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img13" src="<?php echo e(asset('img/webibu/13.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak13">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id12'>CLICK</a>    
    <div class="modal fade" id="modal-id12">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/13.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img14" src="<?php echo e(asset('img/webibu/14.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak14">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id13'>CLICK</a>
    <div class="modal fade" id="modal-id13">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/14.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img15" src="<?php echo e(asset('img/webibu/15.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak15">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id14'>CLICK</a>
    <div class="modal fade" id="modal-id14">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/15.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img16" src="<?php echo e(asset('img/webibu/16.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak16">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id15'>CLICK</a>
    <div class="modal fade" id="modal-id15">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/16.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img18" src="<?php echo e(asset('img/webibu/17.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak17">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id16'>CLICK</a>
    <div class="modal fade" id="modal-id16">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
            <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/17.jpeg')); ?>" style="width: 600px; height: 500px;">
            <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
              <div class="form-group" id="warning_nama">
               <p>Nama :</p>
               <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
             </div>
             <div class="form-group" id="warning_wa">
              <p>Nomor WA :</p>
              <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
            </div>
            <div class="form-group" id="warning_email">
             <p>Email :</p>
             <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
           </div>
         </form>
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img18" src="<?php echo e(asset('img/webibu/18.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak18">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id17'>CLICK</a>
    <div class="modal fade" id="modal-id17">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/18.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img19" src="<?php echo e(asset('img/webibu/19.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak19" >
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id18'>CLICK</a>
    <div class="modal fade" id="modal-id18">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/19.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>
</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img20" src="<?php echo e(asset('img/webibu/20.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak20">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id19'>CLICK</a>
    <div class="modal fade" id="modal-id19">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
           <img alt="Mitglieder" id="img5" src="<?php echo e(asset('img/webibu/20.jpeg')); ?>" style="width: 600px; height: 500px;">
           <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
            <div class="form-group" id="warning_nama">
             <p>Nama :</p>
             <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
           </div>
           <div class="form-group" id="warning_wa">
            <p>Nomor WA :</p>
            <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
          </div>
          <div class="form-group" id="warning_email">
           <p>Email :</p>
           <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
         </div>
       </form>
     </div>
     <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
    </div>
  </div>
</div>
</div>
</div>

</figure>
<figure class="einzel">
  <img alt="Mitglieder" id="img21" src="<?php echo e(asset('img/webibu/21.jpeg')); ?>" style="width: 400px; height: 400px;">
  <div class="kotak kotak21">
    <p>Klik Tombol di Bawah Jika Anda Berminat</p>
    <a class="btn button-three " data-toggle="modal" href='#modal-id20'>CLICK</a>
    <div class="modal fade" id="modal-id20">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title title">
              <div class="modal-contact" style="font-size: 15px;">
                Jika Berminat Hubungi Nomer yang tersedia , dan masukkan Nama , nomer WA dan Email anda.
              </div>
            </h4>
          </div>
          <div class="modal-body">
            <img alt="Mitglieder" id="img21" src="<?php echo e(asset('img/webibu/21.jpeg')); ?>" style="width: 600px; height: 500px;">
            <form action="insert" method="post" class="form-data" onsubmit="return validasi();" >
              <div class="form-group" id="warning_nama">
               <p>Nama :</p>
               <input id="namanya" type="text" class="form-control" id="" placeholder="Masukkan Nama Anda" required="harus  diisi">
             </div>
             <div class="form-group" id="warning_wa">
              <p>Nomor WA :</p>
              <input id="nowanya" type="text" class="form-control" id="" placeholder="Masukkan Nomor WA Anda" required onkeypress="return hanyaAngka(event)">
            </div>
            <div class="form-group" id="warning_email">
             <p>Email :</p>
             <input id="emailnya" type="text" class="form-control" id="" placeholder="example : rootzs@gmail.com" required="harus  diisi">
           </div>
         </form>
       </div>
       <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</div>
</figure>
</main>
<br>
</body>
<?php echo $__env->make('/halaman/footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
</html>

