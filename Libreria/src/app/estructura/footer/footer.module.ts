import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FooterComponent } from './footer.component';
import { SocialesComponent } from './sociales/sociales.component';
import { ContactosComponent } from './contactos/contactos.component';



@NgModule({
  declarations: [
    FooterComponent,
    SocialesComponent,
    ContactosComponent
  ],
  exports: [FooterComponent, SocialesComponent, ContactosComponent],
  imports: [
    CommonModule
  ]
})
export class FooterModule { }
