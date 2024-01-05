<?php
require_once('vendor/autoload.php');

use setasign\Fpdi\Fpdi;

$pageToModify = 9; // Par exemple, page 1
$decision = 'VEI';
$user['Decision']   = $decision;
$data['vehicules']  = 3;
$data['mandate'] = 1;

$data['garage'] = 'GARAGE';
$user['Ville_Lese'] = 'VILLE';
$data['denomination'] = 'DENOMINATON';
$tampon = 'tampon.png';
$date_signed = '05-01-2023 à 09h52';

function decision($pdf){ // TOUS SAUF MAIF

    global $user, $data,$tampon, $date_signed;

    $pdf->SetFont('Arial');
    $pdf->SetTextColor(0, 0, 0);

    if($user['Decision'] == 'VEI'){
      // 1
      if($data['vehicules'] == 1){$pdf->SetXY(19.2,117.5);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2
      if($data['vehicules'] == 2){$pdf->SetXY(19.2,130.6);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2.1
      if($data['mandate'] == 1){$pdf->SetXY(39.6,153.4);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
        // 2.1.1
        if($data['garage'] != ''){$pdf->SetXY(73.7,160);$text = mb_convert_encoding($data['garage'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      }

      // 2.2
      if($data['mandate'] == 2){$pdf->SetXY(39.6,171.6);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 3
      if($data['vehicules'] == 3){$pdf->SetXY(19.2,198.5);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // Fait
      $pdf->SetXY(101.8,234);$text = mb_convert_encoding($user['Ville_Lese'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Le
      $pdf->SetXY(154.6,234);$text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Denomination
      $pdf->SetXY(19.2, 239);$text = mb_convert_encoding($data['denomination'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Tampon
      if(!is_null($tampon)){$pdf->Image($tampon, 110, 240, 20);}
    }

    if($user['Decision'] == 'RIV'){
      // 1
      if($data['vehicules'] == 1){$pdf->SetXY(19,112.5);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2
      if($data['vehicules'] == 2){$pdf->SetXY(19,126);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 3
      if($data['vehicules'] == 3){$pdf->SetXY(19,153.5);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // Fait
      $pdf->SetXY(100,230);$text = mb_convert_encoding($user['Ville_Lese'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Le
      $pdf->SetXY(152,230);$text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Denomination
      $pdf->SetXY(19, 197.5);$text = mb_convert_encoding($data['denomination'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Tampon
      if(!is_null($tampon)){$pdf->Image($tampon, 102.2,240, 20);}
    }

    if($user['Decision'] == 'RIVVGE'){
      // 1
      if($data['vehicules'] == 1){$pdf->SetXY(19.2,117);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2
      if($data['vehicules'] == 2){$pdf->SetXY(19.2,130.5);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2.1
      if($data['mandate'] == 1){$pdf->SetXY(38.5,153);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
        // 2.1.1
        if($data['garage'] != ''){$pdf->SetXY(73.5,158);$text = mb_convert_encoding($data['garage'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      }
      // 3
      if($data['vehicules'] == 3){$pdf->SetXY(19.2,167);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // Fait
      $pdf->SetXY(100,234);$text = mb_convert_encoding($user['Ville_Lese'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Le
      $pdf->SetXY(153,234);$text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Denomination
      $pdf->SetXY(19.2, 234);$text = mb_convert_encoding($data['denomination'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Tampon
      if(!is_null($tampon)){$pdf->Image($tampon, 102,240, 20);}
    }

    if($user['Decision'] == 'TNR'){
      // 1
      if($data['vehicules'] == 1){$pdf->SetXY(19,98);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2
      if($data['vehicules'] == 2){$pdf->SetXY(19,112);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // Fait
      $pdf->SetXY(100,230);$text = mb_convert_encoding($user['Ville_Lese'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Le
      $pdf->SetXY(153,230);$text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Denomination
      $pdf->SetXY(19, 172.3);$text = mb_convert_encoding($data['denomination'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Tampon
      if(!is_null($tampon)){$pdf->Image($tampon, 102,240, 20);}
    }

    if($user['Decision'] == 'VEIVGE'){
      // 1
      if($data['vehicules'] == 1){$pdf->SetXY(19,120.7);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2
      if($data['vehicules'] == 2){$pdf->SetXY(19,134.4);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 2.1
      if($data['mandate'] == 1){$pdf->SetXY(39.2,157.2);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
        // 2.1.1
        if($data['garage'] != ''){$pdf->SetXY(73.7,163);$text = mb_convert_encoding($data['garage'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      }

      // 2.2
      if($data['mandate'] == 2){$pdf->SetXY(39.2,175.4);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // 3
      if($data['vehicules'] == 3){$pdf->SetXY(19,202);$text = mb_convert_encoding('X', 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);}
      // Fait
      $pdf->SetXY(100,234);$text = mb_convert_encoding($user['Ville_Lese'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Le
      $pdf->SetXY(153,234);$text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Denomination
      $pdf->SetXY(19, 255.6);$text = mb_convert_encoding($data['denomination'], 'ISO-8859-1', 'UTF-8');$pdf->Write(0, $text);
      // Tampon
      if(!is_null($tampon)){$pdf->Image($tampon, 102,240, 20);}
    }

}

function bon(){
    
}

function autorisation(){
    
}

function cerfa1(){
    
}

function cerfa2(){
    
}
function achat($pdf){ //ACM

    global $user, $data,$tampon, $date_signed;

    $pdf->SetFont('Arial');
    $pdf->SetTextColor(0, 0, 0);


    // Fait 0
    // Coordonnées : 19.2, 194.4
    $pdf->SetXY(25, 145);
    $text = mb_convert_encoding($user['Ville_Lese'], 'ISO-8859-1', 'UTF-8');
    $pdf->Write(0, $text);

    // Le 0
    // Coordonnées : 39.8, 166.6
    $pdf->SetXY(100, 145);
    $text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');
    $pdf->Write(0, $text);



    // Le 1
    // Coordonnées : 39.8, 166.6
    $pdf->SetXY(128.2, 236);
    $text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');
    $pdf->Write(0, $text);

    // Fait
    // Coordonnées : 19.2, 194.4
    $pdf->SetXY(26, 248.5);
    $text = mb_convert_encoding($user['Ville_Lese'], 'ISO-8859-1', 'UTF-8');
    $pdf->Write(0, $text);

    // Le 2
    // Coordonnées : 102, 218.9
    $pdf->SetXY(75, 248.5);
    $text = mb_convert_encoding($date_signed, 'ISO-8859-1', 'UTF-8');
    $pdf->Write(0, $text);

    // Denomination
    $pdf->SetXY(21.6, 268);
    $text = mb_convert_encoding($data['denomination'], 'ISO-8859-1', 'UTF-8');
    $pdf->Write(0, $text);

    // Tampon
    if(!is_null($tampon)){
    $pdf->Image($tampon, 110, 268, 20);
    }
}


function generatePdf($pageToModify, $decision) {
    $pdf = new Fpdi();
    $sourceFile = $decision.'.pdf'; // Assurez-vous que ce fichier existe dans votre dossier

    $pageCount = $pdf->setSourceFile($sourceFile);
    $tplId = $pdf->importPage($pageToModify);
    $pdf->AddPage();
    $pdf->useTemplate($tplId);

    achat($pdf);

    $newPdfPath = 'nouveau_pdf.pdf';
    $pdf->Output($newPdfPath, 'F');
    return $newPdfPath;
}

$pdfPath = generatePdf($pageToModify, $decision);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Visualisateur PDF</title>
    <!-- Bootstrap 5 CDN -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <iframe src="<?php echo $pdfPath; ?>" class="d-block mx-auto" width="100%" height="900px" style="border: none;"></iframe>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
