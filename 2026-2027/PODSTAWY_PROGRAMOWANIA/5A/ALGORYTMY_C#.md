# **Algorytmy**

**Algorytm** to uporządkowany, jednoznaczny **zestaw kroków prowadzących do rozwiązania konkretnego problemu** lub wykonania zadania.
### Tablica
Tablica w C# to struktura danych, która **przechowuje wiele elementów tego samego typu pod jedną nazwą**. Ma stały rozmiar, a do jej elementów odwołujemy się za pomocą indeksów zaczynających się od 0.

```C#
using System;
using System.Text;
using System.Collections.Generic;
public class HelloWorld {
    public static void Main(string[] args) {
            Console.OutputEncoding = Encoding.UTF8;
            int[] liczby = { 10, 20, 30, 40, 50 };

            int licznikLiczbTablicy = 0;

            foreach (int liczba in liczby) {
                licznikLiczbTablicy++;
            }
            Console.WriteLine($"licznik elementów w tablicy {licznikLiczbTablicy}");
    }
}
```
W zwykłej tablicy int[] **nie dodajesz ani nie usuwasz elementów tak łatwo jak w `List<int>`**, ponieważ tablica ma stały rozmiar.
Możesz jednak zmienić jej rozmiar przez `Array.Resize()`: 

```C#
using System;
using System.Text;
using System.Collections.Generic;

public class HelloWorld {
    public static void Main(string[] args) {
            Console.OutputEncoding = Encoding.UTF8;

            int[] liczby = { 10, 20, 30 };

            // dodanie miejsca na nowy element
            Array.Resize(ref liczby, 4);

            liczby[3] = 40;
            int index = 0;
            foreach (int liczba in liczby) {
                Console.WriteLine($"pod indeksem {index} znajduje się element tablicy {liczba}");
                index++;
            }           
    }
}
```  
`object[]` to **tablica typu object, więc może przechowywać elementy różnych typów**, np. `string`, `int`, `double` czy `bool`.

Tak samo jak zwykła tablica, `object[]` ma stały rozmiar. Możesz jednak zmienić jej rozmiar za pomocą `Array.Resize()`.
```C#
using System;
using System.Text;
using System.Collections.Generic;

public class HelloWorld {
    public static void Main(string[] args) {
           Console.OutputEncoding = Encoding.UTF8;
            object[] dane = { "Anna", 25, 168.5, true };
            
            foreach (object element in dane) {
                Console.WriteLine(element);
            }
            Console.WriteLine('\n');


            Array.Resize(ref dane, dane.Length + 1);

            dane[dane.Length - 1] = "Warszawa";

            foreach (object element in dane){
                Console.WriteLine(element);
            }
    }
}
``` 

### List<T>
 
`List<T>` w C# to kolekcja służąca do przechowywania wielu elementów tego samego typu, np. `List<int>` lub List<string>. W przeciwieństwie do tablicy może dynamicznie zmieniać swój rozmiar, czyli można dodawać i usuwać z niej elementy.

```C#
using System;

using System.Collections.Generic;
public class HelloWorld {
    public static void Main(string[] args) {

        List<int> liczby = new List<int> { 10, 20, 30, 40 };
        int licznik = 0;
        foreach (int liczba in liczby) {
            Console.WriteLine(liczba);
            licznik++;
        }
        Console.WriteLine($"licznik {licznik}");
    }
}
 
```


### SŁÓNIK - Dictionary


**Dictionary** w C# to **kolekcja przechowująca dane w postaci par klucz–wartość**. Każdy **klucz musi być unikalny** i służy do szybkiego odczytania przypisanej do niego wartości.

```C#

using System;
using System.Text;
using System.Collections.Generic;
public class HelloWorld {
    public static void Main(string[] args) {
            Console.OutputEncoding = Encoding.UTF8;

            Dictionary<string, string> slownik = new Dictionary<string, string> {
                    { "imie", "Anna" },
                    { "wiek", "25" },
                    { "miasto", "Warszawa" }
            };
                
            int licznik = 0;
                
            foreach (string klucz in slownik.Keys) {
                    licznik++;
                    Console.WriteLine(klucz);
                    Console.WriteLine("Wartość: " + slownik[klucz]);
            }
                
            slownik.Add("kraj", "Polska"); 
            slownik.Remove("wiek");

            
            Console.WriteLine("\n"  );
            foreach (string wartosc in slownik.Values){
                Console.WriteLine(wartosc);
            }

            Console.WriteLine("\n"  );

            if (slownik.ContainsKey("imie")){
                Console.WriteLine("Klucz istnieje");
            }    

            foreach (var element in slownik){
                Console.WriteLine("Klucz: " + element.Key);
                Console.WriteLine("Wartość: " + element.Value);
            }    
            Console.WriteLine("Licznik: " + licznik);
    }
}
```



### LISTA SŁOWNIKÓW - List<Dictionary>

List<Dictionary<TKey, TValue>> w C# to **lista, której każdy element jest słownikiem (Dictionary) przechowującym pary klucz–wartość**. Pozwala przechowywać wiele słowników, np. listę osób, gdzie każda osoba ma dane takie jak imię, wiek i miasto.

```C#
using System;
using System.Collections.Generic;
using System.Text;

public class HelloWorld {
    public static void Main(string[] args) {
        Console.OutputEncoding = Encoding.UTF8;

        List<Dictionary<string, string>> osoby =
            new List<Dictionary<string, string>>
        {
            new Dictionary<string, string> {
                { "imie", "Anna" },
                { "wiek", "25" },
                { "miasto", "Warszawa" }
            },

            new Dictionary<string, string> {
                { "imie", "Jan" },
                { "wiek", "30" },
                { "miasto", "Kraków" }
            }
        };

        foreach (var osoba in osoby) {
            Console.WriteLine(osoba["imie"]);
            Console.WriteLine(osoba["wiek"]);
            Console.WriteLine(osoba["miasto"]);
        }
    }  
}
```