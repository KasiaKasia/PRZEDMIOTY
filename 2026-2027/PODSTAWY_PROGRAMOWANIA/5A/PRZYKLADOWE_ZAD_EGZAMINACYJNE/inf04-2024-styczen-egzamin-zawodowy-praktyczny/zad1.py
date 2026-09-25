def sprawdz_plec(pesel):
    if int(pesel[9]) % 2 == 0:
        return "K"
    else:
        return "M"


def sprawdz_sume_kontrolna(pesel):
    wagi = [1, 3, 7, 9, 1, 3, 7, 9, 1, 3]

    suma = 0

    for i in range(10):
        suma += int(pesel[i]) * wagi[i]

    m = suma % 10

    if m == 0:
        r = 0
    else:
        r = 10 - m

    return r == int(pesel[10])


pesel = input("Podaj numer PESEL: ")

plec = sprawdz_plec(pesel)

if plec == "K":
    print("Kobieta")
else:
    print("Mężczyzna")


if sprawdz_sume_kontrolna(pesel):
    print("Suma kontrolna jest zgodna.")
else:
    print("Suma kontrolna jest niezgodna.")