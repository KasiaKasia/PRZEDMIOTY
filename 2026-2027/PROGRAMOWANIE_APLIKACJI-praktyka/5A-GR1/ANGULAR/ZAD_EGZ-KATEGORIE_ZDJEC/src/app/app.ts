import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { KategorieZdjec } from './kategorie-zdjec/kategorie-zdjec';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, KategorieZdjec],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('kategorie-zdjec');
}
