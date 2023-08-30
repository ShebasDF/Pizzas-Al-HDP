1 create database prueba
2 drop database prueba




-------------------------------------------------------------------------------------------
crear la tabla de "user"

CREATE TABLE USERS(id_user int(11) not null AUTO_INCREMENT PRIMARY KEY,
                   username varchar(20) not null,
                   password  char(64) not null,
                   email varchar(80) not null,
                   active ENUM ("si","no") DEFAULT "si") ENGINE=INNODB DEFAULT charset=utf8mb4 COLLATE utf8mb4_general_ci;

                  alter table users add column created_at timestamp;  (este comando edita la relacion agregando una columna)

verificar si tenemos created-at

login/sql

describe users; ( cntrol+enter) o continuar

si no aparece: tipear

alter table users add column create_at timestamp; (crear columna)

alter table users modify column create_at timestamp(modificar) default current_timestamp(fecha de moficacion)
alter table drop column (nombre de la columna) (para eliminar columna)
insert into users (cargando filas/datos a tabla)

select * from users; ((para ver los datos guardados)*(all=todo)
select username,password from users; (solo muestra las columnas indicadas)
select username,PASSWORD,date(created_at) FROM users;(muestra solo la fecha)
select count(*) from users;(cuenta la cantidad de filas)
select username active from users;(muestra los usuarios de active)
select upper(USERNAME), active from users;(los usuarios en mayuscula)


INSERT into users VALUES (null,'pepe',sha2('abcde',256),'pepe@gmail.com','no','21-08-24');

