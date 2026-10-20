import { JsonPipe } from '@angular/common';
import { Component, NgModule, ViewChild } from '@angular/core';
import { FormsModule, NgForm, NgModel } from '@angular/forms';
import { DirectiveValueDirective } from '../directive/directive-value.directive';
import { DirectiveMatchFieldsDirective } from '../directive/mismatchFields/directive-match-fields.directive';
import { HighlightedDirective } from '../directive/highlighted/highlighted.directive';

export interface FormData {
  name?: string,
  readonly country?: string,
  agreeToTerms?: boolean | undefined,
  readonly paymentMethod?: string,
}
@Component({
  selector: 'app-forms',
  standalone: true,
  imports: [FormsModule, HighlightedDirective, JsonPipe, DirectiveValueDirective, DirectiveMatchFieldsDirective],
  templateUrl: './forms.component.html',
  styleUrl: './forms.component.scss'
})
export class FormsComponent {
  @ViewChild(NgForm) formDirective!: NgForm;
  formData: FormData = {
    name: '',
    country: '',
    agreeToTerms: true,
    paymentMethod: 'credit',
  };
  ngOnChanges() {
  //  this.formDirective.setValue(this.formData);
  }
  compareCountry(value1: FormData, value2: FormData) {
    return value2 && value1.country == value1.country
  }
  onSubmit(ngForm?: NgForm) {
      console.log(" this.formDirective: ", this.formDirective)
    console.log(" this.formData: ", this.formData)
    console.log(" ngForm: ", ngForm?.value)
    const cars = [
      { type: "Volvo", year: 2011 },
      { type: "Saab", year: 2017 },
      { type: "Volvo", year: 2005 },
      { type: "Volvo", year: 2014 },
      { type: "Volvo", year: 2018 },
      { type: "BMW", year: 2000 }
    ];

    const oldestCar = cars.reduce((max, car) => {
      console.log(car.year + '>' + max.year + ' = ' + (car.year > max.year ? car.year : max.year))
      return car.year > max.year ? car : max
    });

    console.log(oldestCar.year);
  }


}
