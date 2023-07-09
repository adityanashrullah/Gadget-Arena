$(document).ready(function(){
   
    $('#bodyform').css({
        'margin':'auto',
        'margin-top' : '80px',
        'margin-bottom' : '200px',
        'width' : '1000px',
        'heigth' : '500px'
    });
    
    $('table').css({
        'border-collapse' : 'collapse',
        'width' : '100%'
    });

    $('#bgColumn').css({
        'background-color':'#55ffd4' 
    });

    $('th').css({
        'border' : '1px solid #dddddd',
        'text-align' : 'left',
        'padding' : '8px',
        'text-align' : 'center'
    });

    $('td').css({
        'border' : '1px solid #dddddd',
        'text-align' : 'left',
        'padding' : '8px',
    })

    $(function(){
        $('#btn-add').click(function(){
            
            var _title = $('#title').val();
            var _rating = $('#rating').val();
           

            var _tr = '<tr> <td>'+_title+'</td> <td>'+_rating+'</td> <td>'+'<button class="btn-delete">Delete</button>'+'</td> </tr>';
            $('tbody').append(_tr);

            $('td').css({
                'border' : '1px solid #dddddd',
                'text-align' : 'left',
                'padding' : '8px',
            });

        });

        $(document).on('click','.btn-delete', function(){
            $(this).closest('tr').remove();
        });

        $('th').click(function(){
            var table = $(this).parents('table').eq(0)
            var rows = table.find('tr:gt(0)').toArray().sort(comparer($(this).index()))
            this.asc = !this.asc
            if (!this.asc){rows = rows.reverse()}
            for (var i = 0; i < rows.length; i++){
                table.append(rows[i])
            }
        })

        function comparer(index) {
            return function(a, b) {
                var valA = getCellValue(a, index), valB = getCellValue(b, index)
                return $.isNumeric(valA) && $.isNumeric(valB) ? 
                valA - valB : valA.toString().localeCompare(valB)
            }
        }
        
        function getCellValue(row, index){
            return $(row).children('td').eq(index).text() 
        }

        $('#search').css('margin-left','420px')
        $('#search').on("keyup",function(){
            var value = $(this).val().toLowerCase();
            $('tbody tr').filter(function(){
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            })
        })
    });
});

