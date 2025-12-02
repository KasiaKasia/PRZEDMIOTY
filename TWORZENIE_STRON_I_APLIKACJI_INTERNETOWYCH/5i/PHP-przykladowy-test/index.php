<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zadania PHP</title>
</head>
<body>

      
    <?php  
		// ---------------------------
		// Rozwiązanie Zadania 10
		// Napisz jedną linijkę kodu wysyłającą zapytanie SQL SELECT * FROM uczniowie; (załóż $conn).
		// ---------------------------
	
		$polaczenie = mysqli_connect("localhost", "root", "", "sklep_internetowy");
		$sql = "SELECT CURTIME() AS godzina;";
		$wynik = mysqli_query($polaczenie, $sql);
	
		// ---------------------------
		// Rozwiązanie Zadania 10
		// Jaką funkcją pobierzesz pojedynczy wiersz wyniku jako tablicę asocjacyjną? 
		// ---------------------------
	
	
		$row = mysqli_fetch_assoc($wynik);
			/*
			echo "<pre>";
			print_r($row);
			echo "</pre>";
			*/
			
			
			
		// ---------------------------
		// Rozwiązanie Zadania 11
		// Jaką funkcją sprawdzisz liczbę zwróconych rekordów zapytania SELECT?
		// ---------------------------
	
			$wynik = mysqli_query($polaczenie, "SELECT * FROM zakupy;");
			$ile = mysqli_num_rows($wynik);

			echo "Liczba rekordów: " . $ile . "\n";
			
			
		// ---------------------------
		// Rozwiązanie Zadania 12
		// Co zwraca funkcja mysqli_fetch_row()? (jedno zdanie)?
		// ---------------------------
			
			/*
			 mysqli_fetch_row() zwraca tablicę numeryczną zawierającą jeden wiersz wyniku zapytania, albo NULL, jeśli nie ma więcej wierszy.
			 */
		$wynik = mysqli_query($polaczenie, "SELECT id, uzytkownik_id, kategoria_id, produkt, data_zakupu FROM zakupy;");
		$wiersz = mysqli_fetch_row($wynik);
			 
			echo "<pre>";
				print_r($wiersz);
			echo "</pre>";
			
			
		// ---------------------------
		// Rozwiązanie Zadania 13
		// Napisz kod, który sprawdzi liczbę wierszy w wyniku zapytania zapisanym w zmiennej $result.
		// ---------------------------
			
		$liczba_wierszy = mysqli_num_rows($wynik);
		echo "Liczba wierszy: " . $liczba_wierszy;
			
			
		// ---------------------------
		// Rozwiązanie Zadania 14
		// Do czego służy funkcja isset()?
		// ---------------------------
			
			/* isset() w PHP służy do sprawdzenia, czy zmienna istnieje i nie jest NULL.
			isset($zmienna)
				Zwraca true, jeśli zmienna istnieje i ma wartość różną od NULL

				Zwraca false, jeśli zmienna nie istnieje lub jest NULL
			$a = 10;
			$b = null;

			var_dump(isset($a)); // true
			var_dump(isset($b)); // false
			var_dump(isset($c)); // false, bo $c nie istnieje

			*/

		// ---------------------------
		// Rozwiązanie Zadania 15
		// Jak nazywa się funkcja w PHP, która sprawdza, czy zmienna jest pusta (np. 0, "", NULL, false, [])?
		// ---------------------------
			/*
			Funkcja w PHP, która sprawdza, czy zmienna jest pusta (czyli ma wartość 0, "", NULL, false, [] itp.) to:
			*/

			// ✅ empty()
			// ✔️ Przykład:
			$a = 0;
			$b = "";
			$c = null;
			$d = false;
			$e = [];

			var_dump(empty($a)); // true
			var_dump(empty($b)); // true
			var_dump(empty($c)); // true
			var_dump(empty($d)); // true
			var_dump(empty($e)); // true

			$f = 10;
			var_dump(empty($f)); // false
			
			
		// ---------------------------
		// Rozwiązanie Zadania 16
		// Napisz przykład zapytania dodającego ucznia „Adam” do tabeli uczniowie (kolumna imie). 
		// ---------------------------
	
		$sql = "INSERT INTO uczniowie (imie) VALUES ('Adam')";

		if (mysqli_query($polaczenie, $sql)) {
			echo "Uczeń został dodany.";
		} else {
			echo "Błąd: " . mysqli_error($polaczenie);
		}
	
	?>

</body>
</html>
