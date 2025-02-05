use proyecto;


create table votos(
    id int auto_increment primary key,
    cantidad int default 0,
    idPr int not null,
    idUs varchar(20) not null,
    constraint fk_votos_usu foreign key(idUs) references usuarios(usuario) on delete cascade on update cascade,
    constraint fk_votos_pro foreign key(idPr) references productos(id) on delete cascade on update cascade
);


INSERT INTO usuarios VALUES ('usuario1', sha2('pusuario1', 256) );
INSERT INTO usuarios VALUES ('usuario2', sha2('pusuario2', 256) );
INSERT INTO usuarios VALUES ('usuario3', sha2('pusuario3', 256) );
INSERT INTO usuarios VALUES ('usuario4', sha2('pusuario4', 256) );