import { Component, OnInit } from '@angular/core';
import { ScriptserviceService } from '../../../services/scriptservice.service';
@Component({
  selector: 'app-background',
  templateUrl: './background.component.html',
  styleUrls: ['./background.component.css']
})
export class BackgroundComponent implements OnInit {

  constructor(private script : ScriptserviceService) { }

  ngOnInit() {
      this.script.line.subscribe((data)=>{
        console.log(data)
      })
  }


}
