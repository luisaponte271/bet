import { CommonModule } from "@angular/common";
import { HttpClientModule } from "@angular/common/http";
import { Component, NgModule } from "@angular/core";
import { FormsModule, ReactiveFormsModule } from "@angular/forms";
import { RouterModule, Routes } from "@angular/router";
import { RegisterComponent } from "src/app/register/register.component";
import { HomeComponent } from "./home.component";
 

export const routes: Routes = [
	{
		path: "", component: HomeComponent,
		children: [
			//{ path: 'investigacion/expediente', component: ExpedienteComponent },
           // { path: 'register', component: RegisterComponent } 
		]
	}
];




@NgModule({
	declarations: [ 
        HomeComponent
	],
	imports: [
		RouterModule.forChild(routes),
		CommonModule, FormsModule, ReactiveFormsModule, HttpClientModule 
	],
	providers: []
})

export class HomeModule { }  