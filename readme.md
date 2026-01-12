# TalentHub – Authentification Multi-Rôles (PHP MVC sans framework)

## Description du projet

Ce projet consiste à développer un **socle d’authentification multi-rôles** pour **TalentHub**, une plateforme de recrutement reliant candidats et recruteurs.

L’objectif est de mettre en place une **architecture MVC propre, sécurisée et extensible**, développée en **PHP (OOP) sans framework**, qui servira de fondation aux futures fonctionnalités de la plateforme.

---

## Objectifs du projet

- Implémenter une architecture **MVC from scratch**
- Mettre en place un **router centralisé**
- Gérer une **authentification sécurisée**
- Implémenter une **gestion multi-rôles**
- Protéger les routes selon le rôle utilisateur
- Garantir la **maintenabilité et l’évolutivité** du code

---

## Rôles gérés

| Rôle       | Description |
|------------|------------|
| Candidate  | Peut s’inscrire, se connecter et accéder à son dashboard |
| Recruiter  | Peut s’inscrire, se connecter et accéder à son dashboard |
| Admin      | Peut uniquement se connecter et accéder au back-office |

Chaque rôle possède :
- Ses propres routes (`/candidate/*`, `/recruiter/*`, `/admin/*`)
- Ses propres contrôleurs
- Ses propres vues protégées

---

## Fonctionnalités

### Authentification
- Inscription (Candidate & Recruiter)
- Connexion (tous les rôles)
- Déconnexion
- Hashage des mots de passe avec `password_hash()`
- Vérification avec `password_verify()`

### Gestion des rôles
- Attribution automatique du rôle
- Stockage du rôle en session
- Redirection après login selon le rôle

### Protection des routes
- Routes publiques : `/`, `/login`, `/register`
- Routes protégées selon le rôle
- Pages d’erreur 403 et 404

---

## Architecture du projet

```
talenthub-auth/
├── public/
│   └── index.php
│
├── src/
│   ├── Controllers/
│   │   ├── AuthController.php
│   │   ├── CandidateController.php
│   │   ├── RecruiterController.php
│   │   └── AdminController.php
│
│   ├── Services/
│   │   └── AuthService.php
│
│   ├── Models/
│   │   ├── User.php
│   │   └── Role.php
│
│   ├── Repositories/
│   │   ├── UserRepository.php
│   │   └── RoleRepository.php
│
│   ├── Views/
│   │   ├── auth/
│   │   │   ├── login.php
│   │   │   └── register.php
│   │   ├── candidate/
│   │   │   └── dashboard.php
│   │   ├── recruiter/
│   │   │   └── dashboard.php
│   │   ├── admin/
│   │   │   └── dashboard.php
│   │   └── errors/
│   │       └── 403.php
│
│   ├── Router.php
│   └── Database.php
│
├── config/
│   └── database.php
│
├── sql/
│   └── schema.sql
│
└── README.md
```