<?php
require 'db.php';


if(isset($_POST['request'])){
	$request = $_POST['request'];
	$query = "SELECT * FROM rapports WHERE agence !='$request'";
	$result = mysqli_query($conn,$query);
	$count = mysqli_num_rows($result);

	if(isset($_POST['agence'])){
		$agence = implode("','", $_POST['agence']);
		$sql .="AND agence IN('".$agence."')";
	}
	if(isset($_POST['ch_1_r'])){
		$ch_1_r = implode("','", $_POST['ch_1_r']);
		$sql .="AND ch_1_r IN('".$ch_1_r."')";
	}
	if(isset($_POST['ch_5_r'])){
		$ch_5_r = implode("','", $_POST['ch_5_r']);
		$sql .="AND ch_5_r IN('".$ch_5_r."')";
	}

	$result = $conn->query($sql);
	$output = '';

	if($result->num_rows>0){
		 while($rapports=$result->fetch_assoc()){
		 $output .='<div class="col">
    <div class="card">
      <div class="card-body">
      <h5 class="card-title">Rapport de '.$rapports['date_1'].'à'.$rapports['date_2'].' </h5>

      <p class="card-text DIRECTION">'.$rapports['agence'].'</p>

      <h6><span class="fa fa-aperture"></span>Paim. Prévu:<b> '. $Totaldespaimentsprevus.'</b>MAD</h6>

      <h6>Paim. Courants:<b>'.  $Totaldespaimentscourant.'</b>MAD</h6>


      <a href="show.php?id='.$rapports['id'].'" style="width:100%;" class="btn btn-sm btn-light"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-bar-graph-fill" viewBox="0 0 16 16">

      <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zm.5 10v-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5zm-2.5.5a.5.5 0 0 1-.5-.5v-4a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-.5.5h-1zm-3 0a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-1z"/>

    </svg>
<i class="fa fa-th-list"> </i>Details </a>


      <a href="edit.php?id='.$rapports['id'].'"style="width:100%;" class="btn btn-sm btn-dark"><i class="fa fa-edit"></i> Modifier</a>

      <a href="#" style="width:100%;" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#modal-delete-'. $rapports['id'] .'"><i class="fa fa-trash"></i>Supprimer</a>
       </div>
    </div>
</div>';
         }
	}
	else{
		$output = "<h3> Aucun rapport trouvé!</h3>";
	}
	echo $output;
}

