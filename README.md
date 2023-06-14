# secondhand

Detta är ett projekt med PHP och MySQL där vi vill

# Beskrivning av projekt:

En webbtjänst i form av en secondhand-butik där PHP och MySQL har använts för att visa på vilka kläder som finns tillgängliga att köpa och vilka säljare som har lämnat in kläderna. Det ska även gå att markera plaggen som sålda, samt se hur många plagg som är sålda. När ett nytt plagg läggs till med hjälp av ett formulär kan du även välja en befintlig säljare att koppla plagget till som sedan dyker upp i listan med kläder.

Väl inne på säljarens sida kan du även se vilka plagg säljaren har lämnat in, samt antalet av plaggen och även totalsumman av plaggen.

# Databasen secondhand:

Min databas består av två tabeller; sellers och clothes.

## sellers

| id  | first_name  | last_name   | email       |
| --- | ----------- | ----------- | ----------- |
| int | varchar(32) | varchar(32) | varchar(32) |

## clothes

| id  | garment     | size        | price | sold_date | created   | updated   | seller_id |
| --- | ----------- | ----------- | ----- | --------- | --------- | --------- | --------- |
| int | varchar(32) | varchar(10) | int   | date      | timestamp | timestamp | int       |

## Configuration

$host = "localhost";
$db = "secondhand";
$user = "secondhand";
$password = "secondhand1";
