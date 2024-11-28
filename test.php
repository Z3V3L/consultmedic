<?php

$textoComoCadena="[4, ..., ., *, Dra, ., CLAUDIA, LILIANA, SANCHEZ, ROJAS, Pana, MEDICO, CIRUJANO, CED, ., PROF., 3810105, UNIVERSIDAD, NACIONAL, AUTONOMA, DE, MEXICO, AV, ., IGNACIO, LOPEZ, RAYON, ,, MZ, ., 35, LT., 10, LOCAL, 3, ,, No, ., S/N, ,, COLONIA, LAS, AMERICAS, ,, 55076, ,, RECETA, 1000100818, 00018, FECHA, Y, HORA, DE, ELABORACIÓN, :, 19/11/2024, 15:13, NÚMERO, DE, EXPEDIENTE, :, 0009513179, ECATEPEC, DE, MORELOS, ,, ESTADO, DE, MEXICO, ., NOMBRE, :, —, FERNANDO, BEJAR, ALONSO, EDAD, :, 58, años, FECHA, DE, NACIMIENTO, :, 14/10/1966, SEXO, :, MASCULINO, TA, ., 130/90, mm/Hg, Temp, ., 36.5, *, C, F.C, ., 90, xmin, Peso, 88, Kg, FR, ., 20xmin, Talla, m, Circun, ., Abdom, cm, IMC, Kg/m2, T.D.1, HIPERTENSION, ESENCIAL, (, PRIMARIA, ), Alergias, PENICILINA, Indicaciones, generales, :, EVITAR, CAMBIOS, DE, CLIMA, Y, POLVO, DIETA, BAJA, EN, HARINAS, ,, SAL, Y, GRASAS, REGRESAR, A, CONSULTA, LA, ULTIMA, SEMANA, DE, ENERO, 2025, TRATAMIENTO, 1.-, CETIRIZINA, TABLETAS, 10MG, 1, TAB, CADA, 12, HRS, DURANTE, 5, DIAS, VÍA, DE, ADMINISTRACIÓN, ORAL, :, 2.-, PARACETAMOL, TABLETAS, 500MG, 1, TAB, CADA, 8, HRS, DURANTE, 3, DIAS, VÍA, DE, ADMINISTRACIÓN, ORAL, 3.-, SIMIWELL, FORTE, BETA, /, VITAMINA, C, /, ZINC, /, D3, CAPSULAS, 200MG/300MG/19MG/400U1, 1, CAP.CADA, 24, HRS, DURANTE, 1, MES, VÍA, DE, ADMINISTRACIÓN, ORAL, ,, DESPUES, DEL, DESAYUNO, 4.-, LOSARTAN, POTASICO, TABLETAS, 50MG, 1, TAB, CADA, 24, HRS, DURANTE, INDEFINIDO, VÍA, DE, ADMINISTRACIÓN, ORAL, ,, A, LAS, 9, AM]";
echo $textoComoCadena."<br><br>";
//$textoComoCadena= '"'. escapeshellarg($textoComoCadena).'"';
//echo $textoComoCadena ."<br><br>";
//$comando = "/bin/bash; source consult-py/bin/activate";
$comando = "/bin/bash -c 'source consult-py/bin/activate; python3 genai-test.py \"".$textoComoCadena."\"'";

//$comando = "python3 nltk1.py 'bla bla el de la trt'";
//$comando = "tesseract Receta-Simi.jpg stdout -l spa -c debug_file=/dev/null";

exec($comando . " 2>&1", $output, $codigoSalida);
if ($codigoSalida === 0) {
	echo "El texto detectado es: ";
	// Tenemos el texto como un array, podemos unirlo
	$textoComoCadena = join("\n", $output);
	echo "<pre>";
	echo $textoComoCadena;
	echo "</pre>";
} else {
	var_dump($output);
	echo "<br> Error: " . $codigoSalida;

}
