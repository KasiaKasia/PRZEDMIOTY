import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Img } from './img/img';

@NgModule({
  declarations: [
    Img
  ],

  imports: [
    CommonModule
  ],

  exports: [
    Img
  ]
})
export class SharedModule {}
