# zad 1
numbers = [1, 2, 3, 4, 5, 6]

result = sum(x**2 for x in numbers if x % 2 == 0)

print(result)  # 56

# zad 2
words = ["kot", "samochód", "dom", "programowanie"]

result = [word.upper() for word in words if len(word) > 4]

print(result)

'''
Generator:
(x**2 for x in numbers if x % 2 == 0)

👉 działa „na żądanie”

Lista:
[word.upper() for word in words if len(word) > 4]

👉 tworzy wszystko od razu
'''