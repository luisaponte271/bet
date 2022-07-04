import { HttpClient } from "@angular/common/http";
import { Injectable } from "@angular/core";
import { Observable } from "rxjs";
import { environment } from "src/environments/environment";


@Injectable({ providedIn: "root" })

export class HttpService { 
    constructor(private _httpClient: HttpClient
                //, private _handler: HandlerInterceptor
                ) {}
 

    GET(method: string, options?: any): Observable<any> { 
        return this._httpClient.get(environment.url_servicios + method, options);
    }

    POST(method: string, body: any, options?: any): Observable<any> { 
        console.log('request POST', body);
        return this._httpClient.post(environment.url_servicios + method, body, options);
    } 
 
    CONVERT_JSON_REQUESTPARAM(params:any): string { 
        return "?" + Object.keys(params).map((el)=>( `${el}=${params[el]}` )).join("&");
    }
}  

