import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { HttpClientModule } from '@angular/common/http';
import { ScriptserviceService } from '../services/scriptservice.service';
import { AppComponent } from './app.component';
import { DialogboxComponent } from './components/dialogbox/dialogbox.component';
import { BackgroundComponent } from './components/background/background.component';
import { CharactersComponent } from './components/characters/characters.component';

@NgModule({
  declarations: [
    AppComponent,
    DialogboxComponent,
    BackgroundComponent,
    CharactersComponent
  ],
  imports: [
    BrowserModule,
    HttpClientModule
  ],
  providers: [ScriptserviceService],
  bootstrap: [AppComponent]
})
export class AppModule { }
