import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http'; 
import { AppComponent } from './app.component'; 
import { RouterModule, Routes } from '@angular/router'; 
import { LoginComponent } from './components/login/login.component';
import { RegisterComponent } from './register/register.component';
import { FormsModule, ReactiveFormsModule } from '@angular/forms';
import { BrowserAnimationsModule } from "@angular/platform-browser/animations"; 
import { HttpService } from './public/http/http.service';
import { LoginService } from './components/login/login.service';
import { FooterComponent } from './components/footer/footer.component';
import { HeaderComponent } from './components/header/header.component';
import { HomeComponent } from './components/home/home.component';
import { RegisterService } from './register/register.service';
import { DatePipe } from '@angular/common';
import { MatchComponent } from './match/match.component';
import { MatchCrudComponent } from './mantenimiento/match-crud/match-crud.component';
 
 
const routes: Routes = [  
  { path: "login", component: LoginComponent }, 
  { path: "register", component: RegisterComponent },  
  //{ path: "home", loadChildren: ()=> import('./components/home/home.module').then(x => x.HomeModule) },
  { path: "home", component: HomeComponent },  
  { path: "match", component: MatchComponent},
  { path: "match-crud", component: MatchCrudComponent}
  //{ path: "", redirectTo:'login', pathMatch:'full' },  
]; 


@NgModule({
	declarations: [
     AppComponent,
     FooterComponent,
     HeaderComponent,  
     LoginComponent,
     RegisterComponent,   
     HomeComponent,
     MatchComponent,
     MatchCrudComponent
     
  ],
	imports: [
		BrowserModule, FormsModule, ReactiveFormsModule, HttpClientModule, BrowserAnimationsModule, 
		RouterModule.forRoot(routes, { useHash: true })
	],
	providers: [LoginService, RegisterService,  HttpService, DatePipe],
	bootstrap: [AppComponent],
})
export class AppModule { }


 