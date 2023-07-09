@extends('layout/main')

@section('container')
<?php
error_reporting(0);
    $nama = $email = $jk = $favorit = $deskripsi = "";
    $namaErr = $emailErr = $jkErr = $favoritErr = $deskripsiErr = "";
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['Nama'])){
            $namaErr = "* Nama harus di isi";
        }else{
            $nama = $_POST['Nama'];
        }

        if(empty($_POST['Email'])){
            $emailErr = "* Email harus di isi";
        }else{
            $Email = $_POST['Email'];
        }

        if(empty($_POST['JK'])){
            $jkErr = "* Jenis Kelamin harus di isi";
        }else{
            $jk = $_POST['JK'];
        }

        if(empty($_POST['Favorit'])){
            $favoritErr = "* Favorit harus di isi";
        }else{
            $favorit = $_POST['Favorite'];
        }

        if(empty($_POST['Deskripsi'])){
            $deskripsiErr = "* Deskripsi harus di isi";
        }else{
            $deskripsi = $_POST['Deskripsi'];
        }

        if(empty($namaErr) && empty($emailErr) && empty($jkErr) && empty($favoritErr)){
            include '/FormOutput';
        }
    }
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Akshar:wght@300&family=Montserrat:wght@400;700&display=swap');

.bgform{
    background:  linear-gradient(135deg,#00ff80,#020089);
    margin: auto;
    margin-top: 20px;
    margin-bottom: -20px;
    height: 700px;
    padding: 20px;
}
.bodyform{
    margin: 50px auto;
    max-width: 500px;
    padding: 40px;
    justify-content: center;
    box-sizing: border-box;
    font-family: 'Montserrat', sans-serif;
    background-color: white;
    box-shadow: 1px 1px 2px rgba(0, 0, 0, 0,125);
    border-radius: 3mm;
}

.bodyform .title{
    color: #020089;
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 35px;
    text-align: center;
}

.bodyform .form{
    width: 100%;
}

.bodyform .form .input{
    font-size: 18px;
    color: rgb(71, 71, 71);
    margin-top: 30px;
    display: flex;
    align-items: center;
}

.bodyform .form .input label{
    width: 100px;
    color: rgb(71, 71, 71);
    margin-right: 40px;
    font-size: 18px;
}

.bodyform .form .gender{
    margin-top: 30px;
}
.bodyform .form .gender label{
    color: rgb(71, 71, 71);
    font-size: 18px;
}


.bodyform .form .input input,
.bodyform .form .input textarea{
    width: 70%;
   
}
.bodyform .form .input textarea{
    resize: none;
}

.bodyform .form .input .btn{
    width: 120px;
    height: 40px;
    padding: 8px 10px;
    font-size: 16px;
    border: 0;
    background: #020089;
    color: white;
    margin-left: 100px;
    margin-top: 10px;
    transform: translateX(50%);
    left: 50%;
    right: 50%;
    cursor: pointer;
}

.error{
    color: red;
    font-size: 14px;
}
</style>

    <div class="bgform">
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="bodyform">
                <div class="title">GADGET ARENA</div>
                <div class="form">
                    <div class="input">
                        <label for="">Nama</label>
                        <input type="text" class="inputstyle" name="Nama">
                    </div>
                    <span class="error"><?php echo $namaErr; ?></span>
                    <div class="input">
                        <label for="">Email</label>
                        <input type="text" inputstyle name="Email">
                    </div>
                    <span class="error"><?php echo $emailErr; ?></span>
                    <div class="gender">
                        <label for="">Jenis Kelamin</label>
                        <label for=""><input type="radio" name="JK" value="Laki-laki" >Laki-laki</label>
                        <label for=""><input type="radio" name="JK" value="Perempuan" >Perempuan</label>
                    </div>
                    <span class="error"><?php echo $jkErr; ?></span>
                    <div class="input">
                        <label for="">Favorit</label>
                        <input type="checkbox" name="Favorit[]" id=""  value="Smartphone">Smartphone
                        <input type="checkbox" name="Favorit[]" id=""  value="Tablet">Tablet
                    </div>
                    <div class="input">
                        <label for=""></label>
                        <input type="checkbox" name="Favorit[]" id=""  value="Laptop">Laptop
                        <input type="checkbox" name="Favorit[]" id=""  value="Komputer">Komputer
                    </div>
                    <span class="error"><?php echo $favoritErr; ?></span>
                    <div class="input">
                        <label for="">Deskripsi</label>
                        <textarea name="Deskripsi" id="" cols="30" rows="5"></textarea>
                    </div>
                    <span class="error"><?php echo $deskripsiErr; ?></span>
                    <div class="input">
                        <input type="submit" class="btn" name="submit" id="">
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection