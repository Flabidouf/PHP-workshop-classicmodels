GRANT ALL PRIVILEGES ON `%`.* TO 'models-user'@'%'; /* added an s to model-user to match .env*/
FLUSH PRIVILEGES;

/* This SQL statement is used to grant all privileges on all databases and tables (indicated by %.*) 
to a MySQL user with the username 'model-user' when connecting from any host (indicated by '%'). */