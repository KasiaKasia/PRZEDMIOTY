import asyncio
import aiohttp
import time

async def pobierz(url: str, session: aiohttp.ClientSession):
    async with session.get(url) as response:
        dane = await response.json()
        print(f"✓ Pobrano {len(dane)} rekordów z {url.split('/')[-1]}")
        return len(dane)

async def main():
    urls = [
        "https://jsonplaceholder.typicode.com/users",
        "https://jsonplaceholder.typicode.com/posts",
        "https://jsonplaceholder.typicode.com/albums",
        "https://jsonplaceholder.typicode.com/todos",
    ]
    
    start = time.time()
    
    async with aiohttp.ClientSession() as session:
        # Uruchamiamy wszystkie zapytania równolegle
        zadania = [pobierz(url, session) for url in urls]
        wyniki = await asyncio.gather(*zadania)
    
    czas = time.time() - start
    print(f"\nAsynchronicznie zakończono w: {czas:.2f} sekund")

asyncio.run(main())