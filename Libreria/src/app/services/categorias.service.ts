import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';
import { ICategoria } from '../interfaces/CategoriasInterface';
import { ILibro } from '../interfaces/LibrosInterface';

const URL = environment.URL;

@Injectable({
  providedIn: 'root'
})
export class CategoriasService {

  constructor(private http: HttpClient) { }

  async getLibros(catId: string | number): Promise<ILibro[]>{
    let ruta = URL + 'libros/filter?idCat='+catId;
    return new Promise (resolve => {
      this.http.get<ILibro[]>(ruta)
        .subscribe ( datos => {
          resolve (datos);
        })
    })
  }

  async getAll(): Promise<ICategoria[]>{
    let ruta = URL + 'categorias';
    console.log(ruta);
    return new Promise( resolve => {
      this.http.get<ICategoria[]>(ruta)
        .subscribe ( data => {
          resolve( data );
      })  
    })
    
  }
}
