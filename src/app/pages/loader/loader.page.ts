import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-loader',
  templateUrl: './loader.page.html',
  styleUrls: ['./loader.page.scss'],
})
export class LoaderPage implements OnInit {
  indexHtmlContent: string = '';

  constructor(private http: HttpClient) { }

  ngOnInit() {
    this.loadHtmlContent();
  }

  loadHtmlContent() {
    this.http.get('assets/html/index.html', { responseType: 'text' }).subscribe(data => {
      this.indexHtmlContent = data;
    });
  }
}
