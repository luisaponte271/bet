import { environment } from "src/environments/environment"

export const methodRegister = { 
    obtenerregister: environment.url_api + "save/"
}

export class RegisterEditarRequest {
    cod_user?:string;
    nombre?:string = "";
    correo?:string = "";
    celular?:string = "";
    username?:string = "";
    contraseña?:string = "";
    cod_invitacion?:string = "";
    fech_audit_create?:string = "";
    estado?:string; 
 }

export class RegisterRequest {
   cod_user?:string;
   nombre?:string;
   correo?:string;
   celular?:string;
   username?:string;
   contraseña?:string;
   cod_invitacion?:string;
   fech_audit_create?:string;
   estado?:string; 
}