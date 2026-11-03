-- tworzenie bazy
CREATE DATABASE IF NOT EXISTS wypozyczalnia CHARACTER SET utf8mb4;

-- tworzenie tabel
CREATE TABLE uczniowie(
    id_ucznia int AUTO_INCREMENT PRIMARY KEY,
    imie varchar(40) NOT NULL,
    nazwisko varchar(80) NOT NULL,
    klasa varchar (10) NOT NULL,
    email varchar(20) NOT NULL UNIQUE
);

CREATE TABLE sprzet(
    id_sprzetu int AUTO_INCREMENT PRIMARY KEY,
    nazwa varchar(100) NOT NULL,
    numer_seryjny varchar(50) NOT NULL UNIQUE,
    cena decimal(10, 2) NOT NULL CHECK(cena >= 0),
    dostepny boolean DEFAULT TRUE
);

CREATE TABLE wypozyczenia(
    id_wypozyczenia int AUTO_INCREMENT PRIMARY KEY,
    id_ucznia int NOT NULL,
    id_sprzetu int NOT NULL,
    data_wypozyczenia date NOT NULL,
    planowany_zwrot date NOT NULL,
    prawdziwy_zwrot date,
    CONSTRAINT fk_wypozyczenia_uczniowie FOREIGN KEY (id_ucznia) REFERENCES uczniowie(id_ucznia) ON DELETE RESTRICT,
    CONSTRAINT fk_wypozyczenia_sprzet FOREIGN KEY (id_sprzetu) REFERENCES sprzet(id_sprzetu) ON DELETE RESTRICT
);

ALTER TABLE
    uczniowie
ADD
    COLUMN telefon varchar(20);

ALTER TABLE
    sprzet
MODIFY
    nazwa varchar(150) NOT NULL;

-- komentarz jednolimiowy
/*
 komentarz
 wiloliniowy
 */
/*
 
 alter table: change, rename column staran_nazwa nowa_nazwa,
 
 */