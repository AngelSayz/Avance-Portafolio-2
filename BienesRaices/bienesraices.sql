create database bienesraices;

use bienesraices;

create table sellers(
    id int auto_increment primary key,
    nombre varchar(255) not null,
    email varchar(255) not null unique,
    phone varchar(20) not null
);

insert into sellers (nombre, email, phone) VALUES
('John Doe', 'john.doe@example.com', '123-456-7890');

create table propiedades(
    id int auto_increment primary key,
    titulo varchar(255) not null,
    precio decimal(10, 2) not null,
    imagen varchar(255) not null,
    descripcion text not null,
    num_rooms int not null,
    num_wc int not null,
    num_garage int not null,
    created date not null,
    seller_id int not null,
    foreign key (seller_id) references sellers(id)
);
