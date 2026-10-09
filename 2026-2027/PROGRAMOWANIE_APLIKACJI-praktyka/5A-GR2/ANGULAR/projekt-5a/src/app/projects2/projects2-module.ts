import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { Projects2List } from './projects2-list/projects2-list';
import { RouterModule } from '@angular/router';

@NgModule({
  declarations: [
    Projects2List
  ],

  imports: [  

    RouterModule.forChild([
      {
        path: '',
        component: Projects2List
      }
    ])
  ],
})
export class Projects2Module {}
