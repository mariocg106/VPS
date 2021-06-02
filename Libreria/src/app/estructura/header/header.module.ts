import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { LogoComponent } from './logo/logo.component';
import { MenuComponent } from './menu/menu.component';
import { UsuarioComponent } from './usuario/usuario.component';
import { HeaderComponent } from './header.component';
import { HeaderRoutingModule } from './header-routing.module';


@NgModule({
  declarations: [
    LogoComponent,
    MenuComponent,
    UsuarioComponent,
    HeaderComponent,
    
  ],
  exports: [
    LogoComponent, MenuComponent, UsuarioComponent, HeaderComponent
  ],
  imports: [
    CommonModule,HeaderRoutingModule
  ]
})
export class HeaderModule { }
