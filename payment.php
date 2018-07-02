<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include('./config/block.php')
    ?>
<head>
    <meta charset="UTF-8">
    <title>Happy Belly</title>
    <!--    boostrap css-->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

    <!--    custom-->
    <link rel="stylesheet" href="./css/order.css">

    <!-- Favicon-->
    <link rel="icon" href="./favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">
    <!-- <script type="text/javascript" src="./js/axios.min.js"></script> -->
    <script type="text/javascript" src="./bootstrap/js/jquery.js"></script>

    <script type="text/javascript" src="./bootstrap/js/bootstrap.js"></script>
    <!--    bootstrap-->
<!--
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
-->

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:orange">
      <a href="index.php"><img src="./images/logo.PNG" alt="Logo" class="navbar-brand" height="65" width="65"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            &nbsp;
        </ul>
        <div class="btn-group float-right"  style="margin-right : 5%;">
             <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal">Add Menu</button>
            <button class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Edit Menu</button>
              <button type="button" class="btn btn-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <?php
                  echo $_SESSION['usernamedb'];
                  ?>
              </button>
              <div class="dropdown-menu">
               <?php
                  if($_SESSION["admin"]==1){
                      echo "<a class='dropdown-item' href='.\admin\index.php'>Admin page</a>";
                  }
                  ?>
                <a class="dropdown-item" href="./action/logout.php">Logout</a>
              </div>

              <!-- Modal -->
               <script>
                       function readURL(input) {
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();

                            reader.onload = function (e) {
                                $('#imageemergency')
                                    .attr('src', e.target.result).width(300)
                                        .height(200);
                            };

                            reader.readAsDataURL(input.files[0]);
                        }
                    }
                       </script>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Menu</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
<!--                      form-->
                      <form action=".\action\cekmenu.php" method="post" id="uploadimage" enctype="multipart/form-data">

                      <div class="modal-body">
                        <div class="form-group">
                           <label for="1">Product Code</label>
                            <input type="text" class="form-control" name="produkcode" placeholder="enter Product Code" id="1" required>
                        </div>
                        <div class="form-group">
                            <label for="2">Product Name</label>
                            <input type="text" class="form-control" name="produkname" placeholder="enter product name" id="2" required>
                        </div>
                        <div class="form-group">
                            <label for="4">Select Category</label>
                            <select name="selcate" id="4" class="form-control" >
                               <?php
                                    include "./config/connection.php";

                                    $sql = "select * from iamproduk";
                                    $query = mysqli_query($conn,$sql);

                                while($row = mysqli_fetch_array($query))
                                {
                                    ?>
                                    <option value="<?php echo $row["KODE_PRODUK"]; ?>"><?php echo $row["NAMA_PRODUK"];?></option>

                                    <?php
                                }

                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="./category.php"><button type="button" class="btn btn-primary" data-dismiss="modal" onclick="location.href='category.php' ">New Category</button></a>
                        </div>
                        <div class="form-group">
                            <label for="22">Product price - Rp</label>
                            <input type="number" class="form-control" name="produkprice" placeholder="enter product Price" id="22" required>
                        </div>
                        <div class="form-group">
                            <label for="23">Product Unit</label>
                            <input type="text" class="form-control" name="produkunit" placeholder="(pcs,bowl,pack, etc)" id="23" required>
                        </div>
                        <div class="form-group">
                        <label for="3">Kode Department</label>
                        <input type="text" class="form-control" id="3" name="kodedepartemen" placeholder="enter kode departemen" value="00" required readonly>
                          </div>
                        <div class="form-group">
                               <img src="./images/images.jpg" id="imageemergency" width="300px" height="200px">

                            </div>
                            <div class="form-group">
                                <input type="file" name="fileToUpload" id="fileToUpload"  onchange="readURL(this);" required>
                            </div>
                            <div class="form-group">
                              <?php
                                      if($_SESSION["error"]==null){
                                          $_SESSION["error"]="";
                                      }
                                      else if($_SESSION["error"]!=""){
                                      echo '<p>'.$_SESSION["error"].'</p>'."<script type='text/javascript'>
                                        $('#exampleModal').modal('show')

                                      </script>";
                                          $_SESSION["error"]="";
                                      }
                                      ?>
                                </div>
                          </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <input  name="submit" type="submit" id="save" class="btn btn-primary" value="Add" tabindex="11">
                      </div>
                        </form>
<!--                      end form-->
                    </div>
                  </div>
                </div>
<!--                end of modal-->
            </div>
      </div>
    </nav>
    <!-- #Top Bar -->
<!--
    <div class="wrapper item">
       <div class="menureceipt">
           <button type="button" class="btn btn-default waves-effect m-r-20" data-toggle="modal" data-target="#defaultModal" style="float:right;margin-top:-30px;">+</button>
            <div class="catalog" style="margin-top:10px;">
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxitem">
                    &nbsp;
                </div>
                <div class="boxadd">
                    <img src="./images/add.png" class="additemimage" >
                 </div>
            </div>
        </div>
        <div class="receipt">
            <div class="receipt-data">
               <div class="checkoutdata">
                   <p>dara</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
                   <p>jaka</p>
               </div>
                <div class="checkout">
                    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-print"> Check Out</button>
                </div>
            </div>
        </div>

    </div>
