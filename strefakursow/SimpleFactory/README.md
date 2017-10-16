#Prosta fabryka na podstawie strefakursow

###CarFactory

- CarFactory jest jest klasą służącą do tworzenia gotowych obiektów.
Zawiera ona statyczną funkcję createCar ponieważ nie chcemy budować nowej 
instancji klasy tylko otrzymać nowy, gotowy samochód. 
Chcemy by instancja klasy carFactory zwróciła nowy zamochód.
- Tworząc nowy obiekt $Car, nie musimy wiedzieć jak zbudowana jest klasa Car 
produkująca dla nas nową instancję samochodu.
- Tworzący nową instancję klasy powinien znać wyłącznie nazwę metody statycznej 
odpowiedzialnej za tworzenie nowej instancji
  