import { Component, inject } from '@angular/core';
import { Project } from '../../services/interface-projects';
import { ProjectsService } from '../../services/projects';

@Component({
  selector: 'app-projects-list',
  standalone: true,
  imports: [],
  templateUrl: './projects-list.html',
  styleUrl: './projects-list.scss',
})
export class ProjectsList {
  projects: Project[];
  private projectsServiceInject = inject(ProjectsService);

  constructor(private projectsService: ProjectsService) {
    this.projects = this.projectsService.projects;
  }
}
