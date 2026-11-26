import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Oceny } from './oceny';

describe('Oceny', () => {
  let component: Oceny;
  let fixture: ComponentFixture<Oceny>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [Oceny],
    }).compileComponents();

    fixture = TestBed.createComponent(Oceny);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
