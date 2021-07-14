

<?php 
require("db.php");
$id = $_GET['id'] ? intval($_GET['id']) : 0;

try {
    $sql = "SELECT * FROM rapports WHERE id = :id LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();    
} catch (Exception $e) {
    echo "Error " . $e->getMessage();
    exit();
}

if (!$stmt->rowCount()) {
    header("Location: HOMEPAGE.php");
    exit();
}
$rapports = $stmt->fetch();
$paimentprevu1 = $rapports['ch_4_m'];
$paimentprevu2 = $rapports['ch_2_m'];
$paimentcourant1 = $rapports['ch_1_m'];
$paimentcourant2 = $rapports['ch_3_m'];
$Totaldespaimentsprevus = $paimentprevu1 + $paimentprevu2;
$Totaldespaimentscourant = $paimentcourant1 + $paimentcourant2;
$Totaldespaiments = $Totaldespaimentsprevus + $Totaldespaimentscourant;

?>
!-- Bootstrap CSS -->
<html xmlns="http://www.w3.org/1999/xhtml"></html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="../public/css/style.css">

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: #e60000;">

  <a class="navbar-brand" href="#">EPSEducation Rapports</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

    <span class="navbar-toggler-icon"></span>

  </button>



  <div class="collapse navbar-collapse" id="navbarSupportedContent">

    <ul class="navbar-nav mr-auto">

      <li class="nav-item">

        <a class="nav-link" href="/">Accueil</a>

      </li>

      <li class="nav-item">

        <a class="nav-link" href="http://localhost/EPS EDUCATION RAPPORT PHP/create.php">Nouveau rapport</a>

      </li>

    </ul>

  </div>

</nav>
<style >
 body {
  
  font-family: sans-serif;
  background: rgb(240,240,247);
background: linear-gradient(90deg, rgba(240,240,247,0.9192051820728291) 26%, rgba(238,245,240,1) 54%, rgba(60,61,61,0.7567401960784313) 94%);
}
  .btn-primary.focus, .btn-primary:focus {

    color: #fff;

    background-color: #d21e2b;

    border-color: #d21e2b9c;

    box-shadow: 0 0 0 0.2rem rgb(210 30 43 / 32%);

  }

  .btn-primary {

    color: #fff;

    background-color: #d21e2b;

    border-color: #d21e2b;
    width: 10%;
    object-position: center;

  }

  .btn-primary:hover {

    color: #fff;

    background-color: #9e1b25;

    border-color: #9e1b25;

  }

  primary:not(:disabled):not(.disabled):active, .show>.btn-primary.dropdown-toggle {

    color: #fff;

    background-color: #9e1b25;

    border-color: #9e1b25;

  }

  .card-title {

    margin-bottom: .75rem;

    color: #d21e2b;

}
  

    @page 
    {
        size: auto;   /* auto is the initial value */
        margin: 0mm;  /* this affects the margin in the printer settings */
    }
</style>


    <div class="container"><br></br>
        <h1>Rapport de <?php echo $rapports['date_1'] ; ?> à <?php echo $rapports['date_2'] ; ?> </h1>

        <h3></h3>

        <hr/>
        <div class="row">
  <div class="col-sm-4">
    <div class="card" style="border-color : #ff0000;">
      <div class="card-body">
        <h5 class="card-title">Total des paiments</h5>
        <h1> <b><?php echo $Totaldespaiments; ?></b> MAD</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card"style="border-color : #ff0000;">
      <div class="card-body">
        <h5 class="card-title">Total des paiments prévus</h5>
        <h1><b><?php echo $Totaldespaimentsprevus; ?></b> MAD</h1>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card" style="border-color : #ff0000;">
      <div class="card-body">
        <h5 class="card-title">Total des paiments courants</h5>
        <h1><b><?php echo $Totaldespaimentscourant; ?></b> MAD</h1>
      </div> 
    </div>
  </div>
