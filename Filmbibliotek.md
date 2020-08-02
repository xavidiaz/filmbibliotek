### ← Filmbibliotek.md¨

bibliotek för filmer (Titel, Regissör, Produktionsår och Kategori)
Det skall finnas ett formulär där du kan fylla i en ny film att spara i biblioteket samt att det skall finnas separata länkar för varje sparad film där du kan ta bort den från databasen och även uppdatera den i databasen.

Använding av databasen utföras med prepared statements, för att säkra innehållet.

### ← index.php

Php dokument

Huvudsidan till siten.
Innehåller listan av sparade filmer i databasen, med möjlighet att ändra ell radera dem.

### ← add.php

Php dokument

Formulär för addera nya filmer till databasen.
Den utformades med radioknappar. Vilka värden motsvarar kategori id fälten i films tabell och respektive kategorier tabellen.

### ← film.php

Php dokument

Sida med detallier av enda film.

### ← update.php

Php dokument

Sida för att uppdatera filmer.

### ← update.script.php

Php dokument

Script till update.php

### ← config/connect.php

Php dokument

Atkomst till databasen(filmbibliotek.sql).

Innehåll database uppgifter:
• användare
• lösenord
• host
• databas namn

• funktion för att få atkomst till databasen.

### ← config/Filmbibliotek.sql

Sql dokument(databasen).

2 tabel # ← films (5 stycken fält)
• id - int(12), unsigned, auto increment samt primary key
• title - varchar(64)
• director - varchar(64)
• year - year(4)
• category - int(12)

    # ← categories (2 stycken fält)
        • id  - int(10), samt primary key
        • category namn - varchar(32)

Tabellerna är relateras med varandra

### ← templates/header.php

Php dokument

Här ska befina sig header för varje sites sidor.
Atkomst eller återkopling till databasen(Filmbibliotek.sql).

Det innehåller:
• Logo
• Meny

### ← templates/footer.php

Php dokument
Här ska befina sig footer för varje sites sidor.

### ← templates/style.css

Css dokument

Här ska befiner sig formatering for html dokument, för att att få en trevligare utseende.

test 2
