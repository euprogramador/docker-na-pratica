<?php
echo "<br>servidor: " . getenv("HOSTNAME");
echo "<br><br>Banco: ";
echo "<br>host: " . getenv("BANCO_HOST");
echo "<br>porta: " . getenv("BANCO_PORTA");
echo "<br>database: " . getenv("BANCO_DATABASE");
echo "<br>usuario: " . getenv("BANCO_USUARIO");
echo "<br>senha: " . getenv("BANCO_SENHA");
echo phpinfo();

