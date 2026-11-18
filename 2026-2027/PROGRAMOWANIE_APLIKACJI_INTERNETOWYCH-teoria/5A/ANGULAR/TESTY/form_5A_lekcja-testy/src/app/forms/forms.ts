import { JsonPipe } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-forms',
  imports: [FormsModule, JsonPipe],
  templateUrl: './forms.html',
  styleUrl: './forms.scss',
})
export class Forms {

  osoba = {
    imie: '',
    nazwisko: '',
    plec: ''
  };
}
