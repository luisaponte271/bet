import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators, ReactiveFormsModule, FormControl } from '@angular/forms';
import { Router } from '@angular/router';
import { LoginService } from './login.service';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css']
})
export class LoginComponent implements OnInit {

  constructor(private router: Router, public _login: LoginService) { }

  ngOnInit(): void {
  } 

  formLogin = new FormGroup({  
    username : new FormControl('' , Validators.required),  
    password : new FormControl('' , Validators.required)  
  });  

  Login()  
  {   
      
      this._login.obtener_login(this.Uname?.value, this.Password?.value).subscribe(resp => {  
        console.log('respuesta login',resp);    
        this.router.navigate([`/home`]);
      }, error => { 
        alert("error al intentar loguear al aplicativo");  
      });
 
  }  

  get Uname() { 
    return this.formLogin.get('username');
  }

  get Password() { 
    return this.formLogin.get('password');
  }
}
