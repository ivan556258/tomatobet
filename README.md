for install

create db postgre 

need login in postgress

docker-compose exec postgres bash

login in user postgres

su postgres

change mode psql

psql

next create db and user's with grant privileges and add roles

create database tomato;
create user tomato with password '1234';
GRANT ALL PRIVILEGES ON DATABASE "tomato" to tomato;
ALTER ROLE tomato CREATEROLE CREATEDB SUPERUSER BYPASSRLS REPLICATION;

---------------------------------------------------------------
git clone