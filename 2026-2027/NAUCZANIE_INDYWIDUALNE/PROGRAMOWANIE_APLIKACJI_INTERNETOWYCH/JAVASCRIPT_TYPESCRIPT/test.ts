const osoba1 = {
    imie: "Anna",

    przedstawSie: function() {
        console.log(this.imie); // Anna
    }
};

osoba1.przedstawSie(); // Tutaj this odnosi się do obiektu osoba.

const osoba2 = {
    imie: "Anna",

    przedstawSie: () => {
        console.log(this);
    }
};

osoba2.przedstawSie(); // {}



const osoba23 = {
    imie: "Anna",

    przedstawSie: function() {

        const pokazImie = () => {
            console.log(this);
        };

        pokazImie();
    }
};

osoba23.przedstawSie(); // Anna