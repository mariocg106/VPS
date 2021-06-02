import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { EditoresRoutingModule } from './editores-routing.module';
import { EditoresComponent } from './editores.component';
import { CuerpoComponent } from './estructura/cuerpo/cuerpo.component';
import { MenuComponent } from './estructura/menu/menu.component';
import { NewComponent } from './acciones/new/new.component';
import { ListarComponent } from './acciones/listar/listar.component';


@NgModule({
  declarations: [
    EditoresComponent,
    CuerpoComponent,
    MenuComponent,
    NewComponent,
    ListarComponent
  ],
  imports: [
    CommonModule,
    EditoresRoutingModule
  ]
})
export class EditoresModule { }
