import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { ILibro } from 'src/app/interfaces/LibrosInterface';
import { LibrosService } from 'src/app/services/libros.service';
@Component({
  selector: 'app-cuerpo',
  templateUrl: './cuerpo.component.html',
  styleUrls: ['./cuerpo.component.scss']
})
export class CuerpoComponent implements OnInit {

  respuesta: ILibro[] = [];
  
  constructor(private route: ActivatedRoute, 
              private libroService: LibrosService) { }

  ngOnInit(): void {
    this.getLibros();
   
  }
  

  async getLibros(){
    console.log ("Cargar los libros ",this.getLibros );
    this.respuesta = await this.libroService.getAll();
    console.log(this.respuesta);
  }
}
