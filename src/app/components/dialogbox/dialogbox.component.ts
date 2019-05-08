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
  constructor(private script : ScriptserviceService) { }
  
  ngOnInit() {
    this.script.line.subscribe(data=>{
      this.line = data;
    })
    this.script.getscript().then((data)=>{
      this.dialog = data["script"];
      this.dialogline = this.dialog[this.line]
      this.changescreen();
    });   
    
  }

  next(){
    this.line++;
    if(this.line in this.dialog){
      this.messageeffect();
    }else{
      this.line = 0;
      this.messageeffect();
    }
    this.changescreen();
  }

  messageeffect(){
    this.nextbutton = true;
    let log = this.dialog[this.line];
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
    this.script.background.next(this.dialog[this.line].background);
    this.script.characters.next(this.dialog[this.line].characters);
  }
}

