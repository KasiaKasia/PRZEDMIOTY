import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { TemplateDrivenForms } from './template-driven-forms/template-driven-forms';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, TemplateDrivenForms],
  templateUrl: './app.html',
  styleUrl: './app.scss'
})
export class App {
  protected readonly title = signal('form-5a');
}
