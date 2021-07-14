 

 <?php 
  include("connection.php");
 ?>
 <!-- Bootstrap CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="../public/css/style.css">

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<style>
  body {
  
  font-family: sans-serif;
  background: rgb(240,240,247);
background: linear-gradient(90deg, rgba(240,240,247,0.9192051820728291) 26%, rgba(238,245,240,1) 54%, rgba(60,61,61,0.7567401960784313) 94%);
}

  .bg-primary {

    background-color: #e00000!important;

  }

  :root {

    --primary:#d21e2b!important;

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
.form-control {
  border-color:#990000;
  background: rgba(0,0,0,0.7);
  border-radius: 10px;
  color: #fff;

}
.text-center{
  border-color:#990000;
  background: rgba(0,0,0,0.7);
  border-radius: 10px;
  color: #fff;
}

</style>




	<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

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


<title >Formulaire des rapports</title>

<div class="container">

	<h1 class="display-4">Formulaire des rapports</h1>

<form action="http://localhost/EPS EDUCATION RAPPORT PHP/add.php" method="POST"  enctype="multipart/form-data">

	<div class="form-row">

		<div class="col-6">

	    	<label for="agence">Agence</label>

	    	<input type="text" class="form-control" name="agence" id="agence"  >

		</div>

		<div class="col-6">

	    	<label for="respo">Responsable</label>

	    	<input type="text" class="form-control" name="respo" id="respo">

		</div>

	</div>

	<hr/>

	<div class="form-row">

		<div class="col-6">

	    	<label for="date_1">Date début</label>

	    	<input type="date" class="form-control" name="date_1" id="date_1">

		</div>

		<div class="col-6">

	    	<label for="date_2">Date fin</label>

	    	<input type="date" class="form-control" name="date_2" id="date_2">

		</div>

	</div>

	<hr/>

	<h4>Premiers paiements cette semaine</h4>

	<div class="form-row">

		<div class="col-2">

	    	<label for="ch_1_n">Nombre des paiements</label>

	    	<input type="text" class="form-control" id="ch_1_n" name="ch_1_n">

		</div>

		<div class="col-4">

	    	<label for="ch_1_m">Montant total des paiements</label>

	    	<input type="text" class="form-control" name="ch_1_m" id="ch_1_m">

		</div>

		<div class="col-6">

	    	<label for="ch_1_r[]">Remarque </label>
	    	 
	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2">QUELLES DESTINATIONS?</td>  
   </tr>  
   <tr>  
      <td>CANADA</td>  
      <td><input  type="checkbox" name="ch_1_r[]" value="CANADA"></td>  
   </tr>  
   <tr>  
      <td>POLOGNE</td>  
      <td><input type="checkbox" name="ch_1_r[]" value="POLOGNE"></td>  
   </tr>  
   <tr>  
      <td>FRANCE</td>  
      <td><input type="checkbox" name="ch_1_r[]" value="FRANCE"></td>  
   </tr>  
   <tr>  
      <td>ESPAGNE</td>  
      <td><input type="checkbox" name="ch_1_r[]" value="ESPAGNE"></td>  
   </tr>  
    <tr>  
      <td>ANGLETERRE</td>  
      <td><input type="checkbox" name="ch_1_r[]" value="ANGLETERRE"></td>  
   </tr>  
    <tr>  
      <td>LA CHINE </td>  
      <td><input type="checkbox" name="ch_1_r[]" value="LA CHINE"></td>  
   </tr>   
   
</table>  
         

		</div>

	</div>

	<hr/>

	<h4>Premiers paiement prévus la semaine prochaine</h4>

	<div class="form-row">

		<div class="col-2">

	    	<label for="ch_2_n">Nombre des paiement</label>

	    	<input type="text" class="form-control" name="ch_2_n" id="ch_2_n">

		</div>

		<div class="col-4">

	    	<label for="ch_2_m">Montant total des paiement</label>

	    	<input type="text" class="form-control" name="ch_2_m" id="ch_2_m">

		</div>

		<div class="col-6">

	    	<label for="ch_2_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2">QUELLES DESTINATIONS?</td>  
   </tr>  
   <tr>  
      <td>CANADA</td>  
      <td><input type="checkbox" name="ch_2_r[]" value="CANADA"></td>  
   </tr>  
   <tr>  
      <td>POLOGNE</td>  
      <td><input type="checkbox" name="ch_2_r[]" value="POLOGNE"></td>  
   </tr>  
   <tr>  
      <td>FRANCE</td>  
      <td><input type="checkbox" name="ch_2_r[]" value="FRANCE"></td>  
   </tr>  
   <tr>  
      <td>ESPAGNE</td>  
      <td><input type="checkbox" name="ch_2_r[]" value="ESPAGNE"></td>  
   </tr>  
    <tr>  
      <td>ANGLETERRE</td>  
      <td><input type="checkbox" name="ch_2_r[]" value="ANGLETERRE"></td>  
   </tr>  
    <tr>  
      <td>LA CHINE </td>  
      <td><input type="checkbox" name="ch_2_r[]" value="LA CHINE"></td>  
   </tr>   
   
</table>  
		</div>

	</div>

	<hr/>

	<h4>Deuxième paiement cette semaine</h4>

	<div class="form-row">

		<div class="col-2">

	    	<label for="ch_3_n">Nombre des paiement</label>

	    	<input type="text" class="form-control" name="ch_3_n" id="ch_3_n">

		</div>

		<div class="col-4">

	    	<label for="ch_3_m">Montant total des paiement</label>

	    	<input type="text" class="form-control" name="ch_3_m" id="ch_3_m">

		</div>

		<div class="col-6">

	    	<label for="ch_3_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550" >  
   <tr>  
      <td colspan="2">QUELLES DESTINATIONS?</td>  
   </tr>  
   <tr>  
      <td>CANADA</td>  
      <td><input type="checkbox" name="ch_3_r[]" value="CANADA"></td>  
   </tr>  
   <tr>  
      <td>POLOGNE</td>  
      <td><input type="checkbox" name="ch_3_r[]" value="POLOGNE"></td>  
   </tr>  
   <tr>  
      <td>FRANCE</td>  
      <td><input type="checkbox" name="ch_3_r[]" value="FRANCE"></td>  
   </tr>  
   <tr>  
      <td>ESPAGNE</td>  
      <td><input type="checkbox" name="ch_3_r[]" value="ESPAGNE"></td>  
   </tr>  
    <tr>  
      <td>ANGLETERRE</td>  
      <td><input type="checkbox" name="ch_3_r[]" value="ANGLETERRE"></td>  
   </tr>  
    <tr>  
      <td>LA CHINE </td>  
      <td><input type="checkbox" name="ch_3_r[]" value="LA CHINE"></td>  
   </tr>   
   
</table>  

		</div>

	</div>

	<hr/>

	<h4>Deuxième paiement prévu la semaine prochaine</h4>

	<div class="form-row">

		<div class="col-2">

	    	<label for="ch_4_n">Nombre des paiement</label>

	    	<input type="text" class="form-control" name="ch_4_n" id="ch_4_n">

		</div>

		<div class="col-4">

	    	<label for="ch_4_m">Montant total des paiement</label>

	    	<input type="text" class="form-control" name="ch_4_m" id="ch_4_m">

		</div>

		<div class="col-6">

	    	<label for="ch_4_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2">QUELLES DESTINATIONS?</td>  
   </tr>  
   <tr>  
      <td>CANADA</td>  
      <td><input type="checkbox" name="ch_4_r[]" value="CANADA"></td>  
   </tr>  
   <tr>  
      <td>POLOGNE</td>  
      <td><input type="checkbox" name="ch_4_r[]" value="POLOGNE"></td>  
   </tr>  
   <tr>  
      <td>FRANCE</td>  
      <td><input type="checkbox" name="ch_4_r[]" value="FRANCE"></td>  
   </tr>  
   <tr>  
      <td>ESPAGNE</td>  
      <td><input type="checkbox" name="ch_4_r[]" value="ESPAGNE"></td>  
   </tr>  
    <tr>  
      <td>ANGLETERRE</td>  
      <td><input type="checkbox" name="ch_4_r[]" value="ANGLETERRE"></td>  
   </tr>  
    <tr>  
      <td>LA CHINE </td>  
      <td><input type="checkbox" name="ch_4_r[]" value="LA CHINE"></td>  
   </tr>   
   
</table>  

		</div>

	</div>

	<hr/>

	<h4>Visites à l'agence</h4>

	<div class="form-row">

		<div class="col-6">

	    	<label for="ch_5_n">Nombre</label>

	    	<input type="text" class="form-control" name="ch_5_n" id="ch_5_n">

		</div>

		<div class="col-2">

	    	<label for="ch_5_r[]">Remarque</label>
	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2"></td>  
   </tr>  
   <tr>  
      <td>HOT LEAD</td>  
      <td><input type="checkbox" name="ch_5_r[]" value="HOT LEAD"></td>  
   </tr>  
   <tr>  
      <td>MEDIUM LEAD</td>  
      <td><input type="checkbox" name="ch_5_r[]" value="MEDIUM LEAD"></td>  
   </tr>  
   <tr>  
      <td>COLD LEAD</td>  
      <td><input type="checkbox" name="ch_5_r[]" value="COLD LEAD"></td>  
   </tr>  
 
   
</table>  

		</div>

	</div>

	<hr/>

	<h4>Engagements distribués à l'agence cette semaine</h4>

	<div class="form-row">

		<div class="col-6">

	    	<label for="ch_6_n">Nombre</label>

	    	<input type="text" class="form-control" name="ch_6_n" id="ch_6_n">

		</div>

		<div class="col-2">

	    	<label for="ch_6_r[]">Remarque</label>
	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2"></td>  
   </tr>  
   <tr>  
      <td>HOT LEAD</td>  
      <td><input type="checkbox" name="ch_6_r[]" value="HOT LEAD"></td>  
   </tr>  
   <tr>  
      <td>MEDIUM LEAD</td>  
      <td><input type="checkbox" name="ch_6_r[]" value="MEDIUM LEAD"></td>  
   </tr>  
   <tr>  
      <td>COLD LEAD</td>  
      <td><input type="checkbox" name="ch_6_r[]" value="COLD LEAD"></td>  
   </tr>  
 
   
</table>  


		</div>

	</div>

	<hr/>

	<h4>Engagements distribués par e-mail cette semaine</h4>

	<div class="form-row">

		<div class="col-6">

	    	<label for="ch_7_n">Nombre</label>

	    	<input type="text" class="form-control" name="ch_7_n" id="ch_7_n">

		</div>

		<div class="col-2">

	    	<label for="ch_7_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2"></td>  
   </tr>  
   <tr>  
      <td>HOT LEAD</td>  
      <td><input type="checkbox" name="ch_7_r[]" value="HOT LEAD"></td>  
   </tr>  
   <tr>  
      <td>MEDIUM LEAD</td>  
      <td><input type="checkbox" name="ch_7_r[]" value="MEDIUM LEAD"></td>  
   </tr>  
   <tr>  
      <td>COLD LEAD</td>  
      <td><input type="checkbox" name="ch_7_r[]" value="COLD LEAD"></td>  
   </tr>  
 
   
</table>  

		</div>

	</div>

	<hr/>

	<h4>Etudiants contacter sur les réseaux sociaux cette semaine</h4>

	<div class="form-row">

		<div class="col-6">

	    	<label for="ch_8_n">Nombre</label>

	    	<input type="text" class="form-control" name="ch_8_n" id="ch_8_n">

		</div>

		<div class="col-2">

	    	<label for="ch_8_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2"></td>  
   </tr>  
   <tr>  
      <td>HOT LEAD</td>  
      <td><input type="checkbox" name="ch_8_r[]" value="HOT LEAD"></td>  
   </tr>  
   <tr>  
      <td>MEDIUM LEAD</td>  
      <td><input type="checkbox" name="ch_8_r[]" value="MEDIUM LEAD"></td>  
   </tr>  
   <tr>  
      <td>COLD LEAD</td>  
      <td><input type="checkbox" name="ch_8_r[]" value="COLD LEAD"></td>  
   </tr>  
 
   
</table>  


		</div>

	</div>

	<hr/>

	<h4>Etudiants contacter sur whatsapp cette semaine</h4>

	<div class="form-row">

		<div class="col-6">

	    	<label for="ch_11_n">Nombre</label>

	    	<input type="text" class="form-control" name="ch_11_n" id="ch_11_n">

		</div>

		<div class="col-2">

	    	<label for="ch_11_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2"></td>  
   </tr>  
   <tr>  
      <td>HOT LEAD</td>  
      <td><input type="checkbox" name="ch_11_r[]" value="HOT LEAD"></td>  
   </tr>  
   <tr>  
      <td>MEDIUM LEAD</td>  
      <td><input type="checkbox" name="ch_11_r[]" value="MEDIUM LEAD"></td>  
   </tr>  
   <tr>  
      <td>COLD LEAD</td>  
      <td><input type="checkbox" name="ch_11_r[]" value="COLD LEAD"></td>  
   </tr>  
 
   
</table>  

		</div>

	</div>

	<hr/>


	<h4>Total Nouveaux leads cette semaine</h4>

	<div class="form-row">

		<div class="col-6">

	    	<label for="ch_9_n">Nombre</label>

	    	<input type="text" class="form-control" name="ch_9_n" id="ch_9_n">

		</div>

		<div class="col-2">

	    	<label for="ch_9_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2"></td>  
   </tr>  
   <tr>  
      <td>HOT LEAD</td>  
      <td><input type="checkbox" name="ch_9_r[]" value="HOT LEAD"></td>  
   </tr>  
   <tr>  
      <td>MEDIUM LEAD</td>  
      <td><input type="checkbox" name="ch_9_r[]" value="MEDIUM LEAD"></td>  
   </tr>  
   <tr>  
      <td>COLD LEAD</td>  
      <td><input type="checkbox" name="ch_9_r[]" value="COLD LEAD"></td>  
   </tr>  
 
   
</table>  


		</div>

	</div>

	<hr/>

	<h4>Leads convertis en applications</h4>

	<div class="form-row">

		<div class="col-6">

	    	<label for="ch_10_n">Nombre</label>

	    	<input type="text" class="form-control" name="ch_10_n" id="ch_10_n">

		</div>

		<div class="col-2">

	    	<label for="ch_10_r[]">Remarque</label>

	    	<table class="text-center" border="3" width="550">  
   <tr>  
      <td colspan="2"></td>  
   </tr>  
   <tr>  
      <td>HOT LEAD</td>  
      <td><input type="checkbox" name="ch_10_r[]" value="HOT LEAD"></td>  
   </tr>  
   <tr>  
      <td>MEDIUM LEAD</td>  
      <td><input type="checkbox" name="ch_10_r[]" value="MEDIUM LEAD"></td>  
   </tr>  
   <tr>  
      <td>COLD LEAD</td>  
      <td><input type="checkbox" name="ch_10_r[]" value="COLD LEAD"></td>  
   </tr>  
 
   
</table>  


		</div>

	</div>

	<hr/>

	<input type="submit" class="btn btn-primary" value="Enregistrer" name="save">

</form>

</div>

