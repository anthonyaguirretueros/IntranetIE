drop database intranettesting;
create database intranettesting;
use intranettesting;

create table login_attemps(
	id int,
    ip_address varchar(45),
    login varchar(100),
    time int
);

create table nacionalidad(
	idNacionalidad int auto_increment primary key,
    nombreNacionalidad varchar(100)
);

insert into nacionalidad values(null,'Mexicana');
insert into nacionalidad values(null,'Peruana');
insert into nacionalidad values(null,'Chilena');

create table estado(
	idEstado int unsigned auto_increment primary key,
    nombre varchar(100)
);

insert into estado values(null,'Activo');
insert into nacionalidad values(null,'Inactivo');

create table rol(
	id int unsigned auto_increment primary key,
    name varchar(20),
    description varchar(100)
);

insert into rol values(null,'administrador','Administradores');
insert into rol values(null,'profesor','Profesores');
insert into rol values(null,'alumno','Alumnos');
insert into rol values(null,'apoderado','Apoderados');

create table usuario(
	id int unsigned auto_increment primary key,
    ip_address varchar(45),
    username varchar(100),
    password varchar(255),
    email varchar(254) unique,
    activation_selector varchar(255) unique null,
    activation_code varchar(255) null ,
    forgotten_password_selector varchar(255) unique null,
    forgotten_password_code varchar(255) null,
    forgotten_password_time int unsigned null,
    remember_selector varchar(255) unique null,
    remember_code varchar(255) null,
    created_on int unsigned,
    last_login int unsigned null,
    active int unsigned null,
    first_name varchar(50) null,
    last_name varchar(50) null,
    company varchar(100) null,
    phone varchar(20) null,
    nacionalidadFK int,
    constraint users_nacionalidad foreign key(nacionalidadFK) references nacionalidad(idNacionalidad)
);

insert into usuario values(null, '', 'administrador', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa','luda@gmail.com', null, null, null, null, null, null, null,
126888982,126888982, 1,'LUIS','GALLO DAWSON',null,null, 2);

insert into usuario values(null, '', 'profesor', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa','caty@gmail.com', null, null, null, null, null, null, null,
126888982,126888982, 1,'CATERIN','MORALES DIAZ',null,null, 3);

insert into usuario values(null, '', 'alumno', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa','lesly@gmail.com', null, null, null, null, null, null, null,
126888982,126888982, 1,'LESLY','PEREZ',null,null, 1);

insert into usuario values(null, '', 'apoderado', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa','anthony@gmail.com', null, null, null, null, null, null, null,
126888982,126888982, 1,'ANTHONY','AGUIRRE TUEROS',null,null, 1);


create table usuario_rol(
	id int unsigned auto_increment primary key,
    user_id int unsigned,
    group_id int unsigned,
    constraint usuarioRol_user foreign key(user_id) references usuario(id),
    constraint usuarioRol_group foreign key(group_id) references rol(id)
);

insert into usuario_rol values(null,1,1); /*administrador*/
insert into usuario_rol values(null,2,2); /*profesor*/
insert into usuario_rol values(null,3,3); /*alumno*/
insert into usuario_rol values(null,4,4); /*apoderado*/

create table region(
	idRegion int unsigned auto_increment primary key,
    nombre varchar(100)
);

insert into region values(null,'Maule');
insert into region values(null,'Lima');

create table ciudad(
	idCiudad int unsigned auto_increment primary key,
    nombre varchar(100),
    regionFK int unsigned,
    constraint ciudad_region foreign key(regionFK) references region(idRegion)
);

insert into ciudad values(null,'Talca',1);
insert into ciudad values(null,'Ancon',2);

create table tipoInstitucion(
	idTipoInstitucion int unsigned auto_increment primary key,
    nombreInstitucion varchar(100),
    estadoFK int unsigned ,
	constraint tipoInstitucion_estado foreign key(estadoFK) references estado(idEstado)
);
insert into tipoInstitucion values(null, 'tecnico',1);
insert into tipoInstitucion values(null, 'humanista',1);

create table institucion(
	idInstitucion int unsigned auto_increment primary key,
    nombreInstitucion varchar(100),
    ubicacion varchar(100),
    ciudadFK int unsigned,
    tipoInstitucionFK int unsigned,
    estadoFK int unsigned,
    constraint institucion_ciudad foreign key(ciudadFK) references ciudad(idCiudad),
    constraint institucion_tipoInstitucion foreign key(tipoInstitucionFK) references tipoInstitucion(idTipoInstitucion),
    constraint institucion_estado foreign key(estadoFK) references estado(idEstado)
);
insert into institucion values(null, 'Santa Lucia', 'Los castaños avenida Los rios', 1, 1, 1);
insert into institucion values(null, 'Manzanita', 'Los lomos avenida Madrid', 2, 2, 1);

create table letraAnoAcademico(
	idLetraAnoAcademico int unsigned auto_increment primary key,
    letra char
);
insert into letraAnoAcademico values(null,'A');
insert into letraAnoAcademico values(null,'B');
insert into letraAnoAcademico values(null,'C');
insert into letraAnoAcademico values(null,'D');
insert into letraAnoAcademico values(null,'E');

