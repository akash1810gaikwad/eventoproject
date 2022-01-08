<?php
session_start();
if(!isset($_SESSION['first'])){
    header('location:cod.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>recipt
    </title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<style >
  a{
    font-size: 30px;
  }
</style>
     
    </head>
<body background="images/bg_images/13.jpeg">

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body p-0">
                    <div class="row p-5">
                        <div class="col-md-6">
                            <img src="images/logo.png" style="background: black">
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-1">Invoice #550</p>
                            <p class="text-muted">Due to: 4 Dec, 2019</p>
                        </div>
                    </div>

                    <hr class="my-5">

                    <div class="row pb-5 p-5">
                        <div class="col-md-6">
                            <p class="font-weight-bold mb-4">Client Information</p>
                            <p class="mb-1"><?php echo $_SESSION['first'];?> &nbsp;<?php echo $_SESSION['last'];?>, </p>
                            <p class="mb-1"><?php echo $_SESSION['city'];?>, <?php echo $_SESSION['state'];?>.</p>
                            <p class="mb-1"><?php echo $_SESSION['contact'];?></p>
                        </div>

                        <div class="col-md-6 text-right">
                            <p class="font-weight-bold mb-4">Payment Details</p>
                            <p class="mb-1"><span class="text-muted">VAT: </span> 1425782</p>
                            <p class="mb-1"><span class="text-muted">VAT ID: </span> 10253642</p>
                            <p class="mb-1"><span class="text-muted">Payment Type: </span> optional</p>
                            <p class="mb-1"><span class="text-muted">Name: </span> <?php echo $_SESSION['first'];?> &nbsp;<?php echo $_SESSION['last'];?></p>
                        </div>
                    </div>

                    <div class="row p-5">
                        <div class="col-md-12">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="border-0 text-uppercase small font-weight-bold">ID</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Item</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Quantity</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Unit Cost</th>
                                        <th class="border-0 text-uppercase small font-weight-bold">Total</th>
                                      
                                    </tr>
                                </thead>
                                <tbody>
                        <tr>
                          <td>1</td>
                            <td>
                              <em>
                                <?php 
                             {  
                                 $event = $_GET['event'];
                                 echo "".$event;   
                                  }  
                                     ?>
                             </em>
                         </td>&nbsp;
                            <td >   
                                    <?php                           
                             {  
                                 $number2 = $_GET['number2'];
                                 echo "".$number2;   
                                  }  
                                     ?>
                                 </td>
                            <td>    
                             <?php 
                             {  
                                 $number1 = $_GET['number1']; 
                                 echo "".$number1;  
                                  }  
                                    ?>
                            
                                     </td>
                                     <td>
                                       <?php  
                            
    if(isset($_GET['submit']))
   
    {  
        $a = $_GET['number1'];
        $b= $_GET['number2'];
        

echo "",$a*$b;   
} 
?> 
                                     </td>
                                     
                           
                        </tr>
                         </tbody>
                            </table>
                        </div>
                    </div>

                   <div class="d-flex flex-row-reverse bg-dark text-white p-4">
                        <div class="py-1 px-3 text-right">
                            <div class="mb-2">Grand Total</div>
                            <div class="h2 font-weight-light"><?php  
                            
                              if(isset($_GET['submit']))
   
                              {  
                                  $a = $_GET['number1'];
                                  $b= $_GET['number2'];
                                  

                           echo "",$a*$b+109;   
                           } 
                           ?></div>
                           <br>
                           <a href="payment_option.html">Payment</a>&nbsp;&nbsp;&nbsp;<a href="index.html">Back</a>
                        </div>

                        <div class="py-2 px-3 text-right">
                            <div class="mb-2">Tax</div>
                            <div class="h2 font-weight-light">109

                            </div>
                        </div>

                        
                    </div>
                </div>
           </div>
        </div>
    </div>
</div>
                        
</body>  
</html>  