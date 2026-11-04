import { ComponentFixture, TestBed } from '@angular/core/testing';

import { KategorieZdjec } from './kategorie-zdjec';

describe('KategorieZdjec', () => {
  let component: KategorieZdjec;
  let fixture: ComponentFixture<KategorieZdjec>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [KategorieZdjec],
    }).compileComponents();

    fixture = TestBed.createComponent(KategorieZdjec);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
