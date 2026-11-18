import { Routes } from '@angular/router';

export const nauczycieleRoutes: Routes = [
  {
    path: '',
    redirectTo: 'lista',
    pathMatch: 'full'
  },
  {
    path: 'lista',
    loadComponent: () =>
      import('./lista-nauczycieli/lista-nauczycieli')
        .then(m => m.ListaNauczycieli)
  },
  {
    path: 'dodaj',
    loadComponent: () =>
      import('./dodaj-nauczyciela/dodaj-nauczyciela')
        .then(m => m.DodajNauczyciela)
  }
];