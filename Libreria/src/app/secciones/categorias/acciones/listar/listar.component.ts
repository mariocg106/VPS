import { Component, OnInit } from '@angular/core';
import { ActivatedRoute, ParamMap } from '@angular/router';
import { ILibro } from 'src/app/interfaces/LibrosInterface';
import { CategoriasService } from 'src/app/services/categorias.service';



@Component({
  selector: 'app-listar',
  templateUrl: './listar.component.html',
  styleUrls: ['./listar.component.scss']
})
export class ListarComponent implements OnInit {

  idCat!: number;
  p: number | undefined;
  respuesta: ILibro[] = [];
  constructor(private route: ActivatedRoute, 
              private catService: CategoriasService) { }

  ngOnInit(): void {
    let p: number = 5;
    p = 6;
    this.p = 45;
    //this.idCat = Number(this.route.snapshot.paramMap.get('idCat'));
    this.route.paramMap
      .subscribe((parametros: ParamMap) => {
        this.idCat = Number(this.route.snapshot.paramMap.get('idCat'));
        this.getLibros();
      })
  }

  async getLibros(){
    console.log ("Cargar los libros de la categoria ",this.idCat );
    this.respuesta = await this.catService.getLibros(this.idCat);
    console.log(this.respuesta);
  }

}
