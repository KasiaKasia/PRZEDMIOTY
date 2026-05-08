import asyncio

# 1. Coroutine
async def pobierz(url):
    print(f"[{url}] Rozpoczynam pobieranie...")
    await asyncio.sleep(2)          # symulacja opóźnienia sieci
    print(f"[{url}] Zakończono!")
    return f"dane z {url}"

# 2. async/await + 3. asyncio
async def main():
    # Tworzymy listę coroutine'ów
    coro1 = pobierz("https://api1.com")
    coro2 = pobierz("https://api2.com")
    coro3 = pobierz("https://api3.com")
    
    # Event Loop zarządza wykonaniem
    wyniki = await asyncio.gather(coro1, coro2, coro3)
    
    print("Wszystkie wyniki:", wyniki)

# Uruchomienie całego systemu
asyncio.run(main())