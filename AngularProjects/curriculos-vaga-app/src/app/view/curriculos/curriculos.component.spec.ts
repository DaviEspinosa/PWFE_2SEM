import { ComponentFixture, TestBed } from '@angular/core/testing';

import { CurriculosComponent } from './curriculos.component';

describe('CurriculosComponent', () => {
  let component: CurriculosComponent;
  let fixture: ComponentFixture<CurriculosComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [CurriculosComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(CurriculosComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
