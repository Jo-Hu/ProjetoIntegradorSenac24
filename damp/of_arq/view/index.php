<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?>     

       
    <!-- Chamada para todos os produtos -->
    <div class="table-responsive" style="border-radius: 20px;">  
    <div style="padding-top:20px">
    <h7 style="background-color: #D6EAF8; border-radius:20px; padding: 05px;">TODOS OS FÁRMACOS:</h7>
    </div>   
       <div class="table-responsive">
        <table class="table table-sm table-hover table bordered table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome comercial</th>                                    
                    <th>Preço</th>                   
                </tr>
            </thead>            
            <tbody>
                <?php include_once('..\controller\get_data.php'); ?>
                
            </tbody>
        </table>
        </div>
                               
         <!-- Mensagens: -->
        <?php include_once('msgs.php');?>
       
         <!-- Botão: -->
        <div class="box1">             
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" >
            <a href="register.php">Inserir novo</a>
        </button>

     </div>  
<?php include('layout\footer.php'); ?> 