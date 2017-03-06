PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE "login_Config" (
    "id" integer NOT NULL PRIMARY KEY,
    "page" varchar(30) NOT NULL,
    "config" varchar(50) NOT NULL UNIQUE,
    "value" varchar(60) NOT NULL
);
INSERT INTO "login_Config" VALUES(1,'login','name','520721');
INSERT INTO "login_Config" VALUES(2,'login','password','0916336291');
COMMIT;
