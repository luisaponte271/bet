import { HttpClient } from "@angular/common/http";
import { Injectable } from "@angular/core";
import { data } from "jquery";
import { HttpService } from "src/app/public/http/http.service";
import { methodlogin } from "./login";


@Injectable({providedIn: 'root'})
export class LoginService { 
    
    constructor(private _http: HttpService, private http: HttpClient) {} 

     
    obtener_login(uname: string, pass: string){ 
        var data = { uname: uname, pass: pass}
  
        return this._http.GET(methodlogin.obtenerlogin + this._http.CONVERT_JSON_REQUESTPARAM(data));
    }

   
}