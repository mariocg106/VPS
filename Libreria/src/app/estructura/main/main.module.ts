import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { MainComponent } from './main.component';
import { MenuComponent } from './menu/menu.component';
import { CuerpoComponent } from './cuerpo/cuerpo.component';
import { AsideComponent } from './aside/aside.component';
import { MainRoutingModule } from './main-routing.module'


@NgModule({
  declarations: [
    MainComponent,
    MenuComponent,
    CuerpoComponent,
    AsideComponent
  ],
  exports: [ MainComponent, MenuComponent, CuerpoComponent, AsideComponent],
  imports: [
    CommonModule, MainRoutingModule
  ]
})
export class MainModule { }
