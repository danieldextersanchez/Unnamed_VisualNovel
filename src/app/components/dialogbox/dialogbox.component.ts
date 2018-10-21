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
  line : number = 0;
  visible : boolean = true;
  
  constructor(private script : ScriptserviceService) { }

  ngOnInit() {
    this.script.getscript().then((data)=>{
      this.dialog = data["script"];
      this.dialogline = this.dialog[this.line]
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
  }

  messageeffect(){
  
    let log = this.dialog[this.line];
    var dialog = log["message"];
    log["message"] = "";
    this.dialogline = log;
    var time = 500;
    for(let i=0;i<dialog.length;i++){
      setTimeout(()=>{ 
        this.dialogline["message"] += dialog[i];
       },time)
       time +=20;   
    }
  }
}

