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

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
