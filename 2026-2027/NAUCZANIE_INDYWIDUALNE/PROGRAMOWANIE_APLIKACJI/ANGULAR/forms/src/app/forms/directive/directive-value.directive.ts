import { Directive } from '@angular/core';
import { AbstractControl, NG_VALIDATORS, Validator } from '@angular/forms';

@Directive({
  selector: '[appDirectiveValue]',
  standalone: true,
  providers: [
    {// bez tego jest zwykła derektywa , nie uruchomi się w formularzu
      provide: NG_VALIDATORS,
      useExisting: DirectiveValueDirective,
      multi: true,
    },
  ],
})
export class DirectiveValueDirective  implements Validator {
  validate(control: AbstractControl): { [key: string]: any } | null {
 
    const forbidden = control.value === 'admin'; // Przykładowy zakazany tekst
    return forbidden ? { forbiddenName: { value: control.value } } : null;
  }
}