import { JsonPipe } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-form-sterowany-szablonem',
  imports: [FormsModule, JsonPipe],
  templateUrl: './form-sterowany-szablonem.html',
  styleUrl: './form-sterowany-szablonem.css',
})
export class FormSterowanySzablonem {
   formularz = {
    adres: '',
    login: '',
    generuj: false,
    haslo: ''
  };

  zapisaneDane: {
    adres: string;
    login: string;
    haslo: string;
  } | null = null;

  generujHaslo(): void {

    if (this.formularz.generuj) {

      const znaki =
        'ABCDEFGHIJKLMNOPQRSTUVWXYZ' +
        'abcdefghijklmnopqrstuvwxyz' +
        '0123456789!@#$%';

      let haslo = '';

      for (let i = 0; i < 12; i++) {
        const indeks = Math.floor(Math.random() * znaki.length);
        haslo += znaki[indeks];
      }

      this.formularz.haslo = haslo;
    }
  }

  zapisz(): void {
    this.zapisaneDane = {
      adres: this.formularz.adres,
      login: this.formularz.login,
      haslo: this.formularz.haslo
    };
  }
}