-->
    <div class="row">
        <div class="col-md-7">
            <form action=".\action\addpenjualan.php" method="post">
                      
                <div class="form-group">
                            <label for="4">Select Payment</label>
                            <select name="selectpayment" id="4" class="form-control" >
                                    <option value="CASH">CASH</option>
                                    <option value="Credit Cart">Credit Card</option>
                                <option value="Credit Cart">Debit Card</option>
                            </select>
                        </div>
                 <div class="form-group">
                        <label for="exampleInputEmail1">Bank Name</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bank Name" name="bankname" value="">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                <div class="form-group">
                        <label for="exampleInputEmail1">Bank Additional Info(optional)</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Bank Additional Info (Optional)" name="bankname" value="">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Discount</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Discount" name="extra2" value="0">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Total</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Total" name="extra2" value="" readonly>
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Payment Amount</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 2" name="extra2" value="0">
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1">Return Amount</label>
                        <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Extra Category 2" name="extra2" value="0" readonly>
<!--                        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                      </div>
                    <div class="modal-footer" style="width:100%;">
                        <a href="orders.php"><button type="button" class="btn btn-secondary" data-dismiss="modal" style="width:200px;">Back</button></a>
                        <input  name="submit" type="submit" id="save" class="btn btn-primary" value="Pay and Print" style="width:200px;" tabindex="11">
                      </div>
                    </form>
        </div>

        <div class="col-md-4" style="border : 4px solid orange; border-radius: 5px;">
             <div class="checkoutdata">

                  <div class="menu-head">
                     <img src="./images/logo.PNG" width="150" height="150">
                     <p>Let's Happy Bellying!<br>Frying now @ Brastagi Tiara<br>Operation Hours(Daily):<br>10:00 a.m - 10:00 p.m</p>
                      <hr style="border-top: dashed 2px;margin:0;">
                      <hr style="border-top: dashed 2px;margin-top:5px;">
                     <p style="text-align:left;">
                        Order No : nomor<br>
                        Date : <?php
                            echo date("d/m/Y");?>&nbsp;<?php
                            echo date("h:i a");
                            ?><br>
                         Transaction By: <?php echo $_SESSION['username'] ; ?>
                     </p>

                      <div class="table-responsive">          
                          <table class="table">
                            <thead  style="margin-bottom:5px;">
                              <tr>
                                <th style="padding:0;border: none;">No</th>
                                <th style="padding:0;text-align:left;border: none;" >Description</th>
                                <th style="padding:0;text-align:right;border: none;">Amt (Rp.)</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td style="padding:0;border: none;">&nbsp</td>
                                <td style="padding:0;text-align:left;border: none;" >&nbsp</td>
                                <td style="padding:0;text-align:right;border: none;">&nbsp</td>
                              </tr>
                                <tr>
                                <td style="padding:0;border: none;">1</td>
                                <td style="padding:0;text-align:left;border: none;" >Anna</td>
                                <td style="padding:0;text-align:right;border: none;">Pitt</td>
                              </tr>
                                <tr>
                                <td style="padding:0;border: none;">1</td>
                                <td style="padding:0;text-align:left;border: none;" >Anna</td>
                                <td style="padding:0;text-align:right;border: none;">Pitt</td>
                              </tr>
                            </tbody>
                          </table>
                          </div>
                      <hr style="border-top: dashed 2px;margin-top:2px;">
                      <p style="text-align:left;">
                        Subtotal (item qty)
                        <span style="float:right;">Value Price</span>
                     </p>
                      <hr style="border-top: dashed 2px;margin-top:2px;">

                    <p style="text-align:left;margin-left:15%;">
                        <span style="font-size:25pt">Total
                        <span style="float:right;">Value Price</span></span><br>
                        Cash
                        <span style="float:right;">25,000</span><br>
                        Amt Due
                        <span style="float:right;">0</span>
                     </p>

                     <hr style="border-top: dashed 2px;margin-top:5px;">

                     <p style="text-align:center;">
                        Cater for office meeting , event birthday<br>
                         Please contact us :<br>
                         WA : 085922380750<br>
                         Line : happybellying<br>
                         Instagram : happybellying<br>
                     </p>
                  </div>

               </div>
            </div>
        </div>
</body>

<script type="text/javascript">
$( "#addMenu" ).click(function() {
  var test = $("#namastock").val();
  for (var x in test)
  {
    alert(x);
  }
  $.ajax({
    url : "./action/cekcheckout.php",
    type : "POST",
    data : test
    success : function(response) {
      if(response.status == 4)
      {
        alert(response.status);
      }
    }
  })


</script>

</html>

                
                
                           
                      