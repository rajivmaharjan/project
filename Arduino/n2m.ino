/*#include <SoftwareSerial.h>   
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
#include <HCSR04.h>

HCSR04 hc(5, 14); 


int verticalDistance=0;
int weeklycounter=0,monthlycounter=0;

const char* ssid     = "mufc";
const char* password = "123456789";
WiFiClient client;

String URL ="http://192.168.1.73/project/PHP/ardTOdbs.php";

String apiKeyValue = "fca29d61";

void setup() {
  Serial.begin(115200);
  connectWiFi();
}



void loop() {
    if(WiFi.status() != WL_CONNECTED){
    connectWiFi();
  }
    verticalDistance = hc.dist();
    String postData = "api_key="+ apiKeyValue + "&verticaldistance=" + verticalDistance+"&weeklycounter=" + weeklycounter + "&monthlycounter=" + monthlycounter;
    Serial.print(postData);
    HTTPClient http;  //Declare an object of class HTTPClient
  
    http.begin(client,URL);  //Specify request destination
    http.addHeader("Content-Type","application/x-www-form-urlencoded");
                                   //Send the request
    //http.addHeader("Content-Type", "application/json");
    int httpCode = http.POST(postData); 
    //  int httpCode = http.POST("{\"verticaldistance\":verticalDistance}"); 
    
    String payload = http.getString();
    

    Serial.print("URL:"); Serial.println(URL);
    Serial.print("Data:"); Serial.println(verticalDistance);
    Serial.print("httpCode:"); Serial.println(httpCode);
    Serial.print("payload:"); Serial.println(payload);
    Serial.print("weeklycounter:"); Serial.println(weeklycounter);
    Serial.print("monthlycounter:"); Serial.println(monthlycounter);
    Serial.println("--------------------------------------");
 
    delay(1000);
    weeklycounter++;
    monthlycounter++;
    if(monthlycounter == 11)
    {
      monthlycounter=0;
    }
        if(weeklycounter == 6)
    {
      weeklycounter=0;
    }
  }    //Send a request every 1 second
void connectWiFi(){
  WiFi.mode(WIFI_OFF);
  delay(1000);

  WiFi.mode(WIFI_STA);

  WiFi.begin(ssid,password);
  Serial.println("Connection to WiFi:");

  while (WiFi.status() != WL_CONNECTED){
    delay(500);
    Serial.print(".");
  }

  Serial.print("Connected to :");
  Serial.println(ssid);
  Serial.print("IP address:");
  Serial.println(WiFi.localIP()); 
}
*/
