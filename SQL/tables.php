<!-- 1. Créer la base de données : -->

CREATE TABLE proprietaires (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(255) NOT NULL,
    adress VARCHAR(255) NOT NULL,
    phone VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP NULL DEFAULT NULL
);



CREATE TABLE vehicules (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    matricule VARCHAR(255) NOT NULL,
    type ENUM('voiture', 'moto', 'camion') NOT NULL,
    proprietaire_id BIGINT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (proprietaire_id) REFERENCES proprietaires(id)
);



CREATE TABLE trajets (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    entre VARCHAR(255) NOT NULL,
    date_entre VARCHAR(255) NOT NULL,
    sortie VARCHAR(255) NOT NULL,
    date_sortie VARCHAR(255) NOT NULL,
    vehicule_id BIGINT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (vehicule_id) REFERENCES vehicules(id)
);



CREATE TABLE peages (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    price VARCHAR(255) NOT NULL,
    emplacement VARCHAR(255) NOT NULL,
    trajet_id BIGINT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (trajet_id) REFERENCES trajets(id)
);



CREATE TABLE events (
    id BIGINT AUTO_INCREMENT PRIMARY KEY,
    type ENUM('arrêts', 'dépassements de vitesse', 'accidents', 'réparations') NOT NULL,
    description TEXT NOT NULL,
    event_time VARCHAR(255) NOT NULL,
    vehicule_id BIGINT NOT NULL,
    trajet_id BIGINT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (vehicule_id) REFERENCES vehicules(id),
    FOREIGN KEY (trajet_id) REFERENCES trajets(id)
);







<!-- 2. Insertion de données : -->



-- proprietaire table --

INSERT INTO proprietaires (full_name, adress, phone) 
VALUES 
('salma', 'marrakech', '12345678'), 
('amina', 'casablanca', '87654321'), 
('youssef', 'rabat', '12349876');




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







<!-- 3. Requêtes SQL : -->

---------- 1 ------------

SELECT * FROM vehicules join proprietaires on proprietaire_id = proprietaires.id;



---------- 2 ------------

SELECT * FROM trajets where vehicule_id = '1';



---------- 3 ------------

SELECT * FROM peages WHERE DATE(created_at) = CURDATE() ;



---------- 4 ------------

SELECT
    v.matricule AS vehicule_matricule,
    DATE(t.date_entre) AS date_trajet,
    COUNT(*) AS nombre_trajets
FROM
    trajets t
JOIN
    vehicules v ON t.vehicule_id = v.id
GROUP BY
    v.matricule, DATE(t.date_entre);
    



---------- 5 ------------

SELECT COUNT(*) AS total FROM trajets;




---------- 6 ------------

SELECT
v.matricule AS matricule,
MONTH(CURDATE()) AS mois,
COUNT(*) AS nombreTrajet
FROM trajets t 
JOIN vehicules v 
ON v.id = t.vehicule_id
WHERE MONTH(t.date_entre) = MONTH(CURDATE()) 
GROUP BY
v.matricule
ORDER BY
nombreTrajet DESC;


