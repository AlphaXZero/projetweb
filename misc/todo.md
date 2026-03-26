TODOLIST
# code
- [x] Css convenable
- [x] échappé contenu php (htmlspecialchars)
- [ ] vérifier portabilité
- [ ] envoie courriel
- [ ] ajouter vérif pas dans bdd

# readme
- [ ] lien vers todo et comment créer setup apache
- [ ] expliquer projet
- [ ] style avec claude
- [ ] <a target="_blank" href="https://icons8.com/icon/m2pDdOp2qrzE/rock">Stone</a> icon by <a target="_blank" href="https://icons8.com">Icons8</a>
- [ ] i used mariadb

CREATE DATABASE bdd_project_web
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_unicode_ci;

USE bdd_project_web;

CREATE TABLE t_user_usr (
    usr_id INT AUTO_INCREMENT PRIMARY KEY,
    usr_nickname VARCHAR(255) NOT NULL UNIQUE,
    usr_email VARCHAR(255) NOT NULL UNIQUE,
    usr_password VARBINARY(255) NOT NULL,
    usr_account_active BOOLEAN DEFAULT 1,
    usr_activation_code CHAR(5) NULL
) ENGINE=InnoDB;