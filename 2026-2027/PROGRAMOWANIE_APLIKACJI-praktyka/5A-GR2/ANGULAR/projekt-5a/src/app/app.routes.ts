import { Routes } from '@angular/router';
import { Start } from './start/start';

export const routes: Routes = [
    {
        path: '',
        component: Start
    },
    {
        path: 'projekty',
        loadComponent: () =>
            import('./projects/projects-list/projects-list')
                .then(m => m.ProjectsList)
    },

    {
        path: 'projekty2',
        loadChildren: () =>
            import('./projects2/projects2-module')
                .then(m => m.Projects2Module)
    },

    {
        path: 'klienci',
        loadChildren: () =>
            import('./clients/clients-module')
                .then(m => m.ClientsModule)
    },
    {
        path: 'klienci2',
        loadChildren: () =>
            import('./client2/client2-module')
                .then(m => m.Client2Module)
    }
];
