import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { OcenyRoutingModule } from './oceny-routing-module';
import { Oceny } from './oceny/oceny';
import { ListaOcen } from './lista-ocen/lista-ocen';
import { DodajOcene } from './dodaj-ocene/dodaj-ocene';

@NgModule({
  declarations: [Oceny, ListaOcen, DodajOcene],
  imports: [CommonModule, OcenyRoutingModule],
})
export class OcenyModule {}