</div>
</br>
        <!-- Show  a Product -->
                    <table  id="1" class="table">
                          <thead class='bg-danger'>
                               <tr>
                                <th style='font-size:22px;'>
                                  PAIMENTS
                                </td>
                               <th>Nombre</td>
                               <th>Montant</td>
                               <th>Remaqrue</td>
                                </tr>
                            </thead>
                            <tr>
                                <th>PREMIERS PAIMENTS CETTE SEMAINE</th>
                                <td><?= $rapports['ch_1_n'] ?></td>
                                <td><?= $rapports['ch_1_m'] ?></td>
                                <td><?= $rapports['ch_1_r'] ?></td>
                                
                            </tr>   
                            <tr>
                                <th>PREMIERS PAIMENTS PREVUS CETTE SEMAINE </th>
                                <td><?=$rapports['ch_2_n'] ?></td>
                                <td><?=$rapports['ch_2_m'] ?></td>
                                <td><?=$rapports['ch_2_r'] ?></td>
                                
                            </tr>  
                            <tr>
                                <th> DEUXIEMES PAIMENTS CETTE SEMAINE </th>
                                <td><?=$rapports['ch_3_n'] ?></td>
                                <td><?=$rapports['ch_3_m'] ?></td>
                                <td><?=$rapports['ch_3_r'] ?></td>
                            </tr>
                            <tr>
                                <th>DEUXIEMES PAIMENTS PREVUS LA SEMAINE PROCHAINE</th>
                                <td><?=$rapports['ch_4_n'] ?></td>
                                <td><?=$rapports['ch_4_m'] ?></td>
                                <td><?=$rapports['ch_4_r'] ?></td>
                            </tr>
                            </table> 

                        <table id="2" class='table'>

                   <thead class='bg-danger'>

            <tr>

                <th style='font-size:22px;'>

                        STATISTIQUES

                </td>

                <th>Nombre</td>

                <th>Remaqrue</td>

            </tr>

        </thead>


                             <tr>
                                <th>VISITES A L'AGENCE</th>
                                <td><?=$rapports['ch_5_n'] ?></td>
                                
                                <td><?=$rapports['ch_5_r'] ?></td>
                            </tr>
                             <tr>
                                <th>ENGAGEMENTS DISTRIBUES A L'AGENCE CETTE SEMAINE</th>
                                <td><?=$rapports['ch_6_n'] ?></td>
                                <td><?=$rapports['ch_6_r'] ?></td>
                            </tr>
                            <tr>
                                <th>ENGAGEMENTS DISTRIBUES PAR E-MAIL CETTE SEMAINE</th>
                                <td><?=$rapports['ch_7_n'] ?></td>
                                <td><?=$rapports['ch_7_r'] ?></td>
                            </tr>

                            <tr>
                                <th>ETUDIANTS CONTACTES SUR LES RESAUX SOCIAUX CETTE SEMAINE</th>
                                <td><?=$rapports['ch_8_n'] ?></td>
                                <td><?=$rapports['ch_8_r'] ?></td>
                            </tr>
                             <tr>
                                <th>ETUDIANTS CONTACTES SUR WHATSAPP CETTE SEMAINE</th>
                                <td><?=$rapports['ch_11_n'] ?></td>
                                <td><?=$rapports['ch_11_r'] ?></td>
                            </tr>
                             <tr>
                                <th>NOUVEAUX LEADS CETTE SEMAINE</th>
                                <td><?=$rapports['ch_9_n'] ?></td>
                                <td><?=$rapports['ch_9_r'] ?></td>
                            </tr>
                            <tr>
                                <th>LEADS CONVERTIS EN APPLICATION</th>
                                <td><?=$rapports['ch_10_n'] ?></td>
                                <td><?=$rapports['ch_10_r'] ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Show a product -->
        <br>
        <button type='button' onclick='window.print();return false;' class='btn btn-primary btn-lg btn-block'>Imprimer</button>
       <button type="button" onclick="tablesToExcel(array1, array2, 'myfile.xls')" class='btn btn-primary btn-lg btn-block' value="Export to Excel"> Exporter en Excel </button>
    <script src="table2excel.js" type="text/javascript"></script>

    </div><!-- /.container -->
