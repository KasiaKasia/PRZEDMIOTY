import { Injectable } from '@angular/core';
export interface ImageInfo {
  id: number;
  src: string;
  alt: string;
  title: string;
}

@Injectable({
  providedIn: 'root',
})
export class ImageService { 
  private images: ImageInfo[] = [
    {
      id: 1,
      src: '/images/mountains.jpg',
      alt: 'Góry',
      title: 'Góry'
    },
    {
      id: 2,
      src: '/images/forest.jpg',
      alt: 'Las',
      title: 'Las'
    }
  ];

  getImageById(id: number): ImageInfo | undefined {
    return this.images.find(image => image.id === id);
  }
}