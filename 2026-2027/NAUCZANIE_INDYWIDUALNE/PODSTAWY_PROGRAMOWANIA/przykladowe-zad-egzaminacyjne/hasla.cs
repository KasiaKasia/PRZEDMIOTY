
using System;
using System.Collections.Generic;
using System.Text;

public class Program
{
    static Random random = new Random();

    static string GenerujHaslo()
    {
        string maleLitery = "abcdefghijklmnopqrstuvwxyz";
        string wielkieLitery = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        string polskieZnaki = "ąęłńóśżźĄĘŁŃÓŚŻŹ";
        string cyfry = "0123456789";
        string znakiSpecjalne = "!@#$%^&*()_+";

        List<char> znakiHasla = new List<char>();

        // Losowanie 3 małych liter
        for (int i = 0; i < 3; i++)
        {
            int indeks = random.Next(maleLitery.Length);
            znakiHasla.Add(maleLitery[indeks]);
        }

        // Losowanie 3 wielkich liter
        for (int i = 0; i < 3; i++)
        {
            int indeks = random.Next(wielkieLitery.Length);
            znakiHasla.Add(wielkieLitery[indeks]);
        }

        // Losowanie 2 polskich znaków
        for (int i = 0; i < 2; i++)
        {
            int indeks = random.Next(polskieZnaki.Length);
            znakiHasla.Add(polskieZnaki[indeks]);
        }

        // Losowanie 2 cyfr
        for (int i = 0; i < 2; i++)
        {
            int indeks = random.Next(cyfry.Length);
            znakiHasla.Add(cyfry[indeks]);
        }

        // Losowanie 2 znaków specjalnych
        for (int i = 0; i < 2; i++)
        {
            int indeks = random.Next(znakiSpecjalne.Length);
            znakiHasla.Add(znakiSpecjalne[indeks]);
        }

        // Losowe mieszanie znaków
        for (int i = znakiHasla.Count - 1; i > 0; i--)
        {
            int j = random.Next(i + 1);

            char temp = znakiHasla[i];
            znakiHasla[i] = znakiHasla[j];
            znakiHasla[j] = temp;
        }

        // Zamiana listy znaków na napis
        string haslo = new string(znakiHasla.ToArray());

        return haslo;
    }

    public static void Main(string[] args)
    {
        Console.OutputEncoding = Encoding.UTF8;

        for (int i = 0; i < 5; i++)
        {
            string haslo = GenerujHaslo();
            Console.WriteLine($"Hasło {i + 1}: {haslo}");
        }
    }
}
