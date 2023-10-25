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
