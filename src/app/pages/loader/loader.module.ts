import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';
import { IonicModule } from '@ionic/angular';
import { LoaderPageRoutingModule } from './loader-routing.module';
import { LoaderPage } from './loader.page';
import { SafeHtmlPipe } from 'src/app/pipes/safe-html.pipe';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    LoaderPageRoutingModule,
  ],
  declarations: [
    LoaderPage,
    SafeHtmlPipe,
  ],
})
export class LoaderPageModule {}
