#--------------------- TRANSCRIPTION 2 ------------------------------- 
# The functions in this file converts video to audio and then to text - transcribe_video().
# The transcribe_audio() function converts from audio to text


import speech_recognition as sr
import moviepy.editor as mp

def transcribe_video():
    filepath = "transcriber\AuntieSophie.mp4" 
    #input("Enter video file path here:\n")
    if '\\' in filepath:
        filepath.replace('\\', '\\'*2)
    print("filepath: " + filepath)
    #Converting video to audio format

    clip = mp.VideoFileClip(filepath) #Takes video file 
    #extensions: mp4 and sublets like mov and others

    clip.audio.write_audiofile(r"audioconvert.wav") #reads video file in audio format. .wav is best for speech recognition

    #Initialize Speech Recognition
    r = sr.Recognizer()
    audio = sr.AudioFile("audioconvert.wav")

    with audio as source:
        r.adjust_for_ambient_noise(source, 1)
        audio_file = r.record(source)
        result = r.recognize_google(audio_file)

    #Exporting results
    textfile = input('Enter the name of your output file: ')
    with open(textfile + '.txt','w') as file:
        file.write("Transcription complete:\n")
        file.write(result)
    print("Transcription complete")

## function to handle the audio

def transcribe_audio():
    filepath = "audioconvert.wav" #input("Enter audio file path here (filetype = .mp3):\n")
    if '\\' in filepath:
        filepath.replace('\\', '\\'*2)
    print("filepath: " + filepath)
    clip = mp.AudioFileClip(filepath)
    clip.write_audiofile(r"audioconvert.wav")
    print("debugging 1")
    #Initialize Speech Recognition
    r = sr.Recognizer()
    audio = sr.AudioFile("audioconvert.wav")
    ##print("debugging 222")
    with audio as source:
        r.adjust_for_ambient_noise(source,1)
        audio_file = r.record(source)
        result = r.recognize_google(audio_file)
        print("debugging 00000")
    #Exporting results
    textfile = input('Enter audio output file name: ')
    with open(textfile + '.txt','w') as file:
        file.write("Transcription begins \n")
        file.write(result)
    print("Transcription complete")


def main():
    print("debugging 444")
    print("Audio transcription in process")
    ##transcribe_video()
    transcribe_audio()
    print("debugging 55")
main()