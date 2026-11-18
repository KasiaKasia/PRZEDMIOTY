import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ListaNauczycieli } from './lista-nauczycieli';

describe('ListaNauczycieli', () => {
  let component: ListaNauczycieli;
  let fixture: ComponentFixture<ListaNauczycieli>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [ListaNauczycieli],
    }).compileComponents();

    fixture = TestBed.createComponent(ListaNauczycieli);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
