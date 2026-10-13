using System;
using System.Text;
using System.Collections.Generic;

public class HelloWorld {
    public static void Main(string[] args) {
        Console.OutputEncoding = Encoding.UTF8;

        int n = 100;

        bool[] liczbyPierwsze = new bool[n + 1];

        WypelnijTablice(liczbyPierwsze);

        Console.WriteLine($"Math.Sqrt(n) {Math.Sqrt(n)}");

        // Sito Eratostenesa
        for (int i = 2; i <= Math.Sqrt(n); i++) {
            if (liczbyPierwsze[i] == true) {
                for (int j = 2 * i; j <= n; j += i) {
                    liczbyPierwsze[j] = false;
                }
            }
        }

        Console.WriteLine("Liczby pierwsze z przedziału od 2 do 100:");

        for (int i = 2; i <= n; i++) {
            if (liczbyPierwsze[i] == true) {
                Console.Write(i + " ");
            }
        }
    }

    static void WypelnijTablice(bool[] tablica) {
        for (int i = 2; i < tablica.Length; i++){
            tablica[i] = true;
        }
    }
}