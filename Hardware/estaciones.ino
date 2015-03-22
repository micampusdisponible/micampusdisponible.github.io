int botonI = 2;
int botonEP = 3; 
int botonSP = 4;
int LEDI = 7;      //attach an LED to digital pin 7
int LEDEP = 8;
int LEDSP = 8;

int counterI;
int botonSalaIndividual = 0;
int ultimoBotonSalaIndividual = 0;

int botonEntradaParqueo = 0;
int ultimoBotonEntradaParqueo = 0;

int botonSalidaParqueo = 0;
int ultimoBotonSalidaParqueo = 0;


#include <SPI.h>
#include <Ethernet.h>
 
 
// Enter a MAC address for your controller below.
// Newer Ethernet shields have a MAC address printed on a sticker on the shield
byte mac[] = {  0x98, 0x4F, 0xEE, 0x01, 0x22, 0xE8 };
char server[]= "www.micampusdisponible.herobo.com";

 
// Initialize the Ethernet client library
// with the IP address and port of the server
// that you want to connect to (port 80 is default for HTTP):
EthernetClient client;


void setup()
{
  //pinMode(button, INPUT);  //define button an INPUT device
  pinMode(botonI, INPUT);
  pinMode(botonEP, INPUT);
  pinMode(botonSP, INPUT);
  pinMode(LEDI, OUTPUT);    //define LED an OUTPUT device
  pinMode(LEDEP, OUTPUT);
  pinMode(LEDSP, OUTPUT);
  
  system("ifup eth0");
  delay(5000);
// Open serial communications and wait for port to open:
  Serial.begin(9600);
   while (!Serial) {
    ; // wait for serial port to connect. Needed for Leonardo only
  }
 
 
  // start the Ethernet connection:
  if (Ethernet.begin(mac) == 0) {
    Serial.println("Failed to configure Ethernet using DHCP");
    // no point in carrying on, so do nothing forevermore:
    for(;;)
      ;
  }
  // give the Ethernet shield a second to initialize:
  delay(1000);
  Serial.println("connecting...");
}

void loop() {
  
  botonSalaIndividual = digitalRead(botonI);

  if (botonSalaIndividual != ultimoBotonSalaIndividual) {
    if (botonSalaIndividual == HIGH) {
      counterI++;
    } 
  }

  ultimoBotonSalaIndividual = botonSalaIndividual;

  if (counterI % 2 == 0) {
    httpRequestIndividual(1);
  } else {
     httpRequestIndividual(0);
  }  
  
}

void httpRequestIndividual(int estado) {
  // if there's a successful connection:
 if (client.connect(server, 80)) {
    Serial.println("connected");
    // Make a HTTP request:
    if(estado == 0){
      client.println("GET /actividad.php?estacion=4&estado=0 HTTP/1.1");
    }else{
      client.println("GET /actividad.php?estacion=4&estado=1 HTTP/1.1");
    }
    
    client.println("Host: www.micampusdisponible.herobo.com");
    client.println("Connection: close");
    client.println();
  } 
  else {
    // if you couldn't make a connection:
    Serial.println("connection failed");
    Serial.println("disconnecting.");
    client.stop();
  }
}

void httpRequestGrupal(int incremento, int lugar) {
  // if there's a successful connection:
 if (client.connect(server, 80)) {
    Serial.println("connected");
    // Make a HTTP request:
    if(lugar == 8){
      if(incremento == -1){
        client.println("GET /grupales.php?incremento=-1&lugar=8 HTTP/1.1");
      }else{
        client.println("GET /grupales.php?incremento=1&lugar=8 HTTP/1.1");
      }
    }else{
      if(incremento == -1){
        client.println("GET /grupales.php?incremento=-1&lugar=9 HTTP/1.1");
      }else{
        client.println("GET /grupales.php?incremento=1&lugar=9 HTTP/1.1");
      }
    }   
    
    client.println("Host: www.micampusdisponible.herobo.com");
    client.println("Connection: close");
    client.println();
  } 
  else {
    // if you couldn't make a connection:
    Serial.println("connection failed");
    Serial.println("disconnecting.");
    client.stop();
  }
}
