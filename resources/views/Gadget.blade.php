@extends('layout/main')

@section('container')
<style>
    .tablenya{
        width : 100%;
        border:1px solid black;
    }
    .header {
        padding: 10px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 20px;
    }
 
    h2{
        margin-top: -10px;
    }
    h4{
        text-align: center;
        width: 70%;
        margin-left: 200px
    }
    .tablePromo{
        width: 50%;
        margin-left: auto; 
        margin-right: auto;
    }
    .promo{
        color: white;
        font-size: 20px;
        line-height: 50px;
    }
    .bgPromo{
        height: 50px;
        background-color: red;
    }
    .daftarPromo{
        margin-top: 5px;
        margin-left: auto;
        margin-right: auto; 
        margin-bottom : 10px;
        width: 20%;
        height: 30px;
        border: 2px solid red;
        padding: 10px;
    }
    .footer label{
        color: white;
        display: block;
    text-align: center;
    line-height: 150%;
  
    }
    .footer{
        margin-top: 20px;
        padding: 2px;
        background-color: blue;
    }
</style>
<?php
    //1. Buat 1 parent class yang berisikan 2method.
    class GadgetArena{
        var $jenis;
        var $merek;
        var $harga;
        var $tahun;

        public function JenisGadget(){
            echo "<table class=tablenya>
                <tr>
                    <td>Jenis</td>
                    <td>: $this->jenis</td>
                </tr>
                <tr>
                    <td>Merek</td>
                    <td>: $this->merek</td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td>: $this->harga</td>
                </tr>
                <tr>
                    <td>Tahun</td>
                    <td>: $this->tahun</td>
                </tr>
            </table>";
        }

        public function info(){
            echo "Gadget Arena menyediakan banyak refrensi seputar gadget-gadget terbaru mulai dari laptop,smartphone dan lainnya, 
            Gadget Arena sebagai wadah pertimbangan konsumen terhadap produk yang ingin dibeli atau hanya mencari refrensi";
        }
    }

    $GA1 = new GadgetArena();
    $GA1->jenis = "Laptop";
    $GA1->merek = "ASUS Zenbook";
    $GA1->harga = "Rp. 17.000.000";
    $GA1->tahun = "2022";

    $GA2 = new GadgetArena();
    $GA2->jenis = "Laptop";
    $GA2->merek = "ASUS Vivobook";
    $GA2->harga = "Rp. 9.000.000";
    $GA2->tahun = "2022";

    $GA3 = new GadgetArena();
    $GA3->jenis = "Smartphone";
    $GA3->merek = "Samsung A52";
    $GA3->harga = "Rp. 5.000.000";
    $GA3->tahun = "2021";

    $GA4 = new GadgetArena();
    $GA4->jenis = "Smartphone";
    $GA4->merek = "Iphone 12";
    $GA4->harga = "Rp. 13.000.000";
    $GA4->tahun = "2021";
    

    //2. Buat 1 abstract class yang berisikan 2 abstract method.
    abstract class Promo{
        var $via;
        var $alamat;
        var $periode;
        abstract public function Laptop();
        abstract public function Smartphone();        
    }

    //3. Buat 1 child class yang mengextend abstract class yang telah dibuat. 
    class Info extends Promo{
        function Show_Data(){
            echo "<table id=tableP>
                <tr>
                    <td>Via Pembelian</td>
                    <td>: $this->via</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>: $this->alamat</td>
                </tr>
                <tr>
                    <td>Periode</td>
                    <td>: $this->periode</td>
                </tr>
                </table>";
        }

        public function Laptop(){
            echo "Hari ini produk laptop terdapat promo";
        }

        public function Smartphone(){
            echo "Hari ini produk smartphone terdapat promo";
        }
    }

    $INFO1 = new Info();
    $INFO1->via = "Online (Shopee)";
    $INFO1->alamat = "Malang";
    $INFO1->periode = "20 Mei - 20 Juni 2022";

    $INFO2 = new Info();
    $INFO2->via = "Online (Tokopedia)";
    $INFO2->alamat = "Jakarta";
    $INFO2->periode = "20 Mei - 20 Juni 2022";
   

    //4. Buat trait untuk masing-masing abstract method yang telah dibuattadi.
    trait Gadget{
        abstract public function Laptop();
        abstract public function Smartphone();  
    }

    class Pengumuman{
        var $daerah = "Khusus Daerah Jakarta, Area Jawa dan sekitarnya";
        use Gadget;
        public function Laptop(){
            echo "Buruan jangan sampai ketinggalan promo laptopnya dan ";
        }
        public function Smartphone(){
            echo "promo smartphone yang sangat gokil, jangan sampai ketinggalan yaaa...";
        }


    }
    $GG1 = new Pengumuman();


?> 

<html>
    <head></head>
    <body>
        <div class="header">
            <h1>Welcome To Gadget Arena</h1>
            <h4><?php $GA1->info() ?></h4>
        </div>
        <table class="tablenya">
            <tr>
                <td><img src="zenbook.jpg" alt="" width="300" ></td>
                <td><img src="vivobook.jpg" alt="" width="300" ></td>
                <td><img src="a52.jpg" alt="" width="300" ></td>
                <td><img src="iphone12.jpg" alt="" width="300" ></td>
            </tr>
            <tr>
                <td><?php $GA1->JenisGadget() ?></td>
                <td><?php $GA2->JenisGadget() ?></td>
                <td><?php $GA3->JenisGadget() ?></td>
                <td><?php $GA4->JenisGadget() ?></td>
            </tr>
        </table>
        
        <table class="tablePromo">
            <div class="bgPromo"><h4 class="promo">* Promo</h4></div>
            <div class="daftarPromo">
                <label for=""><?php $INFO1->Laptop() ?></label>
                <br>
                <label for=""><?php $INFO1->Smartphone() ?></label>
            </div>
             
                <tr>
                    <td><?php $INFO1->Show_Data() ?></td>
                    <td><?php $INFO2->Show_Data() ?></td>
                </tr>
        </table>
        <div class="footer">
            <label for=""><?php $GG1->Laptop()?></label>
            <label for=""><?php $GG1->Smartphone()?></label>
            <label for=""><?php echo "$GG1->daerah" ?></label>
        </div>
        
    </body>
</html>
@endsection