CREATE TABLE proprietaires (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    adress VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    cin VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL
);



CREATE TABLE vehicules (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    matricule VARCHAR(255) NOT NULL,
    type ENUM('voiture', 'moto', 'camion') NOT NULL,
    proprietaire_id BIGINT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (proprietaire_id) REFERENCES proprietaires(id)
);



CREATE TABLE trajets (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    entre VARCHAR(255) NOT NULL,
    date_entre VARCHAR(255) NOT NULL,
    sortie VARCHAR(255) NOT NULL,
    date_sortie VARCHAR(255) NOT NULL,
    vehicule_id BIGINT NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (vehicule_id) REFERENCES vehicules(id)
);



CREATE TABLE peages (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    price VARCHAR(255) NOT NULL,
    emplacement VARCHAR(255) NOT NULL,
    trajet_id BIGINT NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (trajet_id) REFERENCES trajets(id)
);



CREATE TABLE events (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('arrêts', 'dépassements de vitesse', 'accidents', 'réparations') NOT NULL,
    description TEXT NOT NULL,
    event_time VARCHAR(255) NOT NULL,
    vehicule_id BIGINT NOT NULL,
    trajet_id BIGINT NOT NULL,
    created_at TIMESTAMP NULL DEFAULT NULL,
    updated_at TIMESTAMP NULL DEFAULT NULL,
    FOREIGN KEY (vehicule_id) REFERENCES vehicules(id),
    FOREIGN KEY (trajet_id) REFERENCES trajets(id)
);









insertion des valeurs :
-----------------------

-- proprietaire table --

INSERT INTO proprietaires (full_name, adress, phone, cin) 
VALUES 
('salma', 'marrakech', '12345678', '1234'), 
('amina', 'casablanca', '87654321', '5678'), 
('youssef', 'rabat', '12349876', '9101');




-- vehicules table --

INSERT INTO vehicules (matricule, type, proprietaire_id)
VALUES
('ABC123', 'voiture', 1),
('XYZ456', 'moto', NULL),
('DEF789', 'camion', 2);




-- trajets table --

INSERT INTO trajets (entre, date_entre, sortie, date_sortie, vehicule_id)
VALUES
('Point A', '2024-06-25 13:00', 'Point B', '2024-06-25 14:34', 1),
('Point C', '2024-06-27 15:00', 'Point D', '2024-06-27 15:58', 2);




-- peage table --

INSERT INTO peages (price, emplacement, trajet_id)
VALUES
('60', 'Peage A', 1),
('35', 'Peage B', 2);




-- events table --

INSERT INTO events (type, description, event_time, vehicule_id, trajet_id)
VALUES
('arrêts', 'testtesttesttesttesttesttest', '2024-06-25 10:00:00', 1, 1),
('accidents', 'testtesttesttesttesttesttesttest', '2024-06-27 15:30:00', 2, 2);