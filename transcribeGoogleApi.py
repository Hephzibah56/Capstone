import speech_recognition as sr
 
 
def main():
 ##synchronous test of speech to text
    r = sr.Recognizer()
 
    with sr.Microphone() as source:
        ## removes noise from the noise
        r.adjust_for_ambient_noise(source) 
 
        print("Please say something")
 
        audio = r.listen(source)
 
        print("Recognizing Now .... ")
 
 
        # recognize speech using google
 
        try:
            print("You have said \n" + r.recognize_google(audio))
            print("Audio Recorded Successfully \n ")
 
 
        except Exception as e:
            print("Error please say something clearer:  " + str(e))
 
  
 
        # record audio
        with open("recorded.wav", "wb") as f:
            f.write(audio.get_wav_data())
 
 
if __name__ == "__main__":
    main()
