import { Component } from '@angular/core';
import { RouterOutlet } from '@angular/router';
import { FormsModuleTemplateDrivenForms } from './forms/forms.module';
import { FormsComponent } from "./forms/forms/forms.component";
import { ReactiveFormsComponent } from './forms/reactive-forms/reactive-forms.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [RouterOutlet, FormsComponent, ReactiveFormsComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.scss'
})
export class AppComponent {
  title = 'forms';
}
