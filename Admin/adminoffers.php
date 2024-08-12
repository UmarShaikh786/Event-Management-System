<head>




</head>
<form action="" autocomplete="off" method="POST" enctype="multipart/form-data" >

  <div class="container1">
    <div class="content">
      <div class="user-details">
      

        
        <div class="input-box" style="margin-left:150px;margin-top:-5px">
          <span class="details">Offer Name</span>
          <input type="text" placeholder="Enter Offer name" id="name" required>
        </div>

        <div class="input-box" style="margin-left:450px;margin-top:-95px">
          <span class="details">Offer Budget</span>
          <input type="text" placeholder="Enter Offer Budget " id="price" required>
        </div>
        
        <div class="form-group" style="margin-left:750px;margin-top:-60px;">
          <button type="button"  class="btn btn-success" style="height:40px; width:150px" onclick="submitData('insert',id);">Add Offer</button>
        </div>

      </div>
    </div>
  </div>
</form>

<script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>
<script type="text/javascript">
  function submitData(action,id){
    $(document).ready(function(){
      var name = $('#name').val();
      var price = $('#price').val();
      
     
      var fd = new FormData();
      fd.append("name",name);
      fd.append("price",price);
      fd.append("action",action);
      fd.append("id",id);
      $.ajax({
        url: 'CRUD_ON_OFFERS.php',
        type: 'post',
        data: fd,
        processData: false,
        contentType: false,
        success:function(response){
          alert(response);
          showoffers();
          if(response == "Deleted Successfully"){
            $("#"+action).css("display", "none");
          }
        }
      });
    });
  }
</script>









<script src="https://kit.fontawesome.com/90fdf3b52f.js1" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css1" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<h1>Offers Table</h1>
<table class="table table-striped  table-hover table-bordered table align-middle">
  <tr class="table table-dark">
    <th>No </th>
    
    <th>Name</th>
    <th>Budget</th>
    <th>DELETE</th>
  </tr>

  <?php
  require("connection.php");
  $sql = "select * from Offers";
  $rs = mysqli_query($conn, $sql);

  while ($rec = mysqli_fetch_row($rs)) {
    ?>

    <tr style="text-align:justify;">
      <td>
        <?php echo $rec[0] ?>
      </td>
       <td>
        <?php echo $rec[1] ?>
      </td>
      <td>
        <?php echo $rec[2] ?>
      </td>
      <td><button type ="button" class="btn btn-danger" onclick="submitData('delete',<?php echo $rec[0] ?>);">Delete</button> </td>
    </tr>
    <?php
  }

  ?>
</table>


</div>



<style>
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
  }

  body {
    height: 110vh;
    justify-content: center;
    align-items: center;
    padding: 10px;

  }

  .container1 {
    margin-left: 15px;
    margin-top: 20px;
    margin-bottom: 40px;
    max-width: 100%;
    max-height: 400px;
    width: 1400px;
    height: 150px;
    background-color: #fff;
    padding: 25px 30px;
    border-radius: 5px;
    box-shadow: 0 5px 10px rgba(0, 0, 0, 0.15);
  }

  .container1 .title {
    font-size: 25px;
    font-weight: 500;
    position: relative;
  }

  .container1 .title::before {
    content: "";
    position: absolute;
    left: 250px;
    bottom: -5px;
    height: 3px;
    width: 35px;
    border-radius: 5px;
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }

  .content form .user-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
  }

  form .user-details .input-box {
    margin-bottom: 15px;
    width: calc(100% / 5 - 20px);
  }

  form .user-details .input-box1 {
    margin-bottom: 15px;
    width: calc(100%);
  }

  form .input-box span.details {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
    font-size: 20px;
  }

  .user-details .input-box input,
  select {
    height: 45px;
    width: 100%;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
  }

  .user-details .input-box textarea {

    height: 50px;
    width: 500px;
    outline: none;
    font-size: 16px;
    border-radius: 5px;
    padding-left: 15px;
    border: 1px solid #ccc;
    border-bottom-width: 2px;
    transition: all 0.3s ease;
  }

  .user-details .input-box input:focus,
  .user-details .input-box input:valid {
    border-color: #9b59b6;
  }

  form .gender-details .gender-title {
    font-size: 20px;
    font-weight: 500;
  }

  form .category {
    display: flex;
    width: 80%;
    margin: 14px 0;
    justify-content: space-between;
  }

  form .category label {
    display: flex;
    align-items: center;
    cursor: pointer;
  }

  form .category label .dot {
    height: 18px;
    width: 18px;
    border-radius: 50%;
    margin-right: 10px;
    background: #d9d9d9;
    border: 5px solid transparent;
    transition: all 0.3s ease;
  }

  #dot-1:checked~.category label .one,
  #dot-2:checked~.category label .two,
  #dot-3:checked~.category label .three {
    background: #9b59b6;
    border-color: #d9d9d9;
  }

  form input[type="radio"] {
    display: none;
  }

  form .buttonreg {
    height: 45px;
    margin: 35px 0
  }

  form .buttonreg input {
    height: 50px;
    width: 150px;
    border-radius: 5px;
    border: none;
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    font-size: 18px;
    font-weight: 500;
    letter-spacing: 1px;
    cursor: pointer;
    transition: all 0.3s ease;


  }

  form .buttonreg input:hover {
    /* transform: scale(0.99); */
    background: linear-gradient(135deg, #71b7e6, #9b59b6);
  }

  @media(max-width: 584px) {
    .container {
      max-width: 100%;
    }

    form .user-details .input-box {
      margin-bottom: 15px;
      width: 100%;
    }

    form .category {
      width: 100%;
    }

    .content form .user-details {
      max-height: 300px;
      overflow-y: scroll;
    }

    .user-details::-webkit-scrollbar {
      width: 5px;
    }
  }

  @media(max-width: 459px) {
    .container1 .content .category {
      flex-direction: column;
    }
  }
</style>