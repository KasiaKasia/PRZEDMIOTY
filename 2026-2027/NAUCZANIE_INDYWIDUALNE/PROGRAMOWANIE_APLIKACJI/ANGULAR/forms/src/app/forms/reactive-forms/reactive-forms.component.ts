import { Component, inject } from '@angular/core';
import { FormArray, FormBuilder, FormControl, FormGroup, ReactiveFormsModule, Validators } from '@angular/forms';

@Component({
  selector: 'app-reactive-forms',
  standalone: true,
  imports: [ReactiveFormsModule],
  templateUrl: './reactive-forms.component.html',
  styleUrl: './reactive-forms.component.scss'
})
export class ReactiveFormsComponent {
  nieZaleznaZimennaControl: FormControl= new FormControl('nieZaleznaZimennaControl' );
  formBuilder = inject(FormBuilder);
  addForm: FormGroup = this.createForm();

 

  createForm(): FormGroup {
    return this.formBuilder.group({
      items: this.formBuilder.array([this.createItem()])
    }, { updateOn: 'submit' });
  }

  createItem(): FormGroup {
    return this.formBuilder.group({
      name: ['', [Validators.required, Validators.minLength(3), Validators.maxLength(30), this.validateName]],
      count: ['', [Validators.required, Validators.min(1), Validators.max(100), Validators.pattern('^[0-9]+$')]],
      price: ['', [Validators.required, Validators.min(1), Validators.max(1000000), Validators.pattern('^[0-9]+$')]],
    });
  }
  validateName<ValidatorFn>(control: FormControl){
    const name = control.value;
    const regex = /^[a-zA-Z0-9]+$/; // Przykładowy regex, który akceptuje tylko alfanumeryczne znaki
    if (!regex.test(name)) {
      return { invalidName: true };
    }
    return null;
  }

  getItemsArray(form: FormGroup): FormArray {
    return form.get('items') as FormArray;
  }

  addItem(): void {
    const formArray = this.getItemsArray(this.addForm);
    formArray.push(this.createItem());
  }

  removeItem(index: number): void {
    const formArray = this.getItemsArray(this.addForm);
    formArray.removeAt(index)
  }


  get items() {
    return this.addForm.controls["items"] as FormArray;
  }





  onSubmit(addForm?: FormGroup): void {
    if (this.addForm.invalid) { return; }
    console.log(" this.addForm: ", this.addForm.value)

    console.log(" this.formBuilder: ", this.formBuilder)
  }
}
