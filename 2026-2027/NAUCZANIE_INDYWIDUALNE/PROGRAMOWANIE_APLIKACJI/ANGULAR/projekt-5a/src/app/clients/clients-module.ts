import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { ClientsRoutingModule } from './clients-routing-module';
import { ClientsList } from './clients-list/clients-list';

@NgModule({
  declarations: [ClientsList],
  imports: [CommonModule, ClientsRoutingModule],
})
export class ClientsModule {}
