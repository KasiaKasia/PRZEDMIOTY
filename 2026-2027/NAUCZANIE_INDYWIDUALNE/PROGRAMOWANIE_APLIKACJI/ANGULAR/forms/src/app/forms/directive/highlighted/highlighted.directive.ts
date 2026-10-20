import { Directive, ElementRef, HostListener, Input } from '@angular/core';

@Directive({
  selector: '[appHighlighted]',
  standalone: true,

})
export class HighlightedDirective {
 

  @Input( ) highlightColor: string = 'blue'; // domyślny kolor

     
  constructor(private el: ElementRef) {}

  @HostListener('mouseenter') onMouseEnter() {    

    this.el.nativeElement.style.color =  'green';
  }

  @HostListener('mouseleave') onMouseLeave() {
    this.el.nativeElement.style.color = 'red'
  }
}