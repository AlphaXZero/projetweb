# Project Web — Progressive Project

A PHP web application built as part of a progressive school project. It features user authentication, a contact form, database integration, session management, and a JavaScript weather widget powered by the Open-Meteo API.

---

## Features

- User registration and login with secure password hashing (`password_hash`)
- Session management with `session_regenerate_id` and `httponly` / `samesite` cookie flags
- PDO prepared statements for all database queries
- Contact form with server-side validation and feedback
- Weather widget using the [Open-Meteo API](https://open-meteo.com/) — displays temperature, weather condition and wind speed
- Scroll animations via [AOS (Animate On Scroll)](https://michalsnik.github.io/aos/)
- Custom JavaScript classes: `Weather` (API integration) and `Toast` (notification system)

---

## Tech Stack

- **Backend** — PHP 8+
- **Database** — MariaDB (`utf8mb4`)
- **Frontend** — Vanilla JS, CSS custom properties
- **Libraries** — AOS 2.3.4
- **API** — Open-Meteo (weather by coordinates)
- **Server** — Apache

---

## Database Setup

Run the following SQL to create the database and the users table:

```sql
CREATE DATABASE bdd_project_web
DEFAULT CHARACTER SET utf8mb4
DEFAULT COLLATE utf8mb4_unicode_ci;

USE bdd_project_web;

CREATE TABLE t_user_usr (
    usr_id              INT AUTO_INCREMENT PRIMARY KEY,
    usr_nickname        VARCHAR(255)   NOT NULL UNIQUE,
    usr_email           VARCHAR(255)   NOT NULL UNIQUE,
    usr_password        VARBINARY(255) NOT NULL,
    usr_account_active  BOOLEAN        DEFAULT 1,
    usr_activation_code CHAR(5)        NULL
) ENGINE=InnoDB;
```

Then update `config/config.php` with your own database credentials.

---

## Apache Setup

See [`misc/apache_setup.md`](misc/apache_setup.md) for the full setup guide. Quick summary:

## AOS Animation Reference

Animations are applied via `data-aos` attributes on any HTML element.

| Attribute | Example value | Effect |
|---|---|---|
| `data-aos` | `fade-up` | Appears while moving up |
| `data-aos` | `fade-in` | Appears with a fade |
| `data-aos` | `fade-left` / `fade-right` | Appears from the side |
| `data-aos-delay` | `"100"` | Delay in ms before animation starts |

AOS is initialised in `footer.php`:
```javascript
AOS.init({ duration: 600, once: true });
```

---

## Credits

- CSS was made with the help of ClaudAI
- Favicon — <a href="https://icons8.com/icon/m2pDdOp2qrzE/rock" target="_blank">Stone</a> icon by <a href="https://icons8.com" target="_blank">Icons8</a>
- Weather data — [Open-Meteo](https://open-meteo.com/) (free, no API key required)
- Scroll animations — [AOS](https://michalsnik.github.io/aos/)