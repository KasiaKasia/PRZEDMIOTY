import { Routes } from '@angular/router';
import { Start } from './start/start';

export const routes: Routes = [
    {
        path: '',
        component: Start
    }, {
        path: 'projekty',
        loadComponent: () =>
            import('./projects/projects-list/projects-list')
                .then(m => m.ProjectsList)
    },
    {
        path: 'klienci',
        loadChildren: () =>
            import('./clients/clients-module')
                .then(m => m.ClientsModule)
    }
];
