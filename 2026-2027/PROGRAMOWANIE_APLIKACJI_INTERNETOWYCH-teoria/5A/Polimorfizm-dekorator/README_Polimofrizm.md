# Polimorfizm w Python

Polimorfizm w Pythonie to zdolność obiektów różnych klas do reagowania na te same metody w sposób odpowiedni dla ich typu. Oznacza to, że ta sama operacja może zachowywać się inaczej w zależności od typu obiektu, na którym jest wykonywana.

**1. Polimorfizm funkcji wbudowanych**

# Funkcja len() działa z różnymi typami

```Python
print(len("Hello")) # 5 (string)
print(len([1, 2, 3, 4])) # 4 (lista)
print(len({'a': 1, 'b': 2})) # 2 (słownik)
```

**2. Polimorfizm z klasami i metodami**

**Polimorfizm - ta sama metoda, różne zachowania**

```Python
class Pies:
  def dzwiek(self):
    return "Hau hau!"

  def opis(self):
    return "Jestem psem"

class Kot:
  def dzwiek(self):
    return "Miau!"

  def opis(self):
    return "Jestem kotem"

class Krowa:
  def dzwiek(self):
    return "Muuu!"

  def opis(self):
    return "Jestem krową"

def wydaj_dzwiek(zwierze):
  print(zwierze.dzwiek())

pies = Pies()
kot = Kot()
krowa = Krowa()

wydaj_dzwiek(pies)
wydaj_dzwiek(kot)
wydaj_dzwiek(krowa)
```

**3. Polimorfizm z dziedziczeniem**
**1. Przykład**
```Python
class Figura:
  def pole(self):
    pass
  def obwod(self):
    pass

class Prostokat(Figura):
  def __init__(self, szerokosc, wysokosc):
    self.szerokosc = szerokosc
    self.wysokosc = wysokosc

  def pole(self):
    return self.szerokosc * self.wysokosc

  def obwod(self):
    return 2 * (self.szerokosc + self.wysokosc)

class Kolo(Figura):
  def __init__(self, promien):
    self.promien = promien

  def pole(self):
    return 3.14 * self.promien ** 2

  def obwod(self):
    return 2 * 3.14 * self.promien

class Trojkat(Figura):
  def __init__(self, a, b, c):
      self.a = a
      self.b = b
      self.c = c
  def pole(self):
    # Wzór Herona
    s = (self.a + self.b + self.c) / 2
    return (s * (s - self.a) * (s - self.b) * (s - self.c)) ** 0.5

  def obwod(self):
    return self.a + self.b + self.c

# Użycie polimorfizmu
figury = [ Prostokat(5, 10), Kolo(7), Trojkat(3, 4, 5) ]
for figura in figury:
  print(f"Pole: {figura.pole():.2f}")
  print(f"Obwód: {figura.obwod():.2f}")
  print("---")

```


**4. Polimorfizm z operatorami (przeciążanie operatorów)**

**Przeciążenie operatorów (Operator Overloading)**

Przeciążenie operatorów to mechanizm, dzięki któremu możemy **zmienić zachowanie** standardowych **operatorów (+, -, *, /, ==, >, [] itd.) dla naszych własnych klas**.


**Na przykład Python potrafi dodawać liczby:**

```Python
a = 5
b = 3

print(a + b)  # 8
```

**Potrafi również łączyć napisy:**

```Python
a = "Ala"
b = " ma kota"

print(a + b)  # Ala ma kota
```


Zwróć uwagę, że **operator + wykonuje różne czynności**:

- Dla **liczb wykonuje dodawanie**.

- Dla **napisów wykonuje łączenie tekstu**.

**Przykład – klasa Wektor**
Wyobraź sobie, że mamy dwa wektory:


- Pierwszy wektor: Wektor(2, 3)

- Drugi wektor: Wektor(5, 7)

Chcemy je dodać:

```text
(2,3)+(5,7)=(7,10)
```

```Python
class Wektor:

    def __init__(self, x, y):
        self.x = x
        self.y = y

    def __add__(self, other):
        return Wektor(self.x + other.x, self.y + other.y)

    def __str__(self):
        return f"Wektor({self.x}, {self.y})"


v1 = Wektor(2, 3)
v2 = Wektor(5, 7)

v3 = v1 + v2

print(v3)
```

