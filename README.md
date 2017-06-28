# Shopping Cart Assignment

[![Education](https://img.shields.io/badge/category-education-blue.svg)]()
[![License](https://img.shields.io/badge/license-MIT-blue.svg)]()
[![Beerpay](https://img.shields.io/badge/Beerpay-%E2%82%AC0-red.svg)]()

## Opdracht
Je maakt een simpele shopping cart voor een webshop. Die bestaat uit het volgende:

* Een product class bevat een product dat kan worden gekocht in de webshop.
* Een order class bevat één of meer producten die worden gekocht in de webshop.

public/index.php is de webroot. In dit bestand doe je het volgende:
* Maak een paar producten:
    * id: 123_pants; name: Jeans; price: 75.50
    * id: 245_tshirt_blue; name: T-shirt blue; price: 12.50
    * id: 245_tshirt_red; name: T-shirt red; price: 12.50

* Stop de volgende producten in je order:
    * 245_tshirt_blue * 2
    * 245_tshirt_red * 1
    * 123_pants * 2

* Verwijderen een product uit je order, op id. 
* Bereken het subtotaal van je order met een functie op de class Order. 
* Bereken het totaal van je order met een functie op de class Order. 

Succes!

#Tip
Bestand index.php bevat al een autoloader voor classes. Deze laadt automatisch classes die in `app` staan, als de filename hetzelfde is als de classname.
 
Je kunt class Order dus gewoon gebruiken in index.php op de volgende manier:
```
$webshopOrder = new Order();
```

#Structuur project

```
-- app: hier komen alle classes
-- public: de webroot
- bootstrap.php: autolader voor classes
```
