import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DodajNauczyciela } from './dodaj-nauczyciela';

describe('DodajNauczyciela', () => {
  let component: DodajNauczyciela;
  let fixture: ComponentFixture<DodajNauczyciela>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [DodajNauczyciela],
    }).compileComponents();

    fixture = TestBed.createComponent(DodajNauczyciela);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
