<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>All Data</title>
</head>
<body>   
    <div class="row">

        <div class = "col-md-2 ">    
            
        </div>

        <div class = "col-md-4 ">    
            <table class="table table-bordered">
                    <tbody>
                    <?php if(!empty($result)){ foreach ($result as $r) { ?>
                        <tr>
                           
                            <td><center><?php echo  $r['data']; ?></center></td>
                            
                        </tr>
                    <?php } } ?>
                    </tbody>
            </table>
            <a href="<?php echo  base_url('index.php/stack_con/delete'); ?>" ><button type="button" class="btn btn-danger delete" >OK</button></a>
        </div>   
    </div>

</div>
  



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<!-- <script>


</script> -->
<script type="text/javascript">
$(document).ready(function(){
    $('.delete').click(function(){
       if(!confirm("Sure?")){
           return false;
       } 
    });
});  
</script>