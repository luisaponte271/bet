import { HttpClient } from "@angular/common/http";
import { Injectable } from "@angular/core";
import { data } from "jquery";
import { HttpService } from "src/app/public/http/http.service";
import { methodRegister, RegisterEditarRequest, RegisterRequest } from "./register";
import { DatePipe, formatDate } from '@angular/common';
  
@Injectable({providedIn: 'root'})
export class RegisterService { 
    
    constructor(private _http: HttpService, 
                private http: HttpClient,
                private datePipe: DatePipe) {} 
 
    cargar_registro(request: RegisterEditarRequest){  
       
        var registro = new RegisterRequest(); 
        //registro.cod_user = "2";
        registro.username = request.username;
        registro.nombre = request.nombre;
        registro.celular = request.celular;
        registro.cod_invitacion = request.cod_invitacion;
        registro.cod_user = "2";
        registro.contraseña = request.contraseña;
        registro.correo = request.contraseña;
        registro.estado = "1";
        registro.fech_audit_create = new Date().toLocaleDateString('en-CA');
        console.log('request cargar', registro);
        return registro;
    }
    
    save(request: RegisterEditarRequest) {  
        console.log('request save', request);
        return this._http.POST(methodRegister.obtenerregister, this.cargar_registro(request));
    }
}