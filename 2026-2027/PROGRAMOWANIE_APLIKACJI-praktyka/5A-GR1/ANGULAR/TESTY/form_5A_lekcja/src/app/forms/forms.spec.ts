import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Forms } from './forms';

describe('Forms', () => {
  let component: Forms;
  let fixture: ComponentFixture<Forms>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Forms],
    }).compileComponents();

    fixture = TestBed.createComponent(Forms);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('powinien posiadać pole imię', () => {
    const fixture = TestBed.createComponent(Forms);

    fixture.detectChanges();

    const input = fixture.nativeElement.querySelector('#imie');

    expect(input).not.toBeNull();
  });

  it('powinien posiadać pole imię', () => {
    const fixture = TestBed.createComponent(Forms);

    fixture.detectChanges();

    const input = fixture.nativeElement.getElementsByTagName('nazwisko');

    expect(input).not.toBeNull();
  });



  it('should create', () => {
    expect(component).toBeTruthy();
  });
  it('powinien wyświetlić wpisane imię', async () => {


    const input: HTMLInputElement =
      fixture.nativeElement.querySelector('#imie');

    input.value = 'Kamil';
    /*
    Wartość pola HTML została zmieniona na „Kamil”.
    Ale to jeszcze nie oznacza, że Angular zaktualizował zmienną osoba.imie.
    Dlatego wykonujemy: input.dispatchEvent(new Event('input'));

    // Wywołaj na polu zdarzenie input, tak jak podczas wpisywania tekstu przez użytkownika
    // Angular obsługuje to zdarzenie dzięki ngModel i aktualizuje właściwość osoba.imie.
    */
    input.dispatchEvent(new Event('input'));



    // 4. Czekamy na aktualizację ngModel
    await fixture.whenStable();

    // 5. Aktualizujemy widok HTML
    fixture.detectChanges();

    // 6. Pobieramy akapit
    const akapit = fixture.nativeElement.querySelector('p');

    // 7. Sprawdzamy jego zawartość
    expect(akapit.textContent).toContain('Kamil');

  });
  it('pole imię powinno mieć limit 20 znaków', () => {
 
    const input: HTMLInputElement =
      fixture.nativeElement.querySelector('#imie');
 
    expect(input.maxLength).toBe(20);

  });

  it('pole imię powinno być wymagane', () => {

    const input: HTMLInputElement =
      fixture.nativeElement.querySelector('#nazwisko');

    expect(input.required).toBe(true);

  });
  it('powinien istnieć przycisk wyslij typu submit', () => {
 
    const button: HTMLButtonElement =
      fixture.nativeElement.querySelector('button[name="wyslij"]');

    // Sprawdzamy, czy przycisk istnieje
    expect(button).not.toBeNull();
 
    expect(button.getAttribute('type')).toBe('submit');

  });
});
