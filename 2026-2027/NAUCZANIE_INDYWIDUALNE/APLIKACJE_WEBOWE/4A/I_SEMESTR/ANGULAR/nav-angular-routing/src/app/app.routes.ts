import { Routes } from '@angular/router';

export const routes: Routes = [
    {
        path: '',
        loadComponent: () =>
            import('./start/start').then(m => m.Start)
    },
    {
        path: 'uczniowie',
        loadChildren: () =>
            import('./uczniowie/uczniowie-routing-module')
                .then(m => m.UczniowieRoutingModule)
    },
    {
        path: 'oceny',
        loadChildren: () =>
            import('./oceny/oceny-routing-module')
                .then(m => m.OcenyRoutingModule)
    },
    {
        path: 'nauczyciele',
        loadChildren: () =>
            import('./nauczyciele/nauczyciele.routes')
                .then(m => m.nauczycieleRoutes)
    }
];
