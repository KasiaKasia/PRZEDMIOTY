import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { FormsRoutingModule } from './forms-routing.module';
import { FormsComponent } from './forms/forms.component';


@NgModule({
  declarations: [],
  imports: [
    CommonModule,
    FormsRoutingModule,
    FormsComponent,
    FormsModule,
  ],
   exports:[ FormsComponent,]
})
export class FormsModuleTemplateDrivenForms { }
