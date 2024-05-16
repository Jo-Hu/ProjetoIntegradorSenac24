<?php include('layout\header.php'); ?>
<?php include_once('..\model\dbcon.php')?> 

  
    
<!-- SPAN - Cadastro palavra -->
  <div class="col-md-12" style="padding:10px 10px 10px 10px; border-radius: 50px">
      <span style="background-color: #D6EAF8; border-radius:20px; padding: 10px;">Cadastro de fármacos:</span>          
  </div>
<!-- Forms -->
  <div class="col-md-12">
    <form action="..\controller\post_data.php" method="post">
      <div class="row">              
          <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 20px 20px;">
          <!-- Nome comercial -->
            <input type="text" name="nome_comercial" placeholder="Nome comercial" class="form-control">
          </div>    
          <!-- Preço -->
            <input type="number" name="preco" placeholder="Preço" class="form-control" 
            style="margin-left: 20px; width: 100px;">
        </div>            
      
                  
<!-- Botões -->
    <div class="col-md-12" style="font-size: 14px; font-weight: 200; padding: 20px 20px 10px 20px; text-align: center;">
      <a class="btn btn-primary" href="index.php" role="button">Voltar</a>
      <input type="submit" class="btn btn-success" name="add_cadastro" value="Cadastrar"></a>                  
    </div>
                
                          
    </form>
  </div>     
 

  <?php include('layout\footer.php'); ?> 
