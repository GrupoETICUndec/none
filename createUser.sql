#https://www.digitalocean.com/community/tutorials/crear-un-nuevo-usuario-y-otorgarle-permisos-en-mysql-es
CREATE USER 'usuario'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON Prueba.* TO 'usuario'@'localhost';
FLUSH PRIVILEGES;