@extends('layout/main')

@section('container')
    <div class="bgform">
        <form action="">
            <div class="bodyform">
            <?php
                $nama = $_POST['Nama'];
                $email = $_POST['Email'];
                $jk = $_POST['JK'];
                $deskripsi = $_POST['Deskripsi']; 
                function Favorite(){
                    $favorit = $_POST['Favorit'];
                    if(empty($favorit)){
                        echo "Tidak Boleh Kosong !";
                    }else{
                        $value = count($favorit);
                        
                        for($i=0; $i<$value; $i++){
                            echo $favorit[$i]. ", ";
                        }
                    }
                }
                
                
                echo "<table>
                    <p>Data Form</p>
                    <br>2
                    <tr>
                        <td>Nama</td>
                        <td> : $nama</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td> : $email</td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td> : $jk</td>
                    </tr>
                    <tr>
                        <td>Favorit</td>
                        <td> : ",Favorite(),"</td>
                    </tr>
                    <tr>
                        <td>Deskripsi</td>
                        <td>  : $deskripsi</td>
                    </tr>
                </table>";  
            ?> 
            </div>
        </form>
    </div>

@endsection