/*Establece el año en que se curso determinado año academico - 2019, 2020, 2021 etc*/
create table periodoAcademico(
	idPeriodoAcademico int unsigned auto_increment primary key,
    periodo varchar(45),
    estadoFK int unsigned,
	constraint periodoAcademico_estado foreign key(estadoFK) references estado(idEstado)
);
insert into periodoAcademico values(null, '2019', 1);
insert into periodoAcademico values(null, '2020', 1);
insert into periodoAcademico values(null, '2021', 1);


/*Establece diferentes tipos de parentesco // padre, hermano, madre, tio, tia etc.*/
create table tipoParentesco(
	idParentesco int unsigned auto_increment primary key,
    nombreParentesco varchar(100),
    estadoFK int unsigned,
	constraint tipoParentesco_estado foreign key(estadoFK) references estado(idEstado)
);
insert into tipoParentesco values(null, 'padre', 1);
insert into tipoParentesco values(null, 'madre', 1);
insert into tipoParentesco values(null, 'tio', 1);
insert into tipoParentesco values(null, 'hermano', 1);

/*Tabla para establecer relación de parentesco entre usuario del tipo alumno y usuario del tipo apoderado*/
create table apoderadoAlumno(
	idApoderadoAlumno int unsigned auto_increment primary key,
    apoderadoFK int unsigned,
    alumnoFK int unsigned,
    tipoParentescoFK int unsigned,
    constraint apoderadoAlumno_apoderado foreign key(apoderadoFK) references usuario(id),
    constraint apoderadoAlumno_alumno foreign key(alumnoFK) references usuario(id),
    constraint apoderadoAlumno_tipoParentesco foreign key(tipoParentescoFK) references tipoParentesco(idParentesco)
);
insert into apoderadoAlumno values(null, 4,3,3);

create table taller(
	idTaller int unsigned auto_increment primary key,
    nombreTaller varchar(100),
    fechaInicioTaller date,
    fechaTerminoTaller date,
    periodoFK int unsigned,
    estadoFK int unsigned,
    constraint taller_periodoAcademico foreign key(periodoFK) references periodoAcademico(idPeriodoAcademico),
	constraint taller_estado foreign key(estadoFK) references estado(idEstado)
);
INSERT INTO `taller` (`idTaller`, `nombreTaller`, `fechaInicioTaller`, `fechaTerminoTaller`, `periodoFK`, `estadoFK`) VALUES (NULL, 'soccer', '2019-07-27', '2019-08-31', '1', '1');

create table materia(
	idMateria int unsigned auto_increment primary key,
    nombreMateria varchar(100),
    descripcionMateria varchar(100),
    estadoFK int unsigned,
    constraint materia_estado foreign key(estadoFK) references estado(idEstado)
);
insert into materia values(null, 'aritmetica', 'lorem ipsum', 1);
insert into materia values(null, 'historia', 'lorem ipsum', 1);

create table materia_profesor(
	idMateriaProfesor int unsigned auto_increment primary key,
    profesorFK int unsigned,
    materiaFK int unsigned,
    constraint materiaProfesor_profesor foreign key(profesorFK) references usuario(id),
    constraint materiaProfesor_materia foreign key(materiaFK) references usuario(id)
);
insert into materia_profesor values(null, 2,1);
insert into materia_profesor values(null, 2,2);

/*Establece el año academico que cursa - 1° medio - 2° de media - 2° de secuandaria  */
create table curso(
	idCurso int unsigned auto_increment primary key,
    nombreCurso varchar(100),
    periodoAcademicoFK int unsigned,
    idLetraAnoAcademicoFK int unsigned,
    estadoFK int unsigned,
    constraint curso_PeriodoAcademico foreign key(periodoAcademicoFK) references periodoAcademico(idPeriodoAcademico),
    constraint curso_letraAnoAcademico foreign key(idLetraAnoAcademicoFK) references letraAnoAcademico(idLetraAnoAcademico),
	constraint curso_estado foreign key(estadoFK) references estado(idEstado)
);
insert into curso values(null, '1° medio', 1, 1,1);
insert into curso values(null, '2° medio', 1, 1,1);
insert into curso values(null, '1° secundaria', 1, 1,1);
insert into curso values(null, '2° secundaria', 1, 1,1);

create table curso_materia_profesor(
	idCursoMateriaProfesor int unsigned auto_increment primary key,
    cursoFK int unsigned,
    materiaFK int unsigned,
    profesorFK int unsigned,
    constraint cursoMateria_curso foreign key(cursoFK) references curso(idCurso),
    constraint cursoMateria_materia foreign key(materiaFK) references materia(idMateria),
	constraint cursoMateria_profesor foreign key(profesorFK) references usuario(id)
);
insert into curso_materia_profesor values(null, 1, 1, 2);
insert into curso_materia_profesor values(null, 2, 2, 2);