Gdy piszesz: `v3 = v1 + v2` Python wykonuje operację odpowiadającą: `v3 = v1.__add__(v2)`

Zatem instrukcja:
```Python
return Wektor(self.x + other.x, self.y + other.y)
```

wykona: `return Wektor(2 + 5, 3 + 7)` czyli utworzy nowy obiekt: `Wektor(7, 10)`

**Ważne**: `__add__()` nie dodaje automatycznie wszystkich właściwości obiektu. Sami określamy, co ma oznaczać operator + dla naszej klasy.


#  Polimorfizm w C++


Słowo polimorfizm pochodzi z greckiego: "poly" – wiele, "morphe" – formy.
Oznacza, że ten sam interfejs (np. metoda) może mieć różne zachowania, w zależności od typu obiektu, który ją wywołuje.

**W C++ mamy dwa główne rodzaje polimorfizmu:**
| Rodzaj      | Nazwa         | Kiedy działa              | Jak działa                                                       |
| ----------- | ------------- | ------------------------- | ---------------------------------------------------------------- |
| Statyczny   | Compile-time  | w czasie kompilacji     |Przeciążanie funkcji, szablony (templates), przeciążanie operatorów |
| Dynamiczny  | Run-time      | w czasie działania programu | Funkcje wirtualne i dziedziczenie klas |


**1. Polimorfizm statyczny (kompilacyjny)**

Działa na **etapie kompilacji**.

Kompilator sam wybiera, którą wersję funkcji lub operatora wywołać — na podstawie **typu argumentów**.

**przykład — przeciążanie funkcji**
```C++
#include <iostream>
using namespace std;
void pokaz(int x) {
 cout << "Liczba całkowita: " << x << endl;
}
void pokaz(double x) {
 cout << "Liczba zmiennoprzecinkowa: " << x << endl;
}
int main() {
 pokaz(10); // wywoła wersję dla int
 pokaz(3.14); // wywoła wersję dla double
 return 0;
}
```
**Kompilator sam wybiera odpowiednią wersję — polimorfizm kompilacyjny.**

**Przykład — przeciążanie operatorów**

```C++
#include <iostream>
using namespace std;
class Punkt {
public:
 int x, y;
 Punkt(int a, int b) : x(a), y(b) {}
/*
x(a), y(b) - To lista inicjalizacyjna — część, która ustawia wartości pól klasy
jeszcze zanim kod konstruktora się wykona.
działa tak samo jak:
Punkt(int a, int b) {
 x = a;
 y = b;
}
*/
 Punkt operator+(const Punkt& p) {
 return Punkt(x + p.x, y + p.y);
 }
};
int main() {
 Punkt p1(2, 3), p2(4, 1);
 Punkt suma = p1 + p2; // używa przeciążonego operatora +
/*
x == 2 // z p1
y == 3
p.x == 4 // z p2
p.y == 1
*/
 cout << "(" << suma.x << ", " << suma.y << ")" << endl;
}
```

Operator **+ zachowuje się różnie w zależności od kontekstu** — to też forma polimorfizmu.

**2. Polimorfizm dynamiczny (uruchomieniowy)**

Ten rodzaj **polimorfizmu działa w czasie wykonywania programu.**

**Opiera się na dziedziczeniu i funkcjach wirtualnych.**

Dzięki temu możemy **wywoływać metody klas pochodnych przez wskaźnik lub referencję do klasy bazowej.**

```C++
#include <iostream>
using namespace std;

class Zwierze {
  public:
   virtual void dajGlos() {
     cout << "Zwierze wydaje dźwięk." << endl;
   }
  };

class Pies : public Zwierze {
  public:
   void dajGlos() override {
     cout << "Hau hau!" << endl;
   }
};

class Kot : public Zwierze {
  public:
   void dajGlos() override {
     cout << "Miau!" << endl;
   }
};

void wydajDzwiek(Zwierze* z) {
   z->dajGlos();
}

int main() {
   Pies p;
   Kot k;
 
   wydajDzwiek(&p); // Hau hau!
   wydajDzwiek(&k); // Miau!
}
```
Tutaj:

● wydajDzwiek() nie wie, czy ma do czynienia z Pies czy Kot.

● Dzięki **funkcjom wirtualnym**, **wywoływana jest odpowiednia implementacja** w czasie działania programu.