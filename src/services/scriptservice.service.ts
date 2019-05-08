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
  public getscript(){
    return  this.http.get("../../assets/script.json").toPromise();
  }
}
