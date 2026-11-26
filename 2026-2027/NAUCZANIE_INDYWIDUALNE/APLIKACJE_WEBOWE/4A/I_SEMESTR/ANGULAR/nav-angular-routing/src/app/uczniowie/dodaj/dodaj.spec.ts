import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Dodaj } from './dodaj';

describe('Dodaj', () => {
  let component: Dodaj;
  let fixture: ComponentFixture<Dodaj>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Dodaj],
    }).compileComponents();

    fixture = TestBed.createComponent(Dodaj);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
