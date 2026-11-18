
import { TestBed } from '@angular/core/testing';
import { App } from './app';

describe('App', () => {

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [App],
    }).compileComponents();
  });
// it() służy do definiowania pojedynczego testu.
  it('powinien utworzyć aplikację', () => {
    /*
    Ta instrukcja tworzy instancję komponentu App w środowisku testowym Angulara.
    TestBed to narzędzie Angulara służące do przygotowywania i testowania komponentów.
    createComponent(App) tworzy komponent i zwraca obiekt fixture, dzięki któremu możemy uzyskać dostęp do komponentu oraz jego HTML.
    */
    const fixture = TestBed.createComponent(App);
    /*
  
    expect()	                - Sprawdza określony warunek w teście
    fixture.componentInstance	- Pobiera instancję komponentu App
    .toBeTruthy()           	- Sprawdza, czy wartość jest prawdziwa w sensie logicznym (truthy)
    

    W tym przypadku sprawdzamy, czy Angular utworzył obiekt komponentu.
    Jeżeli komponent został poprawnie utworzony, test przejdzie.
    */
    expect(fixture.componentInstance).toBeTruthy();

  });
  /*
  Test sprawdza, czy na stronie głównej aplikacji znajduje się komponent formularza <app-forms>.
  */
 // it() definiuje pojedynczy test.
  it('powinien wyświetlić komponent formularza', async () => {
    /*
    Angular tworzy komponent App w środowisku testowym.
    Zmienna fixture przechowuje obiekt, który pozwala nam korzystać z instancji komponentu oraz jego elementów HTML.
    */
    const fixture = TestBed.createComponent(App);

    //oczekiwanie na zakończenie aktualizacji
    await fixture.whenStable();
    // fixture.nativeElement – pobranie HTML komponentu
    const compiled = fixture.nativeElement as HTMLElement;
 
    // Metoda querySelector() wyszukuje pierwszy element HTML pasujący do podanego selektora CSS.
    const formularz = compiled.querySelectorAll('app-forms');

    expect(formularz).not.toBeNull();
  });

});
