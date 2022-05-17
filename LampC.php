<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>LAMPIRAN C GENERATOR</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" />

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" crossorigin="anonymous"></script>

  <style>
      @import url('https://rsms.me/inter/inter.css');
      html { font-family: 'Inter', sans-serif; }

      @supports (font-variation-settings: normal) {
        html { font-family: 'Inter var', sans-serif; }
        body { padding: 10px; }
      }

    .text-line {
        background-color: transparent;
        width: 51%;
        color: #000000;
        outline: none;
        outline-style: none;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid #000000 1px;
        text-decoration: none;
        padding: 3px 5px;
    }
      .text-line1 {
        background-color: transparent;
        width: 31%;
        color: #000000;
        outline: none;
        outline-style: none;
        border-top: none;
        border-left: none;
        border-right: none;
        border-bottom: solid #000000 1px;
        text-decoration: none;
        padding: 3px 5px;
    }
  </style>
  
  <script type="text/javascript">
  $(document).ready(function() {
    $('#nama_bank').select2();
    // $('input.form-control.text-center.mobile-verify.pass').on('keyup', function() {
    //   if ($(this).val()) {
    //       $(this).next().focus();
    //   }
    // });
  });
  </script>

  </head>

<body>
<!-- Page Header -->
<header>
  <div class="p-5 text-center" >
    <h2 class="mb-1" style="font-size:16px">Borang Pengesahan Akaun Bank Untuk Pembayaran</h2>
    <h1 class="mb-1" style="font-size:22px">
      <b>Elaun/Baucar Bayaran Am</b>
    </h1>
    <h3 class="mb-3" style="font-size:18px">
      <u>Melalui Alliance Online Banking</u>
    </h3>
  </div>
</header>

<div class="container">
    <form action="LampC_pdf.php" method="post">

<!-- JavaScript for full name so it only allows alphabet and spacing onkeypress on the text field -->
    <script>
        $(document).ready(function(){
        $("#nama").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 67 && inputValue <= 122) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        }); 
    });
    </script>

    <div class="mb-3 row">
      <label for="nama" class="col-sm-2 col-form-label">Nama Syarikat /Perniagaan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="60" name="full_name" id="nama" style="text-transform:uppercase;" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="alamat" class="col-sm-2 col-form-label">Alamat Syarikat /Perniagaan</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="60" name="company_address" id="alamat" style="text-transform:uppercase;" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="petisurat" class="col-sm-2 col-form-label">Sila Gunakan Alamat Peti Surat</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="60" name="mailbox" id="alamat" style="text-transform:uppercase;" required>
      </div>
    </div>
    
    <div class="mb-3 row">
      <label for="email" class="col-sm-2 col-form-label">E-mel </label>
      <div class="col-sm-10">
        <input type="email" class="form-control" maxlength="30" pattern="^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)+" name="user_email" id="email" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="office_num" class="col-sm-2 col-form-label">No.Telefon (Pejabat) </label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="office_num" id="office_phone" onKeyPress="if(this.value.length==11) return false;"
        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="mobile_num" class="col-sm-2 col-form-label">No.Telefon (Bimbit) </label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="mobile_num" id="mobile_phone" onKeyPress="if(this.value.length==11) return false;"
        oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
        <small>(wajib diisi untuk tujuan e-makluman)</small>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="mykad" class="col-sm-2 col-form-label">No.MyKad</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" name="mykad" id="mykad" onKeyPress="if(this.value.length==12) return false;"
         oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
        <small>(Masukkan digit sahaja)</small>
      </div>
    </div>

    <div class="mb-3 row">
      <label for="bank_acc" class="col-sm-2 col-form-label">No.Akaun Bank</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="16" name="acc_number" id="bank_acc" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
        <small>**Sila pastikan nombor akaun masih aktif dan dicatat dengan betul
        <br>
        <i>(diisi tanpa sengkang dan petak)</i></small>
      </div>
    </div>

    <?php 
    /* use curl and decode json to receive all banks;
    use foreach looping to get bnk desc,bnk length ... etc */
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://s3p.sabah.gov.my/api_eresit/bank" );
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $json = curl_exec($ch);
    curl_close($ch);
    $bank = json_decode($json, true);
    ?>

    
    <div class="mb-3 row">
      <label for="nama_bank" class="col-sm-2 col-form-label">Nama Bank</label>
      <div class="col-sm-10">
        <select class="form-control form-select" aria-label="Pilih bank" name="bank" id="nama_bank" required>
          <option value="">-- Sila pilih bank --</option>
           <?php foreach($bank['data'] as $bank): ?>
             <option value="<?= $bank['BNK_DESC'].'|'.$bank['BNK_CODE'].'|'.$bank['ACC_LENGTH']; ?>"><?= $bank['BNK_CODE'].' - '.$bank['BNK_DESC'].' ('.$bank['ACC_LENGTH'].' digit)'; ?></option>
           <?php endforeach; ?>
        </select>
      </div>
    </div>

    <!-- JavaScript for full name so it only allows full name and spacing onkeypress on the text field -->
    <script>
        $(document).ready(function(){
        $("#cawangan_bank").keypress(function(event){
            var inputValue = event.charCode;
            if(!(inputValue >= 65 && inputValue <= 120) && (inputValue != 32 && inputValue != 0)){
                event.preventDefault();
            }
        }); 
    });
    </script>

    <div class="mb-3 row">
      <label for="cawangan_bank" class="col-sm-2 col-form-label">Cawangan Bank</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" maxlength="60" name="cawangan" id="cawangan_bank" style="text-transform:uppercase;" required>
      </div>
    </div>

    <p class="text-center">
	   <input type="submit" class="btn btn-danger btn-lg" value="Generate PDF &amp; Print"></input>
    </p>
    </div>
</form>
</body>
</html>

