import { CommonModule, JsonPipe } from '@angular/common';
import { Component } from '@angular/core';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-kategorie-zdjec',
  imports: [FormsModule, CommonModule, JsonPipe],
  templateUrl: './kategorie-zdjec.html',
  styleUrl: './kategorie-zdjec.css',
})
export class KategorieZdjec {
  kwiaty: boolean = true;
  zwierzeta: boolean = false;
  samochody: boolean = true;

  zdjecia = [
    { id: 0, alt: "Mak", filename: "/assets/obraz1.jpg", category: 1, downloads: 35 },
    { id: 1, alt: "Bukiet", filename: "/assets/obraz2.jpg", category: 1, downloads: 43 },
    { id: 2, alt: "Dalmatyńczyk", filename: "/assets/obraz3.jpg", category: 2, downloads: 2 },
    { id: 3, alt: "Świnka morska", filename: "/assets/obraz4.jpg", category: 2, downloads: 53 },
    { id: 4, alt: "Rotwailer", filename: "/assets/obraz5.jpg", category: 2, downloads: 43 },
    { id: 5, alt: "Audi", filename: "/assets/obraz6.jpg", category: 3, downloads: 11 },
    { id: 6, alt: "kotki", filename: "/assets/obraz7.jpg", category: 2, downloads: 22 },
    { id: 7, alt: "Róża", filename: "/assets/obraz8.jpg", category: 1, downloads: 33 },
    { id: 8, alt: "Świnka morska", filename: "/assets/obraz9.jpg", category: 2, downloads: 123 },
    { id: 9, alt: "Foksterier", filename: "/assets/obraz10.jpg", category: 2, downloads: 22 },
    { id: 10, alt: "Szczeniak", filename: "/assets/obraz11.jpg", category: 2, downloads: 12 },
    { id: 11, alt: "Garbus", filename: "/assets/obraz12.jpg", category: 3, downloads: 321 }
  ];

  pobierz(id: number): void {
    for (const zdjecie of this.zdjecia) {
      if (zdjecie.id === id) {
        zdjecie.downloads++;
      }
    }
  }
  filtruj(filtrForm: any) {
    console.log('Formularz został wysłany:', filtrForm);
  }
}
