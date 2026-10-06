import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { Client2List } from './client2-list/client2-list';
import { Client2Add } from './client2-add/client2-add';

const routes: Routes = [
  {
    path: '',
    component: Client2List
  },
  {
    path: 'dodaj',
    component: Client2Add
  },
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class Client2RoutingModule { }
