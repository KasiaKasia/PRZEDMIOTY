import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormSterowanySzablonem } from './form-sterowany-szablonem';

describe('FormSterowanySzablonem', () => {
  let component: FormSterowanySzablonem;
  let fixture: ComponentFixture<FormSterowanySzablonem>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [FormSterowanySzablonem],
    }).compileComponents();

    fixture = TestBed.createComponent(FormSterowanySzablonem);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
