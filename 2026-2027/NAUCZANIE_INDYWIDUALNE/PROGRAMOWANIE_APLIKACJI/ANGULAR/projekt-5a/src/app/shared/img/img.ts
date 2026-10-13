import { Component, inject, Input, OnInit } from '@angular/core';
import { ImageInfo, ImageService } from '../services/image';

@Component({
  selector: 'app-img',
  standalone: false,
  
  templateUrl: './img.html',
  styleUrl: './img.scss',
})
export class Img   {
 @Input() id!: number;

  private imageService = inject(ImageService);


   image?: ImageInfo;

  ngOnInit(): void {

    this.image = this.imageService?.getImageById(this.id);

    console.log('Przekazane id:', this.id);
    console.log('Znalezione zdjęcie:', this.image);
  }
}
