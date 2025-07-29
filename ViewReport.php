<?php
    session_start();
    error_reporting(0);
    // $auditno = $_POST['audit'];
    // $name = $_POST['hospitalname'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>

    <!-- Tab Icon -->
    <link rel="icon" href="images/icon.png" />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&family=Ubuntu:wght@300&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
      integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
      crossorigin="anonymous"
    />

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="css/ViewReport.css" />

    <!-- Fontawesome icons -->
    <script
      src="https://kit.fontawesome.com/d439574862.js"
      crossorigin="anonymous"
    ></script>

    <!-- Bootstrap Scripts -->
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
      integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
      crossorigin="anonymous"
    ></script>
</head>
<body>
    <div class="container">
      <div class="title">Audit Report</div>
      <div class="content">
    <form action="">
      <div class="audit-details">
            <div class="fields">
              <span class="details">Audit No:</span>
              <label for=""><?php echo $_SESSION['auditno'] ?></label>
            </div>
            <div class="fields">
              <span class="details">Name:</span>
              <label for=""><?php echo $_SESSION['name'] ?></label>
            </div>
             <div class="fields">
              <span class="details">Date:</span>
              <label for=""><?php echo date('d/m/Y') ?></label>
            </div>
            <div class="fields">
              <span class="details">Location:</span>
              <label for=""><?php  require_once('geoplugin.class.php');

              $geoplugin = new geoPlugin();

              //locate the IP
              $geoplugin->locate();

              echo $geoplugin->city?></label>
            </div>
             <div>
              <span style="margin-bottom:15px;" class="details">Audit Findings:</span>
              <table>
                <tr>
                  <th class="grey"></th>
                  <th class="grey"> Good</th>
                  <th class="grey"> Average</th>
                  <th class="grey"> Bad</th>
                </tr>
                <tr>
                  <td class="grey"><?php echo $_SESSION['subSector1'] ?></td>
                  <td><?php 
                  if($_SESSION['sec1score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec1score']>60 && $_SESSION['sec1score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec1score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                </tr>
                <tr>
                  <td class="grey"><?php echo $_SESSION['subSector2'] ?></td>
                  <td><?php 
                  if($_SESSION['sec2score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec2score']>60 && $_SESSION['sec2score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec2score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                </tr>
                <tr>
                  <td class="grey"><?php echo $_SESSION['subSector3'] ?></td>
                  <td><?php 
                  if($_SESSION['sec3score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec3score']>60 && $_SESSION['sec3score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec3score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                </tr>
                <tr>
                  <td class="grey"><?php echo $_SESSION['subSector4'] ?></td>
                  <td><?php 
                  if($_SESSION['sec4score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec4score']>60 && $_SESSION['sec4score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec4score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                </tr>
                <tr>
                  <td class="grey"><?php echo $_SESSION['subSector5'] ?></td>
                  <td><?php 
                  if($_SESSION['sec5score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec5score']>60 && $_SESSION['sec5score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                  <td><?php 
                  if($_SESSION['sec5score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  ?></td>
                </tr>
                <?php if($_SESSION['subSector6'] != NULL){
                     echo "<tr>
                  <td class='grey'>";
                   echo $_SESSION['subSector6']; 
                   echo "</td>
                  <td>";
                  if($_SESSION['sec6score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                  <td>" ;
                  if($_SESSION['sec6score']>60 && $_SESSION['sec6score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                  <td>" ;
                  if($_SESSION['sec6score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                </tr>";
                }
               ?>
                <?php if($_SESSION['subSector7'] != NULL){
                     echo "<tr>
                  <td class='grey'>";
                   echo $_SESSION['subSector7']; 
                   echo "</td>
                  <td>";
                  if($_SESSION['sec7score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                  <td>" ;
                  if($_SESSION['sec7score']>60 && $_SESSION['sec7score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                  <td>" ;
                  if($_SESSION['sec7score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                </tr>";
                }
               ?>
                <?php if($_SESSION['subSector8'] != NULL){
                     echo "<tr>
                  <td class='grey'>";
                   echo $_SESSION['subSector8']; 
                   echo "</td>
                  <td>";
                  if($_SESSION['sec8score']>=80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                  <td>" ;
                  if($_SESSION['sec8score']>60 && $_SESSION['sec8score']<80)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                  <td>" ;
                  if($_SESSION['sec8score']<=60)
                  {
                    echo "<i class='fas fa-check'></i>";
                  }
                  else
                  {
                    echo " ";
                  }
                  echo "</td>
                </tr>";
                }
               ?>
              </table>
            </div>
            <span style="padding-top:20px; color:red;" class="details">Overall Score: <?php echo $_SESSION['score'] ."%" ;
           
             ?></span>
    </div>
      
    </form>
</div>
</div>
</body>
</html>