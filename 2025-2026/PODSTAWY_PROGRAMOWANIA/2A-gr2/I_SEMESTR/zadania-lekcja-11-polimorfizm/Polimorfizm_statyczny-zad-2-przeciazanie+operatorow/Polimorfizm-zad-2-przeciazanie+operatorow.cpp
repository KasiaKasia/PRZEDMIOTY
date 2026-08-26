#include <iostream>
using namespace std;

class Punkt {
public:
    int x, y;
    Punkt(int a, int b) : x(a), y(b) {}

    Punkt operator+(const Punkt& p) {
        return Punkt(x + p.x, y + p.y);
    }
};

int main() {
    Punkt p1(2, 3), p2(4, 1);
    Punkt suma = p1 + p2; // używa przeciążonego operatora +
    cout << "(" << suma.x << ", " << suma.y << ")" << endl;
}
