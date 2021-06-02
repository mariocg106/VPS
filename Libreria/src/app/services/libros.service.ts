import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { environment } from 'src/environments/environment';
import { ILibro } from '../interfaces/LibrosInterface';

const URL = environment.URL;

@Injectable({
  providedIn: 'root'
})
export class LibrosService {

  constructor(private http: HttpClient) { }

  async getAll(): Promise<ILibro[]>{
    let ruta = URL + 'libros';
    
    return new Promise( resolve => {
      this.http.get<ILibro[]>(ruta)
        .subscribe ( data => {
          resolve( data );
      })  
    })
    
  }
 
  getAll1(){
    let ruta = URL + 'libros';
    this.http.get(ruta)
      .subscribe ( data => {
        console.log(data);
      })
  }
}
