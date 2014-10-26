package com.gonzodevs.idk;

import com.example.idk.R;

import android.os.Bundle;
import android.annotation.SuppressLint;
import android.app.Activity;
import android.view.Menu;
import android.webkit.WebView;
import android.webkit.WebSettings;

public class MainActivity extends Activity {

    public static final String URL = "http://google.com";
    

	@SuppressLint("SetJavaScriptEnabled") @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        WebView mainpage = (WebView) findViewById(R.id.webview);
        WebSettings ws = mainpage.getSettings();
        ws.setJavaScriptEnabled(true);
        mainpage.loadUrl(URL);
    }


    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        // Inflate the menu; this adds items to the action bar if it is present.
        getMenuInflater().inflate(R.menu.main, menu);
        return true;
    }
    
}
