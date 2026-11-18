import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { Forms } from './forms/forms';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, Forms],
  templateUrl: './app.html',
  styleUrl: './app.scss'
})
export class App {
  protected readonly title = signal('form_5A_lekcja');
}
