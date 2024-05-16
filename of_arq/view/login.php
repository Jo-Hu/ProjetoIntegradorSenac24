<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 


 <body>
    
  <!-- O form de login é meramente ilustrativo -->
    <div class="container-fluid" style="border-radius: 20px;">
      <div class="row" style="padding-top: 10%;">                 
        <div class="col-md-12">
            <!-- Forms -->
            <div class="col-md-12">
             <form action="" method="">
              <div class="row">              
                <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px;">
                  <!-- E-mail -->
                  <input type="email" name="nome_comercial" placeholder="funcionario@email.com" class="form-control">
                </div>    
                <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px;">
                   <input type="password" name="senha" placeholder="123456" class="form-control">
                </div>         
                
        </div>                                       
        
             
                                                    <!-- Botões -->
            <div class="box1" style="text-align: center; background-color: #FDFEFE; border-radius: 20px; padding-top=30px">             
            <a class="btn btn-primary" href="index.php" role="button">Consultar Banco de Dados</a>    
                             
            </div>
            
                
              </div>              
             </form>
            </div>
            
          </div>
        </div>  
        </div>
    </div>


          
<?php include('layout\footer.php'); ?>  