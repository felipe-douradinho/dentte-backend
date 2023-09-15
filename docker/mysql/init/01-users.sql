-- create other users
CREATE USER 'dentte'@'localhost' IDENTIFIED BY 'dentte';
CREATE USER 'dentte'@'%' IDENTIFIED BY 'dentte';

GRANT ALL PRIVILEGES ON *.* TO 'dentte'@'localhost';
GRANT ALL PRIVILEGES ON *.* TO 'dentte'@'%';