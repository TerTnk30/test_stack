<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<title>Stack Simulators</title>
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
        </div>
        
        <div class="btn-group-vertical">
            <div class="col-md-8 offset-md-10">
            
            <a href="<?php echo  base_url('index.php/stack_con/show'); ?>"><button type="button" class="btn btn-danger" >pop</button></a>
            
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" >push</button>
            
            <a href="<?php echo  base_url('index.php/stack_con/insert'); ?>"><button type="button" class="btn btn-warning">insertAt</button></a>
     
            </div>
        </div>
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content"> 

                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">New Data</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                    </div>

                    <div class="modal-body">
                        <form role="form" action="<?php echo base_url('index.php/stack_con/newdata'); ?>" method="post" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="recipient-name" class="col-form-label">Data :</label>
                                <input type="text" class="form-control" id="data" name="data">
                            </div>
                        
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
        
    </div>

    
</div>
  



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
<!-- <script>


</script> -->
