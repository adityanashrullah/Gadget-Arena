<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Modul 1</title>
        <link rel="stylesheet" href="css/style.css"> 
        <link rel="stylesheet" href="css/product.css"> 
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    </head>
    <body>
        <header>
            <img class="logo" src="logogadget.jpg" alt="logo">
            <div class="menu">
                <nav class="bar">
                    <ul class="leftbar">
                        <li><a href="/" class="btnbar"><i class="fa-solid fa-house"></i>Home</a></li>
                        <li><a href="/produk" class="btnbar">Produk</a></li>
                        <li><a href=" " class="btnbar">Kategori<i class="fa-solid fa-angle-down"></i></a>
                            <ul class="dropdown">
                                <li><a href="/smartphone" class="btnbar">Smartphone</a></li>
                                <li><a href="/laptop" class="btnbar">Laptop</a></li>
                            </ul>
                        </li>
                        <li><a href="/kalkulator" class="btnbar"><i class="fa-solid fa-calculator"></i>Kalkulator</a></li>
                        <li><a href="/watchlist" class="btnbar">Watchlist</a></li>
                        <li><a href="/form" class="btnbar"><i class="fa-solid fa-note-sticky"></i>Form</a></li>
                        <li><a href="/gadget" class="btnbar">Gadget</a></li>
                    </ul>
                    <ul class="rightbar">
                        <li><a href="/profile" class="btnbar">Profile<i class="fa-solid fa-user"></i></a></li>
                        <li><a href="/admin" class="btnbar">Admin<i class=""></i></a></li>
                        <input type="checkbox" id="check">
                        <label for="check">
                            <i class="fa-solid fa-bars" id="btn"></i>
                            <i class="fa-solid fa-xmark" id="cancel"></i>
                        </label>
                        <div class="sidebar">
                            <header>Berita Populer</header>
                            <div class="beritapopuler">
                                <div class="search-container">
                                    <form action="">
                                        <input type="text" placeholder="Search..." name="search">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </div>
                                <hr>
                                <div class="beritanya">
                                    <p>
                                        [POPULER TREN] Spesifikasi Helikopter Tempur TNI AU | Syarat Mudik Lebaran 2022
                                        <p><a href="https://www.kompas.com/tren/read/2022/04/05/053000265/-populer-tren-spesifikasi-helikopter-tempur-tni-au-syarat-mudik-lebaran" class="link"> More Info </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="beritanya"> 
                                    <p>
                                        [POPULER GLOBAL]: Putin Disesatkan Penasihatnya Sendiri | Perbandingan Harga Bensin di Seluruh Dunia
                                        <p><a href="https://www.kompas.com/global/read/2022/04/01/053000470/populer-global--putin-disesatkan-penasihatnya-sendiri-perbandingan-harga" class="link"> More Info </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="beritanya">
                                    <p>
                                        [POPULER TREN] 10 Negara dengan Militer Terkuat di Dunia 2022 | Video Penumpang Merokok di Toilet Kereta Api
                                        <p><a href="https://www.kompas.com/tren/read/2022/03/28/053423765/populer-tren-10-negara-dengan-militer-terkuat-di-dunia-2022-video-penumpang" class="link"> More Info </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="beritanya">
                                    <p>
                                        [POPULER SAINS] Bakteri Pemakan Plastik | Indikator Pandemi Menjadi Endemi | Thailand Masuki Status Endemi

                                        <p><a href="https://www.kompas.com/sains/read/2022/03/26/084400223/-populer-sains-bakteri-pemakan-plastik-indikator-pandemi-menjadi-endemi" class="link"> More Info </a>
                                    </p>
                                </div>
                                <hr>
                                <div class="beritanya">
                                    <p>
                                        [POPULER MONEY] Nasib Uang Korban Indra Kenz dan Doni Salmanan | Harga Emas Antam Anjlok Rp 26.000

                                        <p><a href="https://money.kompas.com/read/2022/03/11/060000126/-populer-money-nasib-uang-korban-indra-kenz-dan-doni-salmanan-harga-emas-antam" class="link"> More Info </a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </ul>
                </nav>
            </div>
        </header>
        <section> 
            <div>
                @yield('container');
            </div>
        </section>
        @include('footer')
        
    </body>
</html>