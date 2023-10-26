Create database BlueRiotTattoo;
Use BlueRiotTattoo;
create table cliente(
IDCliente int not null auto_increment,
Nombre_Cliente varchar(20) not null,
Apellidos_Cliente varchar(30) not null,
Telefono_Cliente int(10) not null,
Genero_Cliente varchar(15) not null,
NumCita_Cliente int(100) not null,
primary key(IDCliente)
) engine=innoDB;

create table tatuador(
Numero_Licencia int primary key not null,
Nombre_tatuador varchar (40) not null,
Especialicacion_Tatuador varchar (25),
);
