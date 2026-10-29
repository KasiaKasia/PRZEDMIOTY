import { Component, signal } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { FormSterowanySzablonem } from './form-sterowany-szablonem/form-sterowany-szablonem';
import { FormSterowanySzablonemNgModelPojednynczeWiazanieDanych } from './form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych/form-sterowany-szablonem-ng-model-pojednyncze-wiazanie-danych';

@Component({
  selector: 'app-root',
  imports: [RouterOutlet, FormSterowanySzablonem, FormSterowanySzablonemNgModelPojednynczeWiazanieDanych],
  templateUrl: './app.html',
  styleUrl: './app.css'
})
export class App {
  protected readonly title = signal('projekt-generuj-haslo-5a');
}
