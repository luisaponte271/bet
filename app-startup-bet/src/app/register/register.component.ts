import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ReactiveFormsModule, 
         FormControl } from '@angular/forms';
import { Router } from '@angular/router';
import { RegisterService } from './register.service';

@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {

  constructor(private router: Router,
              public _registra: RegisterService) { }

  ngOnInit( ): void {}

  formRegister = new FormGroup({  
    nombre : new FormControl('' , Validators.required), 
    correo : new FormControl('' , Validators.required), 
    username : new FormControl('' , Validators.required),  
    celular : new FormControl('' , Validators.required),
    contraseña : new FormControl('' , Validators.required), 
    cod_invitacion : new FormControl('' , Validators.required),  
  });  
 
  RegistrarUsuario() 
  { 
    this._registra.save(this.formRegister.value).subscribe(resp => {  
      console.log('respuesta registrar', resp);
      //this.router.navigate([`/home`]);
    }, error =>{ 
        alert("error al insertar registro del usuario");
    });
  }
}
