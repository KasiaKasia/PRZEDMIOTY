import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DodajOcene } from './dodaj-ocene';

describe('DodajOcene', () => {
  let component: DodajOcene;
  let fixture: ComponentFixture<DodajOcene>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [DodajOcene],
    }).compileComponents();

    fixture = TestBed.createComponent(DodajOcene);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
