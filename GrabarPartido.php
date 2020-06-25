<?php 

include 'Conexion.php';

$con = Conexion::conectar();
$con->query("insert into partidos (Local, GolesLocal, Visitante, GolesVisitante) values('".$_POST['cbolocal']."','".$_POST['txtgoleslocal']."','".$_POST['cbovisitante']."','".$_POST['txtgolesvisitante']."')");
$sSQL=$con->query("update partidos set Ganador = Local where GolesLocal>GolesVisitante");
$sSQL=$con->query("update partidos set Ganador = Visitante where GolesVisitante>GolesLocal");
$sSQL=$con->query("update partidos set Ganador = 'Empate' where GolesVisitante=GolesLocal");

$GolesLocal=$_POST['txtgoleslocal'];
$GolesVisitante=$_POST['txtgolesvisitante'];
$Local=$_POST['cbolocal'];
$Visitante=$_POST['cbovisitante'];

	if($GolesLocal>$GolesVisitante)
	{
	$con->query("update posiciones set GF=GF+'$GolesLocal', GC=GC+'$GolesVisitante', PJ=PJ+1, PG=PG+1, PTS=PG*3+PE*1+PP*0 where Equipo ='".$_POST['cbolocal']."' ");
	$con->query("update posiciones set GF=GF+'$GolesVisitante', GC=GC+'$GolesLocal', PJ=PJ+1, PP=PP+1, PTS=PG*3+PE*1+PP*0 where Equipo ='".$_POST['cbovisitante']."' ");	
	}
	else if($GolesLocal<$GolesVisitante)
	{
		$con->query("update posiciones set GF=GF+'$GolesLocal', GC=GC+'$GolesVisitante', PJ=PJ+1, PP=PP+1, PTS=PG*3+PE*1+PP*0 where Equipo ='".$_POST['cbolocal']."' ");
		$con->query("update posiciones set GF=GF+'$GolesVisitante', GC=GC+'$GolesLocal', PJ=PJ+1, PG=PG+1, PTS=PG*3+PE*1+PP*0 where Equipo ='".$_POST['cbovisitante']."' ");	
	}
	else if($GolesLocal=$GolesVisitante)
	{
		$con->query("update posiciones set GF=GF+'$GolesLocal', GC=GC+'$GolesVisitante', PJ=PJ+1, PE=PE+1, PTS=PG*3+PE*1+PP*0 where Equipo ='".$_POST['cbolocal']."' ");
		$con->query("update posiciones set GF=GF+'$GolesVisitante', GC=GC+'$GolesLocal', PJ=PJ+1, PE=PE+1, PTS=PG*3+PE*1+PP*0 where Equipo ='".$_POST['cbovisitante']."' ");
	}


$con->close();
header("location:Index.html");
?>