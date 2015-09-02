

<?php

$portAddress = '/dev/tty.usb';

echo ("<h1>Temperatura Via Arduino</h1>");

echo ("<p>Conectando, aguarde ...");
$port = fopen($portAddress, 'w+');

if(!$port)
{
	echo "<br /> Nao foi possivel conectar $portAddress";
}
else
{
	echo "<br />  Conectado com sucesso na porta $portAddress";
}
echo ("</p>");

sleep(3);
//fwrite($port, 't');
fwrite($port);

sleep(1);
echo fgets($port);

fclose($port);

?>
