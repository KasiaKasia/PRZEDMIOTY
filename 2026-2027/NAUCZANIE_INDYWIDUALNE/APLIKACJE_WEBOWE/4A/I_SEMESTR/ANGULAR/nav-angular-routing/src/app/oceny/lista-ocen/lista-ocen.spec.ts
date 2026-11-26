import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListaOcen } from './lista-ocen';

describe('ListaOcen', () => {
  let component: ListaOcen;
  let fixture: ComponentFixture<ListaOcen>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ListaOcen],
    }).compileComponents();

    fixture = TestBed.createComponent(ListaOcen);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
