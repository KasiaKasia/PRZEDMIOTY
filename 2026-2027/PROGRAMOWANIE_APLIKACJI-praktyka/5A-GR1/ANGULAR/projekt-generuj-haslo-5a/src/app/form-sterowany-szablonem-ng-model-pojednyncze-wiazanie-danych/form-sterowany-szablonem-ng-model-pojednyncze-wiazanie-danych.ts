import { JsonPipe } from '@angular/common';
import { Component, ViewChild } from '@angular/core';
import { FormsModule, NgForm } from '@angular/forms';

@Component({
  selector: 'app-form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych',
  imports: [FormsModule, JsonPipe],
  templateUrl: './form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych.html',
  styleUrl: './form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych.css',
})
export class FormSterowanySzablonemNgModelPojednynczeWiazanieDanych {

   formularz = {
    adres: 'wwww',
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
@ViewChild('formularzHasel') formularzHasel?: NgForm;
  zapisz(formularzHasel: any): void {
    console.log('ngModel  this.formularz:', this.formularz);
    console.log('formularzHasel :', formularzHasel.value);  
    this.zapisaneDane = {
      adres: formularzHasel.value.adres,
      login: formularzHasel.value.login,
      haslo: formularzHasel.value.haslo
    };
  }
  reset(){
      this.formularz = {
    adres: 'wwww',
    login: '',
    generuj: false,
    haslo: ''
  };
 
  this.formularzHasel?.resetForm(this.formularz);
 
  this.zapisaneDane = null;
  }
}

