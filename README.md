

# DACHA - PHP Grundstruktur för Inloggning och Databasanvändning

DACHA-projektet är en grundläggande PHP-struktur med sex filer som syftar till att möjliggöra inloggning och loggning ut. Projektet är kopplat till en MySQL-databas med namnet DACHA.



# Komma igång med DACHA

1. Öppna Xampp, starta MySQL database och Apache - webbservern

2. öppna localhost/phpmyadmin för att se databasen.

3. Hämta projektet från Github 

4. Skriv i webbläsaren localhost/DACHA02/login.php 



# Hur ska man använda git i terminal

1. för att hämtar prjeket så ska man clona  det till sin dator genom att skriva in kommandot: git clone <URL till github>. 

Viktigt att clona det direkt till XAMPP/htdocs/dacha så annars kommer allt att ligga under /var/
```bash
git clone https://github.com/dachateam/DACHA02 "Branch namn"

```
2. För att kunna göra ändringar och sedan pusha projektet  

- Sför att lägga alla nya filer till (om de inte redan finns i repo:et). Skriv 
```bash
git add .
```
- skriv kommadot nedan för commit ändrigar som är gjorts
```bash
git commit -m "Din kommentar här"
```
- Slutligen när du vill pusha dina ändringar till repo:et ska
```bash
git push origin master
```
bli skriven. Se till att du har valt rätt branch!


## FELMELDINGAR MÅSTE LÖSAS PÅ ETT AV DESETA SÄNDA STEGEN 

-  **Felmeddelandet: fatal: remote error: Invalid username or password**
*Lösning*: Detta beror på att GitHub har bytt lite av sitt säkerhetsystem. Du måste generera en ny ssh keypair.

## Viktigt med Git 

1. för att kunna göra en push så ska man alltid se till att man har gjort en pull på senaste version, obs! tar inte bort tidigare kod för att en viss uppgift ska fungera utan, eftersom det riskerar att förlorar tidigare kod. 

2. Säg till att koden fungerar utämrkt innan det görs en push . Detta kan göras genom att testa den lokalt innan man skickar,

## Databas i phpMyadmin

- Databasen är inte färdigimplementerat 
- efter den är helt implementerat, så kan man importera databasen och inte behöva göra ändringar  i koden. Detta sparar tid på utvecklingen.
-  Detta beror på att vi inte vet vilken databasstruktur den ska  ha, men det kan vara bra att ta en titt på tabellerna i DAC
-   Databasen har inte fyllts med data, utan bara en tom databas.
    Detta beror på att vi inte vet vilken typ av data som behövs.
-      Man kan dock se tabellerna genom att klicka på `structure` i phpMyAdmin.

## Kollaboration

varje person tar sig tid att titta på kod.
-   Vi har en `master` branch som är den "säkra" branchen. Allt som går in i denna branch måste vara klart att fungera 
Det finns ingen specifik instruktion för hur man ska arbeta med andra personer.
Man kan ju prata med varandra om man vill men det är också bra att ha en plan.












