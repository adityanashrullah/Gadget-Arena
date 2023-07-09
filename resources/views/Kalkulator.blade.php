@extends('layout/main')

@section('container')
<body>
        <div class="calculator">
            <label class="titlecalculator">KALULATOR</label>
            <form name="form">
                <input class="textarea" name="textarea">
            </form>
            <hr class="linecalculator">
            <table>
                <tr>
                    <td><input  class="button" type="button" value="C" onclick="clean()"></td>
                    <td><input class="button" type="button" value="/" onclick="insert(' / ')"></td>
                    <td><input class="button" type="button" value="X" onclick="insert(' * ')"></td>
                    <td><input class="button" type="button" value="&larr;" onclick="back()"></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="7" onclick="insert(7)"></td>
                    <td><input class="button" type="button" value="8" onclick="insert(8)"></td>
                    <td><input class="button" type="button" value="9" onclick="insert(9)"></td>
                    <td><input class="button" type="button" value="%" onclick="insert(' % ')"></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="4" onclick="insert(4)"></td>
                    <td><input class="button" type="button" value="5" onclick="insert(5)"></td>
                    <td><input class="button" type="button" value="6" onclick="insert(6)"></td>
                    <td><input class="button" type="button" value="-" onclick="insert(' - ')"></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="1" onclick="insert(1)"></td>
                    <td><input class="button" type="button" value="2" onclick="insert(2)"></td>
                    <td><input class="button" type="button" value="3" onclick="insert(3)"></td>
                    <td><input class="button" type="button" value="+" onclick="insert(' + ')"></td>
                </tr>
                <tr>
                    <td><input class="button" type="button" value="." onclick="insert(' . ')"></td>
                    <td><input class="button" type="button" value="0" onclick="insert(0)"></td>
                    <td><input class="button" type="button" value="00" onclick="insert(00)"></td>
                    <td><input class="button" type="button" value="=" onclick="hasil()"></td>
                </tr>
            </table>
        </div>
        <script src="{{asset('/js/script.js')}}"></script>
    </body>
@endsection