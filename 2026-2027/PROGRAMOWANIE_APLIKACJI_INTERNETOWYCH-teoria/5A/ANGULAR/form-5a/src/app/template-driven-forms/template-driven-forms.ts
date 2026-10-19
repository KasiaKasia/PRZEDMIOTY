import { JsonPipe } from '@angular/common';
import { Component, ViewChild } from '@angular/core';
import { FormsModule, NgForm } from '@angular/forms';

@Component({
  selector: 'app-template-driven-forms',
  imports: [FormsModule,JsonPipe],
  templateUrl: './template-driven-forms.html',
  styleUrl: './template-driven-forms.scss',
})
export class TemplateDrivenForms {
   osoba = {
    imie: '',
    nazwisko: '',
    email: '',
    miasto: '',
    plec: '',
    regulamin: false
  };
 @ViewChild(NgForm) formDirective!: NgForm;
 
  miasta: string[] = [
    'Warszawa',
    'Kraków',
    'Gdańsk',
    'Wrocław'
  ];

  zapisz(): void {
   console.log('Formularz został wysłany!', this.formDirective);
    console.log('this.formDirective.value', this.formDirective.value); 
    console.log('this.osoba', this.osoba); 
  }

  imie1: string = 'aaaa';
  zapiszPojednynczeWiazanie(): void {
      console.log('Formularz został wysłany pojedyncze wiązanie!', this.formDirective);
    console.log('Formularz został wysłany!', this.imie1,  );
  }
}
