https://github.com/Mateusz-Marciniuk/ZSPM/blob/main/DML.md
-- Tworzymy bazę testową
CREATE DATABASE sklep_dml;
USE sklep_dml;

-- Tworzymy strukturę tabel do ćwiczeń
CREATE TABLE klienci (
id INT PRIMARY KEY AUTO_INCREMENT,
imie VARCHAR(50) NOT NULL,
nazwisko VARCHAR(50) NOT NULL,
email VARCHAR(100) UNIQUE,
telefon VARCHAR(15),
miasto VARCHAR(50),
data_rejestracji DATE
);

CREATE TABLE produkty (
id INT PRIMARY KEY AUTO_INCREMENT,
nazwa VARCHAR(200) NOT NULL,
cena DECIMAL(10,2) NOT NULL,
ilosc_magazyn INT DEFAULT 0,
kategoria VARCHAR(50)
);




INSERT INTO klienci (imie, nazwisko, email, telefon, miasto, data_rejestracji)
VALUES 
('Jan', 'Kowalski', 'jan.kowalski@email.com', '123456789', 'Warszawa', '2024-01-15'),
('Anna', 'Nowak', 'anna.nowak@email.com', '987654321', 'Kraków', '2024-02-10'),
('Piotr', 'Wiśniewski', 'piotr.wisniewski@email.com', '456123789', 'Gdańsk', '2024-03-05'),
('Maria', 'Wójcik', 'maria.wojcik@email.com', '321654987', 'Wrocław', '2024-04-20'),
('Tomasz', 'Kaczmarek', 'tomasz.kaczmarek@email.com', '789456123', 'Poznań', '2024-05-12'),
('Katarzyna', 'Mazur', 'katarzyna.mazur@email.com', '654789321', 'Łódź', '2024-06-18'),
('Michał', 'Krawczyk', 'michal.krawczyk@email.com', '147258369', 'Szczecin', '2024-07-22'),
('Agnieszka', 'Zając', 'agnieszka.zajac@email.com', '963852741', 'Lublin', '2024-08-30'),
('Paweł', 'Król', 'pawel.krol@email.com', '852963741', 'Katowice', '2024-09-14'),
('Joanna', 'Wieczorek', 'joanna.wieczorek@email.com', '369258147', 'Bydgoszcz', '2024-10-01');

INSERT INTO produkty VALUES
(NULL, 'Mysz optyczna', 49.99, 20, 'Elektronika'),
(NULL, 'Klawiatura mechaniczna', 199.99, 15, 'Elektronika'),
(NULL, 'Monitor LED 24"', 599.00, 10, 'Elektronika'),
(NULL, 'Słuchawki bezprzewodowe', 129.90, 25, 'Audio'),
(NULL, 'Powerbank 10000mAh', 89.99, 30, 'Akcesoria'),
(NULL, 'Smartfon X200', 1499.00, 8, 'Telefony'),
(NULL, 'Etui na telefon', 29.99, 50, 'Akcesoria'),
(NULL, 'Ładowarka USB-C', 39.99, 40, 'Akcesoria'),
(NULL, 'Tablet 10"', 899.00, 12, 'Elektronika'),
(NULL, 'Głośnik Bluetooth', 159.99, 18, 'Audio'),
(NULL, 'Pendrive 64GB', 34.90, 60, 'Pamięć'),
(NULL, 'Karta SD 128GB', 79.99, 35, 'Pamięć'),
(NULL, 'Laptop Pro 15"', 3499.00, 5, 'Komputery'),
(NULL, 'Torba na laptopa', 99.99, 22, 'Akcesoria'),
(NULL, 'Router Wi-Fi', 249.00, 14, 'Sieci'),
(NULL, 'Kamera internetowa', 139.00, 17, 'Elektronika'),
(NULL, 'Mikrofon USB', 119.99, 20, 'Audio'),
(NULL, 'Zasilacz 500W', 229.00, 9, 'Komponenty'),
(NULL, 'Wentylator CPU', 89.00, 16, 'Komponenty'),
(NULL, 'Podkładka pod mysz', 19.99, 45, 'Akcesoria');