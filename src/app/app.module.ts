import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { ScriptserviceService } from '../services/scriptservice.service';
import { AppComponent } from './app.component';
import { DialogboxComponent } from './components/dialogbox/dialogbox.component';
import { BackgroundComponent } from './components/background/background.component';
import { CharactersComponent } from './components/characters/characters.component';
import {BrowserAnimationsModule} from '@angular/platform-browser/animations';

@NgModule({
  declarations: [
    AppComponent,
    DialogboxComponent,
    BackgroundComponent,
    CharactersComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule,
    BrowserAnimationsModule
  ],
  providers: [ScriptserviceService],
  bootstrap: [AppComponent]
})
export class AppModule { }
