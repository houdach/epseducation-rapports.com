<?php 
require("db.php");

if ($_POST) {
    $id      = (int)($_POST['id']);
   $agence  = trim($_POST['agence']);
    $respo   = trim($_POST['respo']);
    $date_1  = date($_POST['date_1']);
    $date_2  = date($_POST['date_2']);
    $ch_1_n  = (int)($_POST['ch_1_n ']);
    $ch_1_m  = (float)($_POST['ch_1_m']);
    $ch_1_r  = implode(',', (array)$_POST['ch_1_r']);
    $ch_2_n  = (int)($_POST['ch_2_n']);
    $ch_2_m  = (float)($_POST['ch_2_m']);
    $ch_2_r  = implode(',', (array)$_POST['ch_2_r']);
    $ch_3_n  = (int)($_POST['ch_3_n']);
    $ch_3_m  = (float)($_POST['ch_3_m']);
    $ch_3_r  = implode(',', (array)$_POST['ch_3_r']);
    $ch_4_n  = (int)($_POST['ch_4_n']);
    $ch_4_m  = (float)($_POST['ch_4_m']);
    $ch_4_r  = implode(',', (array)$_POST['ch_4_r']);
    $ch_5_n  = (int)($_POST['ch_5_n']);
    $ch_5_r  = implode(',', (array)$_POST['ch_5_r']);
    $ch_6_n  = (int)($_POST['ch_6_n']);
    $ch_6_r  = implode(',', (array)$_POST['ch_6_r']);
    $ch_7_n  = (int)($_POST['ch_7_n']);
    $ch_7_r  = implode(',', (array)$_POST['ch_7_r']);
    $ch_8_n  = (int)($_POST['ch_8_n']);
    $ch_8_r  = implode(',', (array)$_POST['ch_8_r']);
    $ch_11_n = (int)($_POST['ch_11_n']);
    $ch_11_r = implode(',', (array)$_POST['ch_11_r']);
    $ch_9_n  = (int)($_POST['ch_9_n']);
    $ch_9_r  = implode(',', (array)$_POST['ch_9_r']);
    $ch_10_n = (int)($_POST['ch_10_n']);
    $ch_10_r = implode(',', (array)$_POST['ch_10_r']);
    try {
        $sql = 'UPDATE rapports
         SET agence = :agence, respo = :respo, date_1 = :date_1, date_2 = :date_2, ch_1_n =:ch_1_n, ch_1_m = :ch_1_m, ch_1_r = :ch_1_r, ch_2_n =:ch_2_n, ch_2_m = :ch_2_m, ch_2_r = :ch_2_r,ch_3_n =:ch_3_n, ch_3_m = :ch_3_m, ch_3_r = :ch_3_r, ch_4_n =:ch_4_n, ch_4_m = :ch_4_m, ch_4_r = :ch_4_r, ch_5_n =:ch_5_n, ch_5_r = :ch_5_r, ch_6_n = :ch_6_n, ch_6_r =:ch_6_r, ch_7_n = :ch_7_n, ch_7_r = :ch_7_r, ch_8_n = : ch_8_n, ch_8_r = :ch_8_r, ch_11_n = :ch_11_n, ch_11_r =:ch_11_r, ch_9_n = :ch_9_n, ch_9_r = :ch_9_r, ch_10_n =:ch_10_n,ch_10_r = :ch_10_r 
         WHERE id = :id';


        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":agence", $agence);
        $stmt->bindParam(":respo", $respo);
        $stmt->bindParam(":date_1", $date_1);
        $stmt->bindParam(":date_2", $date_2);
        $stmt->bindParam(":ch_1_n", $ch_1_n);
        $stmt->bindParam(":ch_1_m", $ch_1_m);
        $stmt->bindParam(":ch_1_r", $ch_1_r);
        $stmt->bindParam(":ch_2_n", $ch_2_n);
        $stmt->bindParam(":ch_2_m", $ch_2_m);
        $stmt->bindParam(":ch_2_r", $ch_2_r);
        $stmt->bindParam(":ch_3_n", $ch_3_n);
        $stmt->bindParam(":ch_3_m", $ch_3_m);
        $stmt->bindParam(":ch_3_r", $ch_3_r);
        $stmt->bindParam(":ch_4_n", $ch_4_n);
        $stmt->bindParam(":ch_4_m", $ch_4_m);
        $stmt->bindParam(":ch_4_r", $ch_4_r);
        $stmt->bindParam(":ch_5_n", $ch_5_n);
        $stmt->bindParam(":ch_5_r", $ch_5_r);
        $stmt->bindParam(":ch_6_n", $ch_6_n);
        $stmt->bindParam(":ch_6_r", $ch_6_r);
        $stmt->bindParam(":ch_7_n", $ch_7_n);
        $stmt->bindParam(":ch_7_r", $ch_7_r);
        $stmt->bindParam(":ch_8_n", $ch_8_n);
        $stmt->bindParam(":ch_8_r", $ch_8_r);
        $stmt->bindParam(":ch_11_n", $ch_11_n);
        $stmt->bindParam(":ch_11_r", $ch_11_r);
        $stmt->bindParam(":ch_9_n", $ch_9_n);
        $stmt->bindParam(":ch_9_r", $ch_9_r);
        $stmt->bindParam(":ch_10_n", $ch_10_n);
        $stmt->bindParam(":ch_10_r", $ch_10_r);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        if ($stmt->rowCount()) {
            header("Location: edit.php?id=".$id."&status=updated");
            exit();
        }
        header("Location: edit.php?id=".$id."&status=fail_update");
        exit();
    } catch (Exception $e) {
        echo "Error " . $e->getMessage();
        exit();
    }
} else {
    header("Location: edit.php?id=".$id."&status=fail_update");
    exit();
}
