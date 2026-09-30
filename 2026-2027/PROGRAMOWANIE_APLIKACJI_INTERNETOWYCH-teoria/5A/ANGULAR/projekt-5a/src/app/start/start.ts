import { Component } from '@angular/core';
import { SharedModule } from '../shared/shared-module';

@Component({
  selector: 'app-start',
  standalone:true,
  imports: [ SharedModule],
  templateUrl: './start.html',
  styleUrl: './start.scss',
})
export class Start {}
