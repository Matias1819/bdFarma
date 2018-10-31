
<?php
require_once 'BOL/persona.php';
require_once 'BOL/ciclo.php';
require_once 'BOL/dtequipo.php';
require_once 'DAO/persona.modelo.php';
require_once 'DAO/ciclo.modelo.php';
require_once 'DAO/dtequipo.modelo.php';
// Lógica
$alm = new ciclo();
$model = new ciclomodelo();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'registrar':

            $alm->__SET('ciclo',$_POST['ciclo']);
            $alm->__SET('participacion',$_POST['participacion']);
            $alm->__SET('dnidel',$_POST['dnidel']);
            $alm->__SET('dnitut',$_POST['dnitut']);
            

			$model->Registrar($alm);
			header('Location: index.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['dni']);
			header('Location: index.php');
			break;
	}
}

?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>EPICS</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">
REGISTRAR PERSONA
        <div class="pure-g">
            <div class="pure-u-1-12">

                <form action="?action=registrar" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">


                    <table style="width:500px;" border="0">
                        <tr>
                            <th style="text-align:left;">Dni</th>
                            <td><input type="text" name="dni" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Nombres</th>
                            <td><input type="text" name="nombres" value="" style="width:100%;" /></td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Apellidos</th>
                            <td><input type="text" name="apellidos" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Correo</th>
                            <td><input type="text" name="correo" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>


            </div>
        </div>
        REGISTRAR DTEQUIPO
        <div class="pure-g">
            <div class="pure-u-1-12">

                <form action="?action=registrar" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">


                    <table style="width:500px;" border="0">
                        <tr>
                            <th style="text-align:left;">DNIIntegrante</th>
                            <td><input type="text" name="dni" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">idEquipo</th>
                            <td><input type="text" name="nombres" value="" style="width:100%;" /></td>
                        </tr>

                        
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>


            </div>
        </div>

REGISTRAR CICLO
        <div class="pure-g">
            <div class="pure-u-1-12">

                <form action="?action=registrar" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">


                    <table style="width:500px;" border="0">
                        <tr>
                            <th style="text-align:left;">Ciclo</th>
                            <td><select name="ciclo" value="">
                                    <option>I</option>
                                    <option>II</option>
                                    <option>III</option>
                                    <option>IV</option>
                                    <option>V</option>
                                    <option>VI</option>
                                    <option>VII</option>
                                    <option>VIII</option>
                                    <option>IX</option>
                                    <option>X</option>
   
                            </select>
                                <!--<input type="text" name="ciclo" value="" style="width:100%;" />-->
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Participacion</th>
                            <td>
                                <select name="participacion" value="" size="1">
                                    <option value="true">true</option>
                                    <option value="false">false</option>
                                </select>
                               
                            </td>
                        </tr>

                        <tr>
                            <th style="text-align:left;">Dni Delegado</th>
                            <td><input type="text" name="dnidel" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Dni Tutor</th>
                            <td><input type="text" name="dnitut" value="" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>


            </div>
        </div>

    </body>
</html>
