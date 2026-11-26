import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { Oceny } from './oceny/oceny';
import { DodajOcene } from './dodaj-ocene/dodaj-ocene';
import { ListaOcen } from './lista-ocen/lista-ocen';

const routes: Routes = [
    {
    path: '',
    component: Oceny
  },
    {
    path: 'lista',
    component: ListaOcen
  },
  {
    path: 'dodaj',
    component: DodajOcene
  }
]; 

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class OcenyRoutingModule {}
