import { Component, OnInit } from '@angular/core';
import  { ScriptserviceService } from '../../../services/scriptservice.service';
@Component({
  selector: 'app-dialogbox',
  templateUrl: './dialogbox.component.html',
  styleUrls: ['./dialogbox.component.css']
})

export class DialogboxComponent implements OnInit {
  dialog : Object
  dialogline : Array<string> = Array()
  visible : boolean = true;
  nextbutton : boolean = false;
  line : number;
  currentroute : string;
  constructor(private script : ScriptserviceService) { }
  
  ngOnInit() {
    this.script.line.subscribe(data=>{
      this.line = data;
    })
    this.getscript();
  }
  
  getscript(route=""){
    this.script.getscript(route).then((data)=>{
      this.dialog = data['script'];
      this.dialogline = this.dialog[this.line]
      this.changescreen();
    });  
  }
  
  next(route){
    this.line++;
    if(this.line in this.dialog){
      this.showline(route);
    }else{
      this.line = 0;
      this.showline();
    }
    this.changescreen();
  }

  showline(searchroute = undefined){
    let log;
    if(this.dialog[this.line].type == 'routechange'){
      var temp = this.line;
      this.line = 0;
      var route = this.dialog[temp].route[this.currentroute];
      if(route == 'continue'){
        this.line++;
      }else{
        this.getscript(route);
      }
    }
    if(searchroute != undefined){
      this.currentroute = searchroute;
      while(this.dialog[this.line].route != searchroute){
        this.line++;
      }
      log = this.dialog[this.line];
      if(log.skip > 0 && log.skip != undefined){
        this.line += log.skip;
      }    
    }else{
      log = this.dialog[this.line];
    }
    
    var dialog = log["message"];
    log["message"] = "";
    this.dialogline = log;
    var time = 100;
    for(let i=0;i<dialog.length;i++){
      setTimeout(()=>{ 
        this.dialogline["message"] += dialog[i];
        if(i==dialog.length-1){
          this.nextbutton = false;
        }
       },time)
       time +=30;   
    }
    this.script.line.next(this.line);
  }
  
  changescreen(){
    var characters = this.script.characters.getValue();
    var background = this.script.background.getValue();
    if(background != this.dialog[this.line].background){
      this.script.background.next(this.dialog[this.line].background);
    }
    if(characters != this.dialog[this.line].characters){
      this.script.characters.next(this.dialog[this.line].characters);
    }
  }
}

 