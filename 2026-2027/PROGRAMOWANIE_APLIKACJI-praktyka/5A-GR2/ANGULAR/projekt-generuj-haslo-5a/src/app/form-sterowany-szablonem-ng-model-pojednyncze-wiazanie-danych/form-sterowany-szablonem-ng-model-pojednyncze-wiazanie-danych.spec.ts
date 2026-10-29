import { ComponentFixture, TestBed } from '@angular/core/testing';

import { FormSterowanySzablonemNgModelPojednynczeWiazanieDanych } from './form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych';

describe('FormSterowanySzablonemNgModelPojednynczeWiazanieDanych', () => {
  let component: FormSterowanySzablonemNgModelPojednynczeWiazanieDanych;
  let fixture: ComponentFixture<FormSterowanySzablonemNgModelPojednynczeWiazanieDanych>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [FormSterowanySzablonemNgModelPojednynczeWiazanieDanych],
    }).compileComponents();

    fixture = TestBed.createComponent(FormSterowanySzablonemNgModelPojednynczeWiazanieDanych);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
