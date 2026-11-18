import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';

const routes: Routes = [
    {
    path: 'lista',
    loadComponent: () =>
      import('./lista/lista').then(m => m.Lista)
  },
  {
    path: 'dodaj',
    loadComponent: () =>
      import('./dodaj/dodaj').then(m => m.Dodaj)
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class UczniowieRoutingModule {}
