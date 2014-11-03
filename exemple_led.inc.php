                <section>
                             <section>
                            <h2>Exemple : Allumer une DEL</h2>
                            <p>
                            </p>
                             </section>

                             <section>
                                    <h2>Montage</h2>
                                        <img src="./exemple/blink/led-pin-13.jpg" width="50%">
                             </section>

                             <section>
                                    <h2>Code</h2>
<a href="http://arduino.cc/en/tutorial/blink">blink led</a>
                                        <pre>
  /*
  Blink
  Turns on an LED on for one second, then off for one second, repeatedly.
 
  This example code is in the public domain.
 */
 
// Pin 13 has an LED connected on most Arduino boards.
// give it a name:
int led = 13;

// the setup routine runs once when you press reset:
void setup() {                
  // initialize the digital pin as an output.
  pinMode(led, OUTPUT);    
}

// the loop routine runs over and over again forever:
void loop() {
  digitalWrite(led, HIGH);   // turn the LED on (HIGH is the voltage level)
  delay(1000);               // wait for a second
  digitalWrite(led, LOW);    // turn the LED off by making the voltage LOW
  delay(1000);               // wait for a second
}
                                        </pre>


                             </section>


                </section>
