import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { NewComponent } from '../editores/acciones/new/new.component';
import { ListarComponent } from './acciones/listar/listar.component';
import { CategoriasComponent } from './categorias.component';

const routes: Routes = [
  { path: '', component: CategoriasComponent, 
    children: [
      { path: ':idCat/libros', component: ListarComponent },
    ]}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class CategoriasRoutingModule { }
