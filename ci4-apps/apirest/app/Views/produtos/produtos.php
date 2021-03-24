<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> home </title>

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {

            background-color: whitesmoke;
        }
    </style>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
  
<script>

          function confirma(){

            if (!confirm("Confirma a exclusão do registro?")){
                
                return false;

            }

            return true;
          }
</script>


</head>

<body>

    <p>

        <?php echo anchor('usuario/create', 'Novo Usuario', 'class="btn btn-success"'); ?>
    </p>
    <h3>Usuarios cadastrados</h3>

    <div class="container">


<div class="row"> 

<div class="col-md-12">

<table class="table">
    <thead class="thead-light">
        <tr id="tabhead">
            <th>id</th>
            <th>Produto</th> <!-- titulo -->
            <th>Cliente</th> <!-- nome -->
            <th>E-Mail</th>     
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($produtos as $produto): ?> 
 
<tr>


    <td> <?php echo $produto->id ?> </td>
    <td> <?php echo $produto->titulo ?> </td>
    <td> <?php echo $produto->cliente ?> </td>
    <td> <?php echo $produto->email ?> </td>
    <td> <?php echo anchor("produto/edit/"   . $produto->id, "Editar", "class='btn btn-success'") ?> 
         <?php echo anchor("produto/delete/" . $produto->id, "Deletar",'onclick="return confirma()" class="btn btn-danger" '); ?> </td>
</tr>

      <?php endforeach; ?>
    </tbody>
</table>
</div>

</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
</body>

</html>