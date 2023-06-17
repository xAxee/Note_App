
# Notatki

Prosty projekt w laravel do do zarzadzania notatkami z widokami oraz api.<br>
Stworzony jako projekt do szkoły oraz w celu rozpoczęcia nauki nad frameworkiem laravel.
## Pobieranie
 - Stworz nowy projekt laravel ```composer create-project --prefer-dist laravel/laravel Note_App```
 - Pobierz repozytorium i wypakuj do projektu
## Routing
### Views
```
List    | /notes
Create  | /notes/create
Details | /notes/details/{note}
Edit    | /notes/edit/{note}
```
### Api
```
GET    | api/notes
POST   | api/notes
GET    | api/notes/{note}
PUT    | api/notes/{note}
DELETE | api/notes/{note}
```