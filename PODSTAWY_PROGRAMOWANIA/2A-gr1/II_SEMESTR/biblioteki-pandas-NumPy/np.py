import numpy as np

# Tworzenie tablic
a = np.array([1, 2, 3, 4, 5])
b = np.array([[1, 2, 3], [4, 5, 6]])         # macierz 2x3
c = np.zeros((3, 4))                         # tablica zer
print("a =", a)
print("b =", b)
print(c)
print(f'np.zeros((3, 4)) = \n{np.zeros((3, 4))}')

d = np.ones((2, 2))                          # tablica jedynek
e = np.arange(0, 10, 2)                      # jak range, ale zwraca tablicę
f = np.linspace(0, 1, 5)                     # 5 równomiernie rozłożonych punktów
 
print("d = ", d)
print("e = ", e)
print(b.shape)      # wymiary → (2, 3) 2 wiersze i 3 kolumny → (2, 3)
print(b.ndim)       # liczba wymiarów → 2

x = np.array([1, 2, 3])
y = np.array([4, 5, 6])

print(x + y)        # [5 7 9]
print(x * 10)       # [10 20 30]
print(x ** 2)       # [1 4 9]

# Operacje statystyczne
print(x.mean())
print(x.sum())
print(x.max())


A1 = np.array([[1, 2], [3, 4]])
B1 = np.array([[5, 6], [7, 8]])

print(A1 @ B1)        # mnożenie macierzowe (nowy operator @)
# lub np.dot(A1, B1)

'''
 Mnożenie macierzowe:
 
1. Element [0,0] → lewy górny róg
Wiersz 0 z A: [1, 2]
Kolumna 0 z B: [5, 7] 
    1×5+2×7=5+14=19 

2. Element [0,1] → prawy górny róg
Wiersz 0 z A: [1, 2]
Kolumna 1 z B: [6, 8]
    1×6+2×8=6+16=22

3. Element [1,0] → lewy dolny róg
Wiersz 1 z A: [3, 4]
Kolumna 0 z B: [5, 7]
    3×5+4×7=15+28=43
4. Element [1,1] → prawy dolny róg
Wiersz 1 z A: [3, 4]
Kolumna 1 z B: [6, 8]
    3×6+4×8=18+32=50


'''