<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cliente</title>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

</head>

<body>
    <!-- <p id="cinfo"> ...</p> -->

    <div id='conteudo'></div>
    <form>
        ID:
        <input type="text" name="cli_id" id="cli_id" value="">
        <br>
        <button name="bt_load" id="bt_load" class="btn btn-success">Adicionar</button>
    </form>



    <script>
        //      document.getElementById('bt_load').addEventListener('click' , function(e){
        //          e.preventDefault();
        //          alert('funcionando ok!');
        //      })

        $('#bt_load').click(function(e) {
            e.preventDefault();

            $.ajax({

                url: "<?php echo base_url(); ?>/usuario/ajaxGetUser/" + $('#cli_id').val(),
                cache: false,
                success: function(data) {

                    var vdata = Array.from(data);
                    console.log(data);
             

                    var linhas = vdata.map(function(cliente) {
                        var tdNome = $('<td>').html(cliente.nome);
                        var tdEmail = $('<td>').html(cliente.email);

                        return $('<tr>').append(tdNome, tdEmail);
                    });


                    var tabela = $('<table>').append(linhas).css('border', 'solid 0.5px');
                    $('#conteudo').append(tabela);

                }
            });

        })
    </script>

</body>

</html>