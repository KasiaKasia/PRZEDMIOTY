import { Injectable } from '@angular/core';
import { Project } from './interface-projects';


@Injectable({
  providedIn: 'root',
})
export class ProjectsService {

  projects: Project[] = [
    {
      id: 1,
      name: 'Sklep internetowy',
      description: 'Aplikacja do sprzedaży produktów online',
      status: 'Aktywny'
    },
    {
      id: 2,
      name: 'System faktur',
      description: 'Aplikacja do wystawiania i zarządzania fakturami',
      status: 'W trakcie'
    },
    {
      id: 3,
      name: 'Aplikacja OCR',
      description: 'System do odczytywania danych z paragonów',
      status: 'Zakończony'
    }
  ];

}
