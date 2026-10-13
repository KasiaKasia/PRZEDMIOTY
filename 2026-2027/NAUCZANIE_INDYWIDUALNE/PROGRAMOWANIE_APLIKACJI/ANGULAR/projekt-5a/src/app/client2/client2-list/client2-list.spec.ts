import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Client2List } from './client2-list';

describe('Client2List', () => {
  let component: Client2List;
  let fixture: ComponentFixture<Client2List>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Client2List],
    }).compileComponents();

    fixture = TestBed.createComponent(Client2List);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
