<?php
$var=$_GET["Seq_Registro"];
	require_once('tcpdf/tcpdf.php');
	require_once('model/conexion.php');	
	$usuario =  "SELECT
    `sys_departamento`.`Nombre` as Departamento
    , `sys_registro`.`Primer_Nombre`
    , `sys_registro`.`Segundo_Nombre`
    , `sys_registro`.`Primer_Apellido`
    , `sys_registro`.`Segundo_Apellido`
    , `sys_registro`.`Numero_Documento`
    , `sys_registro`.`Expedido`
    , `sys_registro`.`Imagen`
    , `sys_departamento_1`.`Abreviado` as Dep_Expedido
    , `sys_subespecialidad`.`Nombre` as SubEspecialidad
    , `sys_especialidad`.`Nombre` as Especialedad
    , `sys_especialidad`.`Detalle` 
    , `sys_registro`.`Seq_Registro`
    FROM `rumetra`.`sys_registro`
    INNER JOIN `rumetra`.`sys_departamento` 
     ON (`sys_registro`.`Departamento_Seq` = `sys_departamento`.`Seq_Departamento`)
    INNER JOIN `rumetra`.`sys_departamento` AS `sys_departamento_1` 
     ON (`sys_departamento_1`.`Seq_Departamento` = `sys_registro`.`Expedido`)
    INNER JOIN `rumetra`.`sys_subespecialidad` 
     ON (`sys_subespecialidad`.`Seq_SubEspecialidad` = `sys_registro`.`SubEspecialidad_Seq`)
    INNER JOIN `rumetra`.`sys_especialidad` 
     ON (`sys_subespecialidad`.`Especialedad_Seq` = `sys_especialidad`.`Seq_Especialedad`)
     where Seq_Registro='$var'";	
	$usuarios=$mysqli->query($usuario);
	
if(isset($_POST['create_pdf'])){
	require_once('tcpdf/tcpdf.php');
	
	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
	
	$pdf->SetCreator(PDF_CREATOR);
	$pdf->SetAuthor('Jose Luis Arredondo');
	$pdf->SetTitle($_POST['reporte_name']);
	$pdf->setPrintHeader(false); 
	$pdf->setPrintFooter(false);
	$pdf->SetMargins(20, 5, 20, false); 
	$pdf->SetAutoPageBreak(true, 20); 
	$pdf->SetFont('Helvetica', '', 8);
	$pdf->addPage();

	$content = '';
	while ($user=$usuarios->fetch_assoc()) { 
      $Datosqr=$user['Seq_Registro'].' '.$user['Primer_Nombre'].' '.$user['Segundo_Nombre'].' '.$user['Primer_Apellido'].' '.$user['Segundo_Apellido'].' CI:'.$user['Numero_Documento'].'-'.$user['Dep_Expedido'].' '.$user['Especialedad'].' '.$user['Departamento'].' '.$user['Numero_Documento'].' '.date("d/m/Y");
	$content .= '

      <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/style.css" rel="stylesheet">
      <link href="assets/css/reporte.css" rel="stylesheet" type="text/css" />

    <table class="first" border="0" WIDTH="600px" HEIGHT="220px" cellpadding="1" cellspacing="1">
      <tr>
        <td colspan="3"><img  src="imagenes/cabecera.jpg"><br/><img  src="imagenes/Matric.jpg"/></td>
        <td class="linea" ></td>
        <td colspan="3" class="texto" >El ministerio de salud a través del viceministerio de medicina tradicional e interculturalidad en aplicación a la ley N° 459 y D.S. N° 2436 y R.M. N° 0935 acredita que el titular de la presente Matricula se encuentra legalmente registrado en el RUMETRAB.</td>
      </tr>
      <tr>
        <td rowspan="6">&nbsp;&nbsp;<img class="imagen" src="imagenes/foto.png"/></td>
        <td>Nombre(s):</td>
        <td>'.$user['Primer_Nombre'].' '.$user['Segundo_Nombre'].'</td>
        <td class="linea" ></td>
        <td  colspan="2" class="secondf">'.$user['Departamento'].', '.date("d-m-Y").'</td>
        <td  ></td>
      </tr>
      <tr>
        <td>Apellido(s):</td>
        <td>'.$user['Primer_Apellido'].' '.$user['Segundo_Apellido'].'</td>
        <td class="linea" ></td>
      </tr>
      <tr>
        <td >C.I.:</td>
        <td >'.$user['Numero_Documento'].' '.$user['Dep_Expedido'].'</td>
        <td class="linea" ></td>
      </tr>
      <tr>
        <td>Especialidad:</td>
        <td >'.$user['Especialedad'].'</td>
        <td class="linea" ></td>
      </tr>
      <tr>
        <td>Sub Especialidad:</td>
        <td  >'.$user['SubEspecialidad'].'</td>
         <td class="linea" ></td>
      </tr>
      <tr>
        <td>Departamento:</td>
        <td >'.$user['Departamento'].'</td>
        <td class="linea" ></td>
      </tr>
      <tr>
        <td  VALIGN="MIDDLE" class="firma">.............................<br/> Firma del Interesado</td>
        <td >Nro. Matricual:</td>
        <td >'.$user['Numero_Documento'].'-'.$user['Detalle'].'-'.$user['Seq_Registro'].'</td>

        <td class="linea" ></td>
      </tr>
      <tr  class="second">
        <td colspan="3"><img  src="imagenes/rum.jpg"/></td>
        <td class="linea" ></td>
        <td>VICEMINISTRO DE MEDICINA<br/>TRADICIONAL E INTERCULTURALIDAD </td>
        <td>JEFE DE RECURSOS HUMANOS<br/>MINISTERIO DE SALUD</td>
      </tr> 
	';	
  }
	$content .= '</table>'; 
  $content .= '       	
	';

	$pdf->writeHTML($content, true, 0, true, 0);
	$pdf->lastPage();
$stilo = array(
    'border' => false,
    'padding' => 0,
    'fgcolor' => array(128,0,0),
    'bgcolor' => false
);
 $pdf->write2DBarcode($Datosqr, 'QRCODE,H', 170, 29, 500, 220, $stilo, 'N');
 $pdf->output('Reporte.pdf', 'I');
}
?>
		 

