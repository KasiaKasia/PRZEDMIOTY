import asyncio

async def zadanie1():
    print("Start zadanie1")
    
    await asyncio.sleep(2)
    
    print("Koniec zadanie1")

async def zadanie2():
    print("Start zadanie2")
    
    await asyncio.sleep(1)
    
    print("Koniec zadanie2")

async def main():
    await asyncio.gather(
        zadanie1(),
        zadanie2()
    )

asyncio.run(main())