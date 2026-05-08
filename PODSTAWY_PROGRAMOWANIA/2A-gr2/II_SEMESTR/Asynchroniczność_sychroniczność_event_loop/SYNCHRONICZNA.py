import requests
import time

def pobierz_dane_sync():
    urls = [
        "https://jsonplaceholder.typicode.com/users",
        "https://jsonplaceholder.typicode.com/posts",
        "https://jsonplaceholder.typicode.com/albums",
        "https://jsonplaceholder.typicode.com/todos",
    ]
    
    wyniki = []
    start = time.time()
    
    for url in urls:
        print(f"Pobieram: {url}")
        response = requests.get(url)        # ← blokuje program
        dane = response.json()
        wyniki.append(len(dane))
        print(f"✓ Pobrano {len(dane)} rekordów")
    
    czas = time.time() - start
    print(f"\nSynchroncznie zakończono w: {czas:.2f} sekund")

pobierz_dane_sync()