<!doctype html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/reporte.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="right " >
        <?php $h1 = "MATRICULA PROFESIONAL DE MEDICO TRADICIONAL - RUMETRAB";?>
        <div class="title">VISTA PREVIA DE MATRICULA PROFESIONAL DE MEDICO TRADICIONAL - RUMETRAB
                <form method="post">
                  <input type="hidden" name="reporte_name" value="<?php echo $h1; ?>">
                  <input type="submit" name="create_pdf" class="btn btn-danger pull-right" src="imagenes/escudo.png" value="Enviar Matricula a PDF">
                </form>
        </div>
          <table class="first" border="0" WIDTH="700px" HEIGHT="220px"/>
            <?php 
            require 'phpqrcode/qrlib.php';
            while ($user=$usuarios->fetch_assoc()) {   ?>
              <tr>
                <td colspan="3" ><img  src="imagenes/cabecera.jpg"></td>
                <td class="linea" rowspan="11"></td>
                <td rowspan="11">&nbsp;&nbsp;&nbsp;</td>
                <td colspan="3" WIDTH="350px" rowspan="2" class="texto">El ministerio de salud a través del viceministerio de medicina tradicional e interculturalidad en aplicación a la ley N° 459 y D.S. N° 2436 y R.M. N° 0935 acredita que el titular de la presente Matricula se encuentra legalmente registrado en el RUMETRAB.</td>
                <td rowspan="11">&nbsp;&nbsp;&nbsp;</td>
              </tr>
              <tr>
                <td colspan="3"><img src="imagenes/Matric.jpg"/></td>
              </tr>
              <tr>
                  <td rowspan="7" WIDTH="100px"><img class="imagen" src="imagenes/foto.png"/></td>
                  <td>Nombre(s):</td>
                  <td><?php echo $user['Primer_Nombre']?> <?php echo $user['Segundo_Nombre']; ?></td>
                  <td colspan="2" class="secondf"><?php echo $user['Departamento'];          
                      echo ", ";
                      echo date("d-m-Y"); ?></td>
                  <td rowspan="8" align="right"> <?php
                      $Datosqr=$user['Primer_Nombre'].' '.$user['Segundo_Nombre'].' '.$user['Primer_Apellido'].' '.$user['Segundo_Apellido'].''.$user['Numero_Documento'].''.$user['Especialedad'].''.$user['Departamento'].''.$user['Numero_Documento'].''.date("d-m-Y");
                      $fec= date("d-m-Y");
                      $dir='temp/';
                      if(!file_exists($dir))
                        mkdir($dir);
                      $tamanio=2;
                      $level='M';
                      $frameSize='3';
                      $contenido = $Datosqr.' '.$fec;
                      $filename =$dir.'test.png';

                      QRcode::png($contenido, $filename, $level, $tamanio, $frameSize);
                      echo '<img src="'.$filename.'" />';
                      ?>
                  </td>
              </tr>
              <tr>
                  <td>Apellido(s):</td>
                  <td><?php echo $user['Primer_Apellido']; ?> <?php echo $user['Segundo_Apellido']; ?></td>
                  <td > </td>
               </tr>
               <tr>
                  <td >C.I.:</td>
                  <td ><?php echo $user['Numero_Documento']?> <?php echo $user['Dep_Expedido']; ?></td>
               </tr>
               <tr>
                  <td>Especialidad:</td>
                  <td ><?php echo $user['Especialedad']?></td>
               </tr>
               <tr>
                  <td>Sub Especialidad:</td>
                  <td  ><?php echo $user['SubEspecialidad']?></td>
               </tr>
               <tr>
                  <td>Departamento:</td>
                  <td ><?php echo $user['Departamento']?></td>
               </tr>
               <tr>
                  <td >Nro. Matricual:</td>
                  <td ><?php echo $user['Numero_Documento'] ?>-<?php echo $user['Detalle']?>-<?php echo $user['Seq_Registro']; ?></td>
               </tr>
               <tr >
                  <td class="firma">.............................<br/> Firma del Interesado</td>
               </tr>    
               <tr  class="second">
                 <td colspan="3"><img  src="imagenes/rum.jpg"/></td>
                 <td>VICEMINISTRO DE MEDICINA<br/>TRADICIONAL E INTERCULTURALIDAD </td>
                  <td>JEFE DE RECURSOS HUMANOS<br/>MINISTERIO DE SALUD</td>
               </tr>   
               <?php } ?>
          </table>
      </div>
</body>
</html>
