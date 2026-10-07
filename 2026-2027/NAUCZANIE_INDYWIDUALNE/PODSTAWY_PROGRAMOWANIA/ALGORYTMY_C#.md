# **Algorytmy**

**Algorytm** to uporządkowany, jednoznaczny **zestaw kroków prowadzących do rozwiązania konkretnego problemu** lub wykonania zadania.

## Pętla zliczających elementy

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
using System.Collections.Generic;
using System.Text;


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
    
    Console.WriteLine(licznik);
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