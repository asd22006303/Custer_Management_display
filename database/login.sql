PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE "login_Config" (
    "id" integer NOT NULL PRIMARY KEY,
    "page" varchar(30) NOT NULL,
    "config" varchar(50) NOT NULL UNIQUE,
    "value" varchar(60) NOT NULL
);
INSERT INTO "login_Config" VALUES(1,'login','name','user');
INSERT INTO "login_Config" VALUES(2,'login','password','admin');
COMMIT;
