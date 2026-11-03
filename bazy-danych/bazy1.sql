-- tworzenie bazy

create database if not exists wypozyczalnia 
character set utf8mb4;

-- tworzenie tabel

create table uczniowie(

    id_ucznia int AUTO_INCREMENT primary key,
    imie varchar(40) not null ,
    nazwisko varchar(80) not null,
    klasa varchar (10) not null,
    email varchar(20) not null unique

);

create table sprzet(
    id_sprzetu int AUTO_INCREMENT primary key,
    nazwa varchar(100) not null,
    numer_seryjny varchar(50) not null unique,
    cena decimal(10,2) not null check(cena >= 0),
    dostepny boolean default true
);

create table wypozyczenia(
    id_wypozyczenia int AUTO_INCREMENT primary key,
    id_ucznia int not null,
    id_sprzetu int not null,
    data_wypozyczenia date not null,
    planowany_zwrot date not null,
    prawdziwy_zwrot date,
    CONSTRAINT fk_wypozyczenia_uczniowie
        foreign key  (id_ucznia)
        references uczniowie(id_ucznia)
        on delete RESTRICT,

    CONSTRAINT fk_wypozyczenia_sprzet
        foreign key  (id_sprzetu)
        references sprzet(id_sprzetu)
        on delete RESTRICT
);