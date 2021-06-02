import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.scss']
})
export class MenuComponent implements OnInit {
  lenguajes = 'pepe';
  lenguajes1:string = 'pepe';
  
  constructor() { 
    let lenguajes = 'juan';
    this.lenguajes = 'java';
    
  }

  ngOnInit(): void {
    
  }

  calcularedad(){

  }

}
