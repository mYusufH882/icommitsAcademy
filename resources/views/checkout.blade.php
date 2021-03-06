<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Out</title>
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
</head>
<body style="background: #F1F3F9;">
    
    <nav class="navbar navbar-dark" style="background: #322558;">
        <a class="nav-link text-light" href="#">&laquo; Kembali </a>
        <div class="container ml-0">
            <span class="navbar-text text-light mx-auto d-block h5">
                Metode Pembayaran
            </span>    
        </div>
    </nav>

    <div class="container mb-5">

        <!-- Detail Pembelian -->
        <div class="row justify-content-center mt-2">
            <div class="col-md-8">
                <span class="text-secondary p-5 ml-5 h6">Detail Pembelian</span>
            </div>
        </div>

        <!-- Kode Voucher -->
        <div class="row mt-2">
            <div class="card col-md-6 border rounded mx-auto d-block">
                <div class="card-body">
                    <div class="card-title">Sukses Kerja Sampingan di Masa Corona [6 Kelas]</div>

                    <p class="card-text text-secondary small">
                        Raih penghasilan jutaan Rupiah dengan beragam bisnis alternatif di masa Corona: 
                        jualan di instagram, jualan masker kain, katering rumahan, dll.
                    </p>

                    <div class="border-top mb-3"></div>

                    <input type="checkbox" name="voucher" id="kode">
                    <label for="kode">
                        <span class="text-info small">
                            Saya Memiliki Kode Voucher
                        </span>
                    </label>
                    
                </div>
            </div>
        </div>

        <!-- Pilih Metode Pembayaran -->
        <div class="row justify-content-center mt-2">
            <div class="col-md-8">
                <span class="text-secondary p-5 ml-5 h6">Pilih Metode Pembayaran</span>
            </div>
        </div>

        <!-- Prakerja -->
        <div class="row mt-2">
            <div class="card col-md-6 border rounded mx-auto d-block">
                <div class="card-body">
                    <div class="card-title">Prakerja</div>
    
                    <p class="card-text text-secondary small">
                        Pembayaran terhubung langsung dengan Kartu Prakerja kamu.
                    </p>

                    <div class="card-body border rounded">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
                            <label class="form-check-label" for="exampleRadios1">
                                <img src="assets/img/prakerja.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <!-- E-Wallet -->
        <div class="row mt-2">
            <div class="card col-md-6 border rounded mx-auto d-block">
                <div class="card-body">
                    <div class="card-title">E-WALLET</div>
    
                    <p class="card-text text-secondary small">
                        Pembayaran terhubung langsung dengan akun e-wallet kamu
                    </p>

                    <div class="card-body border rounded">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2" checked>
                            <label class="form-check-label" for="exampleRadios2">
                                <img src="assets/img/gopay.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>

                    <div class="card-body border rounded mt-2">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3" checked>
                            <label class="form-check-label" for="exampleRadios3">
                                <img src="assets/img/ovo.png" alt="Gambar" height="25px" width="55px" class="img-responsive">
                            </label>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <!-- Transfer Virtual Account -->
        <div class="row mt-2">
            <div class="card col-md-6 border rounded mx-auto d-block">
                <div class="card-body">
                    <div class="card-title">TRANSFER VIRTUAL ACCOUNT</div>
    
                    <p class="card-text text-secondary small">
                        Dengan kode unik, semua jadi cepat
                    </p>

                    <div class="card-body border rounded">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4" checked>
                            <label class="form-check-label" for="exampleRadios4">
                                <img src="assets/img/bca.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>

                    <div class="card-body border rounded mt-2">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios5" value="option5" checked>
                            <label class="form-check-label" for="exampleRadios5">
                                <img src="assets/img/bni.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>

                    <div class="card-body border rounded mt-2">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios6" value="option6" checked>
                            <label class="form-check-label" for="exampleRadios6">
                                <img src="assets/img/mandiri.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>

                    <div class="card-body border rounded mt-2">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios7" value="option7" checked>
                            <label class="form-check-label" for="exampleRadios7">
                                <img src="assets/img/bri.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <!-- Transfer Bank -->
        <div class="row mt-2">
            <div class="card col-md-6 border rounded mx-auto d-block">
                <div class="card-body">
                    <div class="card-title">TRANSFER BANK</div>
    
                    <p class="card-text text-secondary small">
                        Transaksi dengan akhir nominal unik untuk verifikasi otomatis
                    </p>

                    <div class="card-body border rounded">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios8" value="option8" checked>
                            <label class="form-check-label" for="exampleRadios8">
                                <img src="assets/img/bca.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <!-- Kartu Kredit -->
        <div class="row mt-2">
            <div class="card col-md-6 border rounded mx-auto d-block">
                <div class="card-body">
                    <div class="card-title">KARTU KREDIT</div>
    
                    <p class="card-text text-secondary small">
                        Menerima VISA, Master Card, JCB, dan American Express
                    </p>

                    <div class="card-body border rounded">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios9" value="option9" checked>
                            <label class="form-check-label" for="exampleRadios9">
                                <img src="assets/img/kkredit.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

        <!-- Minimarket -->
        <div class="row mt-2">
            <div class="card col-md-6 border rounded mx-auto d-block">
                <div class="card-body">
                    <div class="card-title">MINIMARKET</div>
    
                    <p class="card-text text-secondary small">
                        Transaksi bisa diselesaikan langsung di cabang terdekat
                    </p>

                    <div class="card-body border rounded">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios10" value="option10" checked>
                            <label class="form-check-label" for="exampleRadios10">
                                <img src="assets/img/minimarket.png" alt="Gambar" height="45px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>

                    <div class="card-body border rounded mt-2">
                        <div class="form-check ml-0">
                            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                            <label class="form-check-label" for="exampleRadios1">
                                <img src="assets/img/indomaret.png" alt="Gambar" height="35px" width="100px" class="img-responsive">
                            </label>
                        </div>
                    </div>
    
                </div>
            </div>
        </div>

    </div>

    <br>
    <br>
    <br>
    <br>

    <ul class="nav justify-content-center bg-light p-4 fixed-bottom">
        <div class="flex-column">
            <li class="nav-item">
                <span class="nav-text mr-5">Harga</span>
                <span class="nav-text">&nbsp;  Rp. 4.252.000,00 </span>
                <span class="nav-text text-success ml-5">&nbsp;Hemat Rp. 3.252.000,00</span>
            </li>
            <li class="nav-item mt-2">
                <span class="nav-text mr-5">Diskon</span>
                <span class="nav-text">- Rp. 3.252.000,00 </span>
                <span class="nav-text ml-5">TOTAL HARGA</span>
            </li>
            <li class="nav-item">
                <span class="nav-text h4" style="margin-left: 280px;">Rp. 1.000.000</span>
            </li>
        </div>

        <li class="nav-item">
            <button class="btn btn-sm btn-secondary ml-3 mt-4 text-light">CHECKOUT</button>
        </li>
    </ul>


    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
</body>
</html>