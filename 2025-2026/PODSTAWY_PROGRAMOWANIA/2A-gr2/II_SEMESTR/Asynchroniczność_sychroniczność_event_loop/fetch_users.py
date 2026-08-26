import asyncio
import aiohttp

async def main():
    url = "https://jsonplaceholder.typicode.com/users"
    
    async with aiohttp.ClientSession() as session:
        async with session.get(url) as response:
            print(f"Status odpowiedzi: {response.status}")
            
            users = await response.json()        # zamiana na listę słowników
            
            print(f"\nPobrano {len(users)} użytkowników\n")
            
            # Pokazujemy tylko pierwszych 3 użytkowników
            for user in users[:3]:
                print(f"• {user['name']}")
                print(f"  Email: {user['email']}")
                print(f"  Firma: {user['company']['name']}")
                print("-" * 40)

# Uruchomienie programu asynchronicznego
asyncio.run(main())