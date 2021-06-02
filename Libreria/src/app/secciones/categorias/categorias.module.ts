import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { CategoriasRoutingModule } from './categorias-routing.module';
import { CategoriasComponent } from './categorias.component';
import { MenuComponent } from './estructura/menu/menu.component';
import { CuerpoComponent } from './estructura/cuerpo/cuerpo.component';
import { ListarComponent } from './acciones/listar/listar.component';
import { NewComponent } from './acciones/new/new.component';


@NgModule({
  declarations: [
    CategoriasComponent,
    MenuComponent,
    CuerpoComponent,
    ListarComponent,
    NewComponent
  ],
  imports: [
    CommonModule,
    CategoriasRoutingModule
  ]
})
export class CategoriasModule { }
