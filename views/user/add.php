<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."lib/html/header.php"); ?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo')); ?>

<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'controllers/ControllerAdd.php'; ?>">
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    Cliente: <input type="text" name="title" id="title"><br>
    Tipo de Corte: <input type="text" name="description" id="description"><br>
    Quanto tempo máximo de espera vc pode aguardar?
    <select name="horasAtendimento" id="horasAtendimento">
        <option value="">Selecione</option>
        <option value="1">20m</option>
        <option value="2">30m</option>
        <option value="3">1h</option>
    </select><br>
    <input type="submit" value="Marcar Corte">
</form>

<?php include(DIRREQ."lib/html/footer.php"); ?>