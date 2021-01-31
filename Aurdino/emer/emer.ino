//setup pins 
const char BUTTON_PIN = 8;
bool pressed = false;

void setup(){
  Serial.begin(115200);

  // read pin modes
  pinMode(BUTTON_PIN, INPUT_PULLUP);
}
void loop(){
  //Read button
  bool currentstate = digitalRead(BUTTON_PIN);

  if(currentstate == pressed){
    Serial.println("Emergency");
    while(digitalRead(BUTTON_PIN) == pressed){
      //Do nothing while button is pressed
    }
  }
}
