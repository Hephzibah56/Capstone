import speech_recognition as sr
import moviepy.editor as mp


def transcribe_video():
    file_path = "C:\Users\hephz\Downloads\transcriber"

    if '\\' in file_path:
        file_path.replace('\\', '\\'*2)
    print("filepath: " + file_path)


### Code to get subtitles and captions from the video 
def transcribe_video_in_bits():
    filepath = "C:\Users\hephz\Downloads\transcriber\AuntieSophie.mp4"  #input("Enter video file path here:\n")
    if '\\' in filepath:
        filepath.replace('\\', '\\'*2)
    print("filepath: " + filepath)

    #Converting video to audio format

    clip = mp.VideoFileClip(filepath) #Takes video file 
    #extensions: mp4 and sublets like mov and others

    clip.audio.write_audiofile(r"converted.wav") #reads video file in audio format. .wav is best for speech recognition

    #Initialize Speech Recognition
    r = sr.Recognizer()
    audio = sr.AudioFile("converted.wav")
    textfile = "videotransc"#input('Enter the name of the transcribed text file:\n')
    with open(textfile + '.txt','w') as file:
        iterations = 11
        for i in range(iterations):
            with audio as source:
                file.write(str(i*5)+"<--"+"-->"+str(i*5+5)+"\n")
                r.adjust_for_ambient_noise(source)
                audio_file = r.record(source, offset=i*5, duration=5)
                result = r.recognize_google(audio_file)
                file.write(result+"\n")

    print("Transcription complete")

