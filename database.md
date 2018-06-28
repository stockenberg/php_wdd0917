
# Commandline

```bash
# connect
mysql -u root -p #passwort abfrage kommt

# dump
mysqldump -u root -p databases_name > /file/path/name.sql

# import
mysql -u root -p db_name < /file/path/name.sql
```



# MYSQL Commands

## INSERT
```mysql
INSERT INTO users (username, password, role_id) VALUES ('test', 'secret', 1)
```


## SELECT
```mysql
SELECT * FROM users;
SELECT * FROM users WHERE id = 1 AND username = 'test';
SELECT * FROM users WHERE id = 1 OR username = 'test';
SELECT * FROM users WHERE id = 1 AND NOT username = 'test';
SELECT * FROM users WHERE id = 1 OR NOT username = 'test';
SELECT * FROM users WHERE username LIKE '%t%';
SELECT * FROM users WHERE username REGEXP '(.*)'

// selectiert alle Einträge Limitiert auf einen, letzte ID
SELECT * FROM users ORDER BY id DESC LIMIT 1 

// SELEKTIERT einzigartige Einträge
SELECT DISTINCT(username) FROM users 

SELECT u.username, u.id, r.role_name
FROM users AS u, roles AS r
WHERE u.role_id = r.role_id 
```

## DELETE
```mysql
DELETE FROM users ## DANGER!!!! deletes all entries in table
DELETE FROM users WHERE id = 1 ### the good way
```

## UPDATE
```mysql
UPDATE users SET username = 'Hallo', password = "1234" WHERE id = 7 
```

## Hausaufgabe

1. Denke dir ein fiktives Projekt mit Datenbank aus
2. Erstelle aus diesem Projekt ein E/R Modell
3. Setze (optional) das Projekt in PHPmyadmin Um
4. Schreibe SQL Statements (mind. 20) um verschiedene Abfragen zu gestalten
