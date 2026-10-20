import { Directive, Input } from '@angular/core';
import { AbstractControl, NG_VALIDATORS, ValidationErrors } from '@angular/forms';

@Directive({
  selector: '[appDirectiveMatchFields]',
  standalone: true,
  providers: [
    {
      provide: NG_VALIDATORS,
      useExisting: DirectiveMatchFieldsDirective,
      multi: true,
    },
  ],
})
export class DirectiveMatchFieldsDirective {

  @Input('appDirectiveMatchFields') compareWith!: string;

  validate(control: AbstractControl): ValidationErrors | null {
    const otherControl = control.parent?.get(this.compareWith);
    if (otherControl && control.value !== otherControl.value) {
      return { fieldsMismatch: true };
    }
    return null;
  }

}
