/*#include <SoftwareSerial.h>   
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>
#include <HCSR04.h>


int verticalDistance=0;


int Month_days[13]={31,28,31,30,31,30,31,31,30,31,30,31};

String timenames[7] = {"0","3","6","9","12","15","20"};
String daynames[7]= {"Sun","Mon","Tue","Wed","Thru","Fri","Sat"};
String monthnames[12]= {"Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Nov","Oct","Dec"};
int monthdecider=0;
int daysinmonth=0;
int hourdecider = 0;
int daydecider = 0;
int lpy_counter=0;
bool counter= false;

bool leapyear = false;
bool exportdaydata = false;
bool exportmonthdata = false;

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
   if(leapyear == true)
  {

    for(daysinmonth=1;daysinmonth<=29;daysinmonth++)
      {
        for(hourdecider=0;hourdecider<=6;hourdecider++)
        {
          
          Serial.println("---------------------------------------\n");
          Serial.print("Time :"); Serial.println(timenames[hourdecider]);
          tranmission();
          delay(15000);

        }
          Serial.print("Day :"); Serial.println(daysinmonth);
          if(daydecider>6)
          {
            exportdaydata = true;
            exportdata();
            exportdaydata = false;
            daydecider=0;
          }
          Serial.print("Day Name :"); Serial.println(daynames[daydecider]);
          daydecider++;
      
          Serial.print("Month Name:"); Serial.println(monthnames[1]);
          delay(2000);
      }
          exportmonthdata = true;
          exportdata();
          exportdaydata = false;
      
        leapyear == false;
        delay(15000);
  }
  else
  {
    for(monthdecider=0;monthdecider<12;monthdecider++)
    {
      if(counter == true)
      {
        exportmonthdata = true;
        exportdata();
        exportmonthdata = false;
        counter = false;
      }

      for(daysinmonth=1;daysinmonth<=Month_days[monthdecider];daysinmonth++)
      {
        for(hourdecider=0;hourdecider<=6;hourdecider++)
        {

          Serial.println("---------------------------------------\n");
          Serial.print("Time :"); Serial.println(timenames[hourdecider]);
            
          tranmission();
          delay(500);
            

        }
        Serial.print("Day :"); Serial.println(daysinmonth);
        if(daydecider>6)
        {
          exportdaydata = true;
          exportdata();
          exportdaydata = false;
          daydecider=0;
        }
        Serial.print("Day Name :"); Serial.println(daynames[daydecider]);
        daydecider++;
        Serial.print("Month Name:"); Serial.println(monthnames[monthdecider]);

      }
      counter = true;
    } 
  }
  lpy_counter++;
  if(lpy_counter == 4)
  {
    lpy_counter=0;
    leapyear = true;
  }
 
  
  
}

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
void tranmission(){
    HCSR04 hc(5, 14); 
    verticalDistance = hc.dist()*10;



    String postData = "api_key="+ apiKeyValue + "&verticaldistance=" + verticalDistance + "&hourdecider=" +hourdecider+  "&exportmonthdata=" +exportmonthdata + "&exportdaydata=" +exportdaydata ;
    //Serial.print(postData);
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
    Serial.println("---------------------------------------\n");
}
void exportdata()
{

    HCSR04 hc(5, 14); 
    verticalDistance = hc.dist()*10;


    String postData = "api_key="+ apiKeyValue + "&verticaldistance=" + verticalDistance +  "&exportmonthdata=" +exportmonthdata + "&exportdaydata=" +exportdaydata + "&hourdecider=" +hourdecider;
   HTTPClient http;
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
    Serial.print("Export Data Called_ Week:");Serial.println(exportdaydata);
    Serial.print("Export Data Called_Month:");Serial.println(exportmonthdata);
    Serial.println("---------------------------------------\n");
}




*/