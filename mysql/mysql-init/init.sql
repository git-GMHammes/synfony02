CREATE DATABASE IF NOT EXISTS synfony02;
USE synfony02;

-- Verifica se o usuário existe antes de tentar criá-lo
CREATE USER IF NOT EXISTS 'root'@'%' IDENTIFIED BY 'pass123';
GRANT ALL PRIVILEGES ON *.* TO 'root'@'%' WITH GRANT OPTION;
FLUSH PRIVILEGES;
