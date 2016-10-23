create table developer
(
	id serial primary key,
	name text,
	surname text,
	experienceInMonths int,
	startDate timestamp,
	age int,
	birthDate timestamp
);

create table technology
(
	id serial primary key,
	name text,
	rating double -- 0  - 1
);

create table developer_technology
(
	id serial primary key,
	id_developer int references developer(id), -- 1,2,3,4,5
	id_technology int referenecs technology(id) -- 1,2,3,4,5,6
);

create table team
(
	id serial primary key,
	name text
);

create table team_developer
(
	id serial primary key,
	id_team int references team(id),
	id_developer int references developer(id)
);