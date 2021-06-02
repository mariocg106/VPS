import { Component, OnInit } from '@angular/core';
import { ICategoria } from 'src/app/interfaces/CategoriasInterface';
import { CategoriasService } from 'src/app/services/categorias.service';

@Component({
  selector: 'app-menu',
  templateUrl: './menu.component.html',
  styleUrls: ['./menu.component.scss']
})
export class MenuComponent implements OnInit {
  respuesta: ICategoria[] = [];
  constructor(private catService: CategoriasService) { }

  async ngOnInit(){
    this.respuesta = await this.catService.getAll();
    console.log(this.respuesta);

  }

}
