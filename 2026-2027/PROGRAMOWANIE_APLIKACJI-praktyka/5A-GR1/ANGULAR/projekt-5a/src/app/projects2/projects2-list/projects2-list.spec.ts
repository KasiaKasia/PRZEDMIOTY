import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Projects2List } from './projects2-list';

describe('Projects2List', () => {
  let component: Projects2List;
  let fixture: ComponentFixture<Projects2List>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Projects2List],
    }).compileComponents();

    fixture = TestBed.createComponent(Projects2List);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
