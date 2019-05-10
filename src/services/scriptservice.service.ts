import { Injectable } from '@angular/core';
import  { HttpClient } from '@angular/common/http';
import { BehaviorSubject } from 'rxjs';
@Injectable({
  providedIn: 'root'
})
export class ScriptserviceService {
  constructor(private http:HttpClient) { }
  line : BehaviorSubject<number> =  new BehaviorSubject(0);
  background : BehaviorSubject<string> = new BehaviorSubject("rooftop.jpg");
  characters : BehaviorSubject<any[]> = new BehaviorSubject([]);
  public getscript(route=""){
    var url;
    if(route != ""){
      url = "../../assets/scripts/"+route+".json"
    }else{
      url = "../../assets/scripts/script.json";
    }
    return  this.http.get(url).toPromise();
  }
}
