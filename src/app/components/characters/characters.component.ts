import { Component, OnInit } from '@angular/core';
import { ScriptserviceService } from '../../../services/scriptservice.service';

@Component({
  selector: 'app-characters',
  templateUrl: './characters.component.html',
  styleUrls: ['./characters.component.css']
})
export class CharactersComponent implements OnInit {

  constructor(private script : ScriptserviceService) { }
  characters : any[];
  ngOnInit() {
      this.script.characters.subscribe(data=>{
        this.characters = data;
      })
  }
}
