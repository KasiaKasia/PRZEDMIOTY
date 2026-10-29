"use strict";
class Person {
    name;
    age;
    constructor(name, age) {
        this.name = name;
        this.age = age;
        console.log(`konstruktor`);
    }
    introduce() {
        console.log(`Mam na imię ${this.name} i mam ${this.age} lat.`);
    }
}
const person1 = new Person("Anna", 25);
person1.introduce();
