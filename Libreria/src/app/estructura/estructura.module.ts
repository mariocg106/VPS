import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { HeaderModule } from './header/header.module';
import { MainModule } from './main/main.module';
import { FooterModule } from './footer/footer.module';



@NgModule({
  declarations: [],
  imports: [
    CommonModule, HeaderModule, MainModule, FooterModule
  ],
  exports: [HeaderModule, MainModule, FooterModule]
})
export class EstructuraModule { }
