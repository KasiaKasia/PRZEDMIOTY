class Person {
    name: string;
    age: number;

    constructor(name: string, age: number) {
        this.name = name;
        this.age = age;
         console.log(`konstruktor`);
    }

    introduce(): void {
        console.log(`Mam na imię ${this.name} i mam ${this.age} lat.`);
    }
}

const person1 = new Person("Anna", 25);

// person1.introduce();