import { Injectable } from '@angular/core';
import  { HttpClient } from '@angular/common/http';
@Injectable({
  providedIn: 'root'
})
export class ScriptserviceService {
  constructor(private http:HttpClient) { }

  public getscript(load = undefined){
    return this.http.get("../../assets/script.json").toPromise();
  }
}
