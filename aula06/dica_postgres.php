sudo apt update
sudo apt install postgresql
sudo apt install php7.0-pgsql
sudo service apache2 restart

-----------------------------------------------
Permissão na pasta
sudo chmod 777 -R 502/

-----------------------------------------------
sudo su
su postgres
psql

-----------------------------------------------
CREATE DATABASE aula06;
CREATE USER aula06 PASSWORD 'aula06';
ALTER DATABASE aula06 OWNER TO aula06;

-----------------------------------------------
\q
exit
exit

-----------------------------------------------
psql -h localhost -U aula06 aula06

-----------------------------------------------
CREATE TABLE tb_alunos(
	id SERIAL PRIMARY KEY,
	nome VARCHAR(255),
	email VARCHAR(255)
);

-----------------------------------------------
INSERT INTO tb_alunos(nome,email) VALUES ('Chris Hemsworth','chris_hemsworth@nam.com');
INSERT INTO tb_alunos(nome,email) VALUES ('Emma Thompson','emma.thompson@semper.com');
INSERT INTO tb_alunos(nome,email) VALUES ('Jeremy Renner','jeremy.renner@eu.com');
INSERT INTO tb_alunos(nome,email) VALUES ('Leighton Meester','leighton.meester@adipiscing.com');
INSERT INTO tb_alunos(nome,email) VALUES ('Ariana Grande','arianagrande@egestas.com');
INSERT INTO tb_alunos(nome,email) VALUES ('Jensen Ackles','jensenackles@venenatis.com');
INSERT INTO tb_alunos(nome,email) VALUES ('Alice Eve','alice_eve@urna.com');
