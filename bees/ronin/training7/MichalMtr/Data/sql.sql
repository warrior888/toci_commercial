

create  
  table    
      
       developer (id serial   primary key, name  text, surname text,    
                        experienceInMonths int, startDate timestamp, age int, birthDate timestamp);


create table technology
(id serial primary key,
    name text,
    rating double -- 0  - 1
);

create   table developer_technology
(-- komentarz
    id serial 
    
    
    
    primary key,
    id_developer int references developer(id),
    -- 1,2,3,4,5
    
    id_technology int references technology(id)-- 1,2,3,4,5,6
);

create table team
(
    id serial primary key,       -- komentarz --;))(:
    name text
);

create table team_developer -- komentarz 
(
    id serial 
    
                primary key,
    id_team int references team(id),
    id_developer int references developer(id)
);