import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Client2Add } from './client2-add';

describe('Client2Add', () => {
  let component: Client2Add;
  let fixture: ComponentFixture<Client2Add>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [Client2Add],
    }).compileComponents();

    fixture = TestBed.createComponent(Client2Add);
    component = fixture.componentInstance;
    await fixture.whenStable();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
