#include <iostream>
using namespace std;

class Zwierze {
public:
    virtual void dajGlos() {
        cout << "Zwierze wydaje dźwięk." << endl;
    }
};

class Pies : public Zwierze {
public:
    void dajGlos() override {
        cout << "Hau hau!" << endl;
    }
};

class Kot : public Zwierze {
public:
    void dajGlos() override {
        cout << "Miau!" << endl;
    }
};

void wydajDzwiek(Zwierze* z) {
    z->dajGlos();
}

int main() {
    Pies p;
    Kot k;

    wydajDzwiek(&p); // Hau hau!
    wydajDzwiek(&k); // Miau!
